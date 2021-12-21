let form = document.querySelector("#loginForm");

/*********************** Ecoute de la validation de EMAIL ************************** */
console.log(form.email);
// ecouter la modification de l'email
form.email.addEventListener("change", function () {
  /* on va ecouter le changement dans le input, on utilise une fonction de callback*/ validEmail(
    this
  ); /* Appelle une foction (ex: valiEmail) et rentrer dans cette fonction ce que l'utilisateur est en train de saisir "THIS" ça passe le formEmail dans la fonction validEmail*/
});

/*********************** Ecoute de la validation de Password ************************** */

form.password.addEventListener("change", function () {
  validPassword(this); //This = on passe le form.password dans la fonction
});

const validEmail = function (inputEmail) {
  // creation de la regex pour la validation EMail
  let emailRegExp = new RegExp(
    "^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$",
    "g"
  );

  let testEmail = emailRegExp.test(inputEmail.value); // test de la valeur de inputEmail
  let small = inputEmail.nextElementSibling;

  if (testEmail == true) {
    // si test email est vrai//

    // on change le texte sous la balise suivante "small"//
    small.innerHTML = ""; // on inscrit la données "Adresse valide" dans ce cas, il n'incris rien dans l'html//
    small.classList.remove("text-danger"); // CSS pour enlever le texte "danger" s'il etait là avant//
    small.classList.add("text-succes"); //CSS pour mettre en vert la balise//
  } else {
    small.innerHTML = "Adresse Non Valide"; // sinon "Adresse invalide"//
    small.classList.remove("text-succes"); // CSS pour enlever le texte "sucess" s'il etait là avant//
    small.classList.add("text-danger"); // CSS pour mettre en rouge la balise//
  }
};

/************************ Validation Password ********************* */
const validPassword = function (inputPassword) {
  let msg;
  let valid = false;
  // Au moins 3 caracteres dans le mot de passe
  if (inputPassword.value.length < 3) {
    msg = "Le mot de passe doit contenir au moins 3 caractères"; // On change la variable message
  }
  // Au moins 1 majuscule
  else if (!/[A-Z]/.test(inputPassword.value)) {
    // test s'il n'y a pas de majuscule
    msg = "Le mot de passe doit contenir au moins 1 majuscule";
  }
  // AU moins 1 minuscule
  else if (!/[a-z]/.test(inputPassword.value)) {
    // test s'il n'y a pas de minuscule
    msg = "Le mot de passe doit contenir au moins 1 minuscule";
  }
  // AU moins 1 chiffre
  else if (!/[0-9]/.test(inputPassword.value)) {
    msg = "Le mot de passe doit contenir au moins 1 chiffre";
  }
  // mot de passe valide
  else {
    msg = "Le mot de passe est valide";
    valid = true;
  }

  // Affichage
  // Recupération de la balise Small
  let small = inputPassword.nextElementSibling;

  if (valid) {
    //on reprend la variable Valid passée à True dans le 'Else'

    // on change le texte sous la balise suivante "small"//
    small.innerHTML = "Mot de passe Valide"; // on inscrit la données "Adresse valide" dans ce cas, il n'incris rien dans l'html//
    small.classList.remove("text-danger"); // CSS pour enlever le texte "danger" s'il etait là avant//
    small.classList.add("text-succes"); //CSS pour mettre en vert la balise//
  } else {
    small.innerHTML = msg; // nous reprenons la variable msg pour l'afficher dans innerHTML
    small.classList.remove("text-succes"); // CSS pour enlever le texte "sucess" s'il etait là avant//
    small.classList.add("text-danger"); // CSS pour mettre en rouge la balise//
  }
};
