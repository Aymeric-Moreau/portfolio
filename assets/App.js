
//let btn = document.getElementById("btnJN");
//btn.onclick = function(){
//    document.body.classList.toggle("dark_mode");
//}

$(document).ready(function () {
// Récupérer le bouton et le corps du document
let btn = document.getElementById("btnJN");
let body = document.body;

// Vérifier si le mode sombre est déjà activé dans la session en cours
let isDarkMode = sessionStorage.getItem("darkMode") === "true";

// Mettre à jour l'interface en fonction de l'état du mode sombre
function updateDarkMode() {
    if (isDarkMode) {
        body.classList.add("dark_mode");
    } else {
        body.classList.remove("dark_mode");
    }
}

// Définir l'événement clic sur le bouton pour basculer le mode sombre
btn.onclick = function() {
    isDarkMode = !isDarkMode; // Inverser l'état du mode sombre
    sessionStorage.setItem("darkMode", isDarkMode); // Enregistrer l'état dans la session en cours
    updateDarkMode(); // Mettre à jour l'interface
};

// Appeler la fonction pour mettre à jour l'interface lors du chargement de la page
updateDarkMode();
});