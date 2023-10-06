Livewire.on('alertSuccessP', function (messenge) {
  Swal.fire({
    html: '<p><i class="fa-solid fa-check-double text-green-400 pr-4"></i>' + messenge + '</p>',
    heightAuto: false,
    width: 'auto',
    showConfirmButton: false,
    timer: 1500,
    position: 'top',
    backdrop: false
  })
});

Livewire.on('deleteRole', $roleId => {
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
      Livewire.emitTo('role.show-roles','delete', $roleId)
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