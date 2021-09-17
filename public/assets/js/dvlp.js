//  Swal.fire({
//         icon: 'info',
//         title: 'Development mode',
//         text: 'This website is currently on development mode !',
//         confirmButtonText: `Continue anyway`,

//       })
    
Swal.fire({
  imageUrl: 'assets/img/covid.png',
  imageAlt: 'Covid-19 Prevention',
  showConfirmButton: false,
  showCloseButton: true,
  backdrop: `
    rgba(99,249,8,0.4)
    url("/assets/img/covid.gif")
    left top
    no-repeat
  `
})
