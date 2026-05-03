const etoiles = document.querySelectorAll("span");
const nb_etoiles = document.querySelector(".nb_etoile");
const prc = document.querySelector(".prc");
const reste = document.querySelector(".reste");
const continuer = document.querySelector(".btn-primary");
const autre_Quizz = document.querySelector(".btn-secondary");

let temp_restant = localStorage.getItem("temp");
let score = localStorage.getItem("score");
pourcentage = (score * 100) / 4;

window.addEventListener("load", () => {
  for (let i = 0; i < score; i++) {
    reste.textContent = temp_restant + " s";
    etoiles[i].style.color = "gold";
    nb_etoiles.textContent = score + "/" + "4";
    prc.textContent = pourcentage + "%";
  }
});

continuer.addEventListener("click", () => {
  direction_Interface_Jeu();
});
autre_Quizz.addEventListener("click", () => {
  window.location.replace("/quizz/index.php");
});

function direction_acceuil() {
  window.location.replace("/quizz/index.php");
}
function direction_Interface_Jeu() {
  window.location.replace("/quizz/Game_Interface.php");
}
