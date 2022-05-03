(function () {
    
    console.log('boite_modale.js');
    let boite__modale = document.querySelector('.boite__modale');
    let boite__modale__text = document.querySelector('.boite__modale__text');
    let cours__desc__suite = document.querySelectorAll('.cours__desc__suite');

    let galerie__img = document.querySelectorAll('.galerie img');
    console.log(galerie__img.length);
    for (const img of galerie__img) {
        img.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__modale.classList.add('boite__modale__ouvrir')
            boite__modale__text.innerHTML = bouton.parentNode.parentNode.querySelector('.carte__desc__full').innerHTML
            console.log(this.getAttribute('src'));
        })
    }

    let boite__modale__btn__fermer = document.querySelectorAll('.boite__modale__ferme');
    for (const bouton of boite__modale__btn__fermer) {
        bouton.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__modale.classList.remove('boite__modale__ouvrir')
        })
    }
})()