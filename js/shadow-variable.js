const articleList = []; // In a real app this list would be full of articles.
// utiliser des variables permet la gestion en dynamique des différents compteurs si un changement devait survenir
let maxKudos = 5;
let kudosCount = document.getElementById('kudos');
let totalKudosCount = document.getElementById('total-kudos');


// on initialise le compteur total kudos et on boucle sur les articles pour rajouter au compteur
// les kudos qu'on a déjà donné aux différents articles
function calculateTotalKudos(articles) {
  let kudos = 0;
  
  for (let article of articles) {
    kudos += article.kudos;
  }

  totalKudosCount.innerHTML = kudos;
  
  return;
}

// on initialise ici les valeurs texte dans le html lorsque tout est chargé pour être sur
// qu'aucun problème ne survient lors de la récupération des balises html
window.onload = () => {
  kudosCount.innerText = maxKudos;
  calculateTotalKudos(articleList);
}

