let drLink = document.querySelectorAll('.dr-link');

drLink.forEach(element => {
  element.addEventListener('click', function (e) {
    e.preventDefault();
    let ulDrop = document.querySelector(element.getAttribute('data-target'))
    if( ulDrop.style.height == 'auto' )
    ulDrop.style.height = '0';
    else
    ulDrop.style.height = 'auto';


    
  })
});