const input_file = document.getElementById("fichier");
const label = document.querySelector(".label");

input_file.addEventListener("change", () => {
  if (input_file.files.length > 0) {
    let nom = "Fichier Choisis : " + input_file.files[0].name;
    label.textContent = nom;
    label.style.color = "red";
    input_file.style.borderColor = "red";
  } else;
});
