document.addEventListener('DOMContentLoaded', function () {
    const formulaire = document.getElementById('coordonnees');

    if (typeof formulaire !== 'undefined' && formulaire !== null) {
     formulaire.addEventListener('submit', function (e) {
        //alert('poum');
        //e.preventDefault(); // Empêcher la soumission du formulaire pour le moment
        
        const nomChamp = document.getElementById('nom');
        const prenomChamp = document.getElementById('prenom');
        const emailChamp = document.getElementById('email');
        const numeroChamp = document.getElementById('numero');
        const demandeChamp = document.getElementById('demande');

        const nomError = document.getElementById('nomError');
        const prenomError = document.getElementById('prenomError');
        const emailError = document.getElementById('mailError');
        const numeroError = document.getElementById('numeroError');
        const adresseError = document.getElementById('adresseError');

        
        function validateNom() {
            const nom = nomChamp.value.trim();
            const regexLettres = /^[a-zA-Z]+$/;

            if (nom === '') {
                nomError.textContent = 'Veuillez saisir votre nom.';
                nomError.style.color = 'red';
                nomError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
                return false;
            }
            else if (!regexLettres.test(nom)) {
                nomError.textContent = 'Veuillez saisir un nom valide.';
                nomError.style.color = 'red';
                nomError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
                return false; 
            }
             else {
                nomError.textContent = ''; 
                return true;
            }
        }

        function validatePrenom() {
            const prenom = prenomChamp.value.trim();
            const regexLettres = /^[a-zA-Z]+$/;
            if (prenom === '') {
                prenomError.textContent = 'Veuillez saisir votre prénom.';
                prenomError.style.color = 'red';
                prenomError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
                return false;
            } 
            else if (!regexLettres.test(prenom)) {
                prenomError.textContent = 'Veuillez saisir un prénom valide.';
                prenomError.style.color = 'red';
                prenomError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
                return false; 
            }
            else {
                prenomError.textContent = ''; 
                return true;
            }

        }

        function validateEmail() {
            const email = emailChamp.value.trim();
            const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (email === '') {
                emailError.textContent = 'Veuillez saisir votre adresse e-mail.';
                emailError.style.color = 'red';
                emailError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
                return false;
            } 
            else if (!regexEmail.test(email)) {
                emailError.textContent = 'Veuillez saisir une adresse e-mail valide.';
                emailError.style.color = 'red';
                emailError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
                return false;
            } 
            else {
                emailError.textContent = ''; 
                return true;
            }
        }


        function validateNumero() {
            const numero = numeroChamp.value.trim();

            if (numero === '') {
                numeroError.textContent = 'Veuillez saisir votre numéro de téléphone.';
                numeroError.style.color = 'red';
                numeroError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
                return false;
            } 
            else {
                numeroError.textContent = ''; 
                return true;
            }
        }

          function validateDemande() {
            const demande = demandeChamp.value.trim();
/*
            if (demande === '') {
                adresseError.textContent = 'Veuillez saisir votre demande.';
                adresseError.style.color = 'red';
                adresseError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
                return false;
            }
        
             else {
                adresseError.textContent = ''; 
                return true;
            }
            */
            if (demande === '') {
                adresseError.textContent = 'Veuillez saisir votre demande.';
                adresseError.style.color = 'red';
                adresseError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
                return false;
            } else {
                adresseError.textContent = ''; 
                adresseError.style.backgroundColor = ''; // Réinitialiser la couleur de fond
                return true;
            }
        }

       
        const isNomValid = validateNom();
        const isPrenomValid = validatePrenom();
        const isEmailValid = validateEmail();
        const isNumeroValid = validateNumero();
        const isDemandeValid = validateDemande();

        alert('plouf');
       
        if (isNomValid && isPrenomValid && isEmailValid && isNumeroValid && isDemandeValid ) {
            alert('paf');
            formulaire.submit(); // Soumettre le formulaire si toutes les validations sont réussies
        }
    });
}

});

document.addEventListener('DOMContentLoaded', function () {
    
    const formulaire = document.getElementById('commande');


    if (typeof formulaire !== 'undefined' && formulaire !== null) {
     formulaire.addEventListener('submit', function (e) {
        e.preventDefault(); // Empêcher la soumission du formulaire pour le moment
   
    const nomChamp = document.getElementById('NomPrenom');
    const emailChamp = document.getElementById('courriel');
    const numeroChamp = document.getElementById('numero');
    const demandeChamp = document.getElementById('adresse');

   
    const nomError = document.getElementById('NomPrenomError');
    const emailError = document.getElementById('mailError');
    const numeroError = document.getElementById('numeroError');
    const adresseError = document.getElementById('adresseError');

 
    function validateNomPrenom() {
        const nom = nomChamp.value.trim();
        const regexLettres = /^[a-zA-Z]+$/+/^[a-zA-Z]+$/;

        if (nom === '') {
            nomError.textContent = 'Veuillez saisir votre nom et prenom.';
            nomError.style.color = 'red';
            nomError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
            return false;
        }
        else if (!regexLettres.test(nom)) {
            nomError.textContent = 'Veuillez saisir un nom et prenom valide.';
            nomError.style.color = 'red';
            nomError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
            return false; 
        }
         else {
            nomError.textContent = ''; 
            return true;
        }
    }

    function validateEmail() {
        const email = emailChamp.value.trim();
        const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (email === '') {
            emailError.textContent = 'Veuillez saisir votre adresse e-mail.';
            emailError.style.color = 'red';
            emailError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
            return false;
        } 
        else if (!regexEmail.test(email)) {
            emailError.textContent = 'Veuillez saisir une adresse e-mail valide.';
            emailError.style.color = 'red';
            emailError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
            return false;
        } 
        else {
            emailError.textContent = ''; 
            return true;
        }
    }

    
    function validateNumero() {
        const numero = numeroChamp.value.trim();

        if (numero === '') {
            numeroError.textContent = 'Veuillez saisir votre numéro de téléphone.';
            numeroError.style.color = 'red';
            numeroError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
            return false;
        } 
        else {
            numeroError.textContent = ''; 
            return true;
        }
    }
    
      function validateAdresse() {
        const demande = demandeChamp.value.trim();

        if (demande === '') {
            adresseError.textContent = 'Veuillez saisir votre adresse.';
            adresseError.style.color = 'red';
            adresseError.style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
            return false;
        }
       
         else {
            adresseError.textContent = ''; 
            return true;
        }
    }

    //formulaire.addEventListener('submit', function (e) {
       
        const isNomValid = validateNomPrenom();
        const isEmailValid = validateEmail();
        const isNumeroValid = validateNumero();
        const isAdresseValid = validateAdresse();

       
       /* if (!isNomValid || !isEmailValid || !isNumeroValid || !isAdresseValid ) {
            e.preventDefault();
        }
        */

        if (isNomValid && isEmailValid && isNumeroValid && isAdresseValid ) {
            formulaire.submit(); // Soumettre le formulaire si toutes les validations sont réussies
        }

    });
    }
});