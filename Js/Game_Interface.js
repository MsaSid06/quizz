const niveaux = document.querySelectorAll(".level");
const bonne_reponse = document.querySelector(".vrai");
const mauvaise_reponse = document.querySelector(".faux");
const timer = document.querySelector(".timer");
const button = document.querySelectorAll("button");
const paragraphe = document.querySelector(".Question");
const commencer = document.querySelector(".start");
const level_1 = document.querySelector(".first");

let current = 0,
  score = 0;

commencer.addEventListener("click", () => {
  bonne_reponse.style.display = "inline";
  mauvaise_reponse.style.display = "inline";
  level_1.classList.add("shadow");
  commencer.style.display = "none";
  Demarer_Minuteur();
});

bonne_reponse.addEventListener("click", () => {
  //   console.log(current);
  niveaux[current].classList.remove("fausser");
  niveaux[current++].classList.add("trouver");
  console.log(current);
  current == 4 ? (current = 3) : "";
  niveaux[current].classList.add("shadow");
  score = SCORE();
  console.log(score);
  if (score == 4) {
    arreter_timer();
    direction_resulat();
  }
});

mauvaise_reponse.addEventListener("click", () => {
  //   console.log(current);
  while (current != 0) {
    niveaux[current].classList.remove("shadow");
    niveaux[--current].classList.remove("trouver");
    niveaux[current].classList.add("fausser");
  }
});

button.forEach((btn) =>
  btn.addEventListener("click", () => {
    paragraphe.classList.remove("visible");
    setTimeout(async () => {
      paragraphe.textContent = await Charger_une_Question();
      paragraphe.classList.add("visible");
    }, 400);
  }),
);

function Demarer_Minuteur() {
  interval = setInterval(() => {
    timer.textContent = parseInt(timer.textContent) - 1;
    if (timer.textContent == 0) {
      arreter_timer();
      direction_resulat();
    }
  }, 1001);
}

function arreter_timer() {
  clearInterval(interval);
  interval = null;
}

async function Charger_une_Question() {
  try {
    let reponse = await fetch("/quizz/Traitement.php");
    let resultat = await reponse.json();
    return resultat;
  } catch (e) {
    console.error("Erreur :", e);
  }
}

/**
 * @score est le score precedent et
 * @result est le score en court
 * @logique si le score precedent est sup au score courrant alors on garde le precedent (logique du prof)
 * @returns le nb d'element qui sont devenus jaunes
 */
function SCORE() {
  let result = 0;

  niveaux.forEach((niv) => {
    if (niv.classList.contains("trouver")) result += 1;
  });
  if (result >= score) {
    return result;
  }
  return score;
}

// Le jeux s'arrete si tout est jaune ou si le timer s'arrete

function direction_resulat() {
  localStorage.setItem("temp", timer.textContent);
  localStorage.setItem("score", score);
  window.location.replace("/quizz/Resultat.php");
}
