Livewire.on('alertSuccessP', function (messenge) {
  Swal.fire({
    html: '<p><i class="fa-solid fa-check-double text-green-400 pr-4"></i>' + messenge + '</p>',
    heightAuto: false,
    width: 'auto',
    showConfirmButton: false,
    timer: 2000,
    position: 'top',
    backdrop: false
  })
});

Livewire.on('deleteRole', $userId => {
  Swal.fire({
    html: '<p><i class="fa-solid fa-triangle-exclamation text-4xl text-red-500 mb-2"></i> <br/> ¿Está seguro de querer eliminar? </p>',
    width:'350px', 
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Confirmar',
    cancelButtonText: 'Cancelar',
    reverseButtons:true,
  }).then((result) => {
    if (result.isConfirmed) {
      Livewire.emitTo('role.show-roles','delete', $userId)
      Swal.fire(
        {
          html: '<p><i class="fa-solid fa-circle-check text-4xl text-green-500 mb-2"></i><br/> Eliminado con exito!</p>',
          confirmButtonText: 'Aceptar',
          width:'300px'
        }
      )
    }
  })
})

Livewire.on('deleteUser', $roleId => {
  Swal.fire({
    html: '<p><i class="fa-solid fa-triangle-exclamation text-4xl text-red-500 mb-2"></i> <br/> ¿Está seguro de querer modificar la habilitación? </p>',
    width:'350px', 
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Confirmar',
    cancelButtonText: 'Cancelar',
    reverseButtons:true,
  }).then((result) => {
    if (result.isConfirmed) {
      Livewire.emitTo('user.show-users','disable', $roleId)
      Swal.fire(
        {
          html: '<p><i class="fa-solid fa-circle-check text-4xl text-green-500 mb-2"></i><br/> Modificado con exito con exito!</p>',
          confirmButtonText: 'Aceptar',
          width:'300px'
        }
      )
    }
  })
})

Livewire.on('cancelNotice', $roleId => {
  Swal.fire({
    html: '<p><i class="fa-solid fa-triangle-exclamation text-4xl text-red-500 mb-2"></i> <br/> ¿Está seguro de cancelar el interes? </p>',
    width:'350px', 
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Confirmar',
    cancelButtonText: 'Cancelar',
    reverseButtons:true,
  }).then((result) => {
    if (result.isConfirmed) {
      Livewire.emitTo('moder.create-notice','cancel', $roleId)
      Swal.fire(
        {
          html: '<p><i class="fa-solid fa-circle-check text-4xl text-green-500 mb-2"></i><br/> Aviso cancelado con exito!</p>',
          confirmButtonText: 'Aceptar',
          width:'300px'
        }
      )
    }
  })
})