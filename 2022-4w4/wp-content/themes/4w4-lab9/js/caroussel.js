(function () {
    
    console.log('boite_modale.js');
    let boite__modale = document.querySelector('.boite__modale');
    let boite__modale__text = document.querySelector('.boite__modale__text');
    let cours__desc__suite = document.querySelectorAll('.cours__desc__suite');

    let galerie__img = document.querySelectorAll('.galerie img');
    console.log(galerie__img.length);
    // Creation d'un element img pour chaque image de la galerie
    let elmimg = document.createElement('img');
    //Dans l'article de la boite modale on ajoute la balise img
    boite__modale__text.appendChild(elmimg);
    for (const img of galerie__img) {
        img.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__modale.classList.add('boite__modale__ouvrir')
            
            console.log(this.getAttribute('src'));
            elmimg.setAttribute('src', this.getAttribute('src'));
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