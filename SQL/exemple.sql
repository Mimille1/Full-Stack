Afficher toutes les informations concernant les employés.
SELECT * FROM `employe`

Afficher toutes les informations concernant les départements.
SELECT * FROM `dept`

Afficher le nom, la datee d embauche, le numéro du supérieur, le numéro de département et le salaire de tous les employés.
SELECT `nom` FROM `employe`
SELECT `dateemb` FROM `employe`
SELECT `nosup` FROM `employe`
SELECT `nodep` FROM `employe`
SELECT `salaire` FROM `employe`

On peut cependant changer ces titres en utilisant AS.
SELECT `nom` AS "Nom de l'employé" FROM `employe`