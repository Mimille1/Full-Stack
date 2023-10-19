1 - Afficher toutes les informations concernant les employés.
SELECT * FROM `employe`

2 - Afficher toutes les informations concernant les départements.
SELECT * FROM `dept`

3 - Afficher le nom, la datee d embauche, le numéro du supérieur, le numéro de département et le salaire de tous les employés.
SELECT `nom` FROM `employe`
SELECT `dateemb` FROM `employe`
SELECT `nosup` FROM `employe`
SELECT `nodep` FROM `employe`
SELECT `salaire` FROM `employe`

On peut cependant changer ces titres en utilisant AS.
SELECT `nom` AS "Nom de l'employé" FROM `employe`

4 - 5 - Afficher le titre de tous les employés.
SELECT DISTINCT `titre` FROM `employe`

6 - Afficher le nom, le numéro d employé et le numéro du département des employés dont le titre est « Secrétaire »
SELECT * FROM `employe` WHERE `titre` = "secrétaire"

7 - Afficher le nom et le numéro de département dont le numéro de département est supérieur à 40.
SELECT `nom`, `nodep` FROM employe WHERE `nodep` > 40

8 - Afficher le nom et le prénom des employés dont le nom est alphabétiquement antérieur au prénom.
SELECT `nom`, `prenom` FROM employe WHERE `nom` < `prenom`

9 - Afficher le nom, le salaire et le numéro du département des employés dont le titre est « Représentant », le numéro de département est 35 et le salaire est supérieur à 20000.
SELECT `nom`, `salaire` , `nodep` FROM employe WHERE `titre` = "représentant" AND `nodep`= 35 AND `salaire` > 20000

10 - Afficher le nom, le titre et le salaire des employés dont le titre est « Représentant » ou dont le titre est « Président ».
SELECT `nom`, `titre` , `nodep` , `salaire` FROM employe WHERE `titre` = "représentant" OR `titre` = "président"

11 - Afficher le nom, le titre, le numéro de département, le salaire des employés du département 34, dont le titre est « Représentant » ou « Secrétaire ».
SELECT `nom`, `titre` , `nodep` , `salaire` FROM employe WHERE `nodep` = 34 AND `titre` = "représentant" OR "secrétaire"

12 - Afficher le nom, le titre, le numéro de département, le salaire des employés dont le titre est Représentant, ou dont le titre est Secrétaire dans le département numéro 34.
.

13 - Afficher le nom, et le salaire des employés dont le salaire est compris entre 20000 et 30000
.

