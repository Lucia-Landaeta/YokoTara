<?php
namespace App\Http\Livewire\Donation;
require base_path('vendor/autoload.php');
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Exceptions\MPApiException;
use App\Models\Donation;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowDonation extends Component
{
    use WithPagination;
    public $open = false, $transaction_id, $error = false, $message;

    public function render()
    {
        $donations = Donation::orderBy('id','desc')->paginate(7);
        return view('livewire.donation.show-donation', compact('donations'));
    }
    protected $rules = [
        'transaction_id' => 'required|unique:App\Models\Donation,transaction_id',
    ];
    protected $messages = [
        'transaction_id.required' => 'El id de la operación es obligatorio.',
        'transaction_id.unique' => 'Esta operación ya fue registrada.',
    ];

    public function recover()
    {
        $this->validate();
        try {
            MercadoPagoConfig::setAccessToken(config('services.mercadopago.token'));
            $client = new PaymentClient();
            $payment = $client->get($this->transaction_id);
            // dd($payment);
            Donation::create([
                'transaction_id' => $payment->id,
                'date' => Carbon::parse($payment->date_approved)->format('Y-m-d'),
                'amount' => $payment->transaction_amount
            ]);
            $this->reset(['open', 'transaction_id']);
            $this->emit('alertSuccessP', 'Donación registrada exitosamente');
        } catch (MPApiException $e) {
            $this->message = $e->getApiResponse()->getContent()['message'];
            $this->error = true;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }
}
