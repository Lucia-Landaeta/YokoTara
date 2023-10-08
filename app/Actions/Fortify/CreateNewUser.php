<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255','alpha:ascii'],
            'lastname' => ['required', 'string', 'max:255','alpha:ascii'],
            'phone' => ['required', 'integer','max:2999999999'],
            'locality_id' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ],[
            'lastname.required' => 'El campo apellido es obligatorio.',
            'phone.max' => 'El teléfono no debe tener más de 10 dígitos.',
            'locality.required' => 'El campo localidad es obligatorio.'
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'lastname' => $input['lastname'],
            'phone' => $input['phone'],
            'locality_id' => $input['locality_id'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        $user->assignRole('User');
        return $user;
    }
}
