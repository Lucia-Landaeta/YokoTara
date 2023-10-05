Livewire.on('alert', function(messenge) {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        text: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      })
});

Livewire.on('alertSuccessP', function(messenge) {
    Swal.fire({
        html: '<p><i class="fa-solid fa-check-double text-green-400 pr-4"></i>'+messenge+'</p>',
        heightAuto: false,
        width: 'auto',
        showConfirmButton: false,
        timer: 1500,
        position: 'top',
        backdrop:false
      })
});