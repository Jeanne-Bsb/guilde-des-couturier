document.addEventListener("DOMContentLoaded", function() {

  var photosWrapper = document.querySelector('.js-photos');
  var photos = [...document.querySelectorAll('.js-photo')];
  var photoWidth = photos[0].offsetWidth; // 500px

  // position slide courante
  var position = 1;
  var minPosition = 0;
  var maxPosition = photos.length - 1;
  
  // Q2. Décalage d'une image vers la gauche
  function decaleGauche() {
    position++;

    // Q3. Détection qu'on a atteint la photo la plus à droite
    if (position > maxPosition) {
      retourDebut();
      setTimeout(() => {
        photosWrapper.classList.remove('no-anime');
        decaleGauche()
      },20)
    } else {
      photosWrapper.style.left = position * -90 + "vw";
    }
  }
  
  function retourDebut () {
    position = minPosition + 1;
    photosWrapper.classList.add("no-anime");
    photosWrapper.style.left = position * -90 + "vw";
  }

  // Q4. décalage automatique vers la gauche toutes les 2 secondes
  setInterval(function() {
    decaleGauche();
  }, 2000);

  function decaleDroite() {
    position = position-1;

    // Q3. Détection qu'on a atteint la photo la plus à droite
    if (position < minPosition) {
      position = maxPosition-1;
      photosWrapper.classList.add("no-anime");
      photosWrapper.style.left = maxPosition * -90 +"vw";
      setTimeout(() => {
        photosWrapper.classList.remove('no-anime');
        decaleDroite()
      },20)
    } else {
      photosWrapper.style.left = position * -90 + "vw";
    }
  }

  document.querySelector('.droite').addEventListener('click', function(click){
    console.log('click');
    decaleGauche();
  })
  document.querySelector('.gauche').addEventListener('click', function(click){
    console.log('click');
    decaleDroite();
  })
});