1. Ecrire des requêtes d interrogation de la base de données 

.Afficher la liste des commandes ( la liste doit faire apparaitre la date, les informations du client, le plat et le prix )

.Afficher la liste des plats en spécifiant la catégorie
SELECT libelle AS plat, libelle AS categorie FROM plat

.Afficher les catégories et le nombre de plats actifs dans chaque catégorie
SELECT plat.* FROM plat JOIN categorie ON plat.id_categorie = categorie.id WHERE categorie.id

.Liste des plats les plus vendus par ordre décroissant
SELECT libelle AS plat COUNT(*) AS quantite FROM commande JOIN plat ON commande.plat_id = plat_id GROUP BY plat_id , libelle ORDER BY COUNT(*) DESC 

.Le plat le plus rémunérateur
SELECT libelle AS plat, SUM(total) FROM commande JOIN plat ON commande.id_plat = id_plat GROUP BY id_plat , libelle ORDER BY SUM(total) DESC

.Liste des clients et le chiffre d affaires généré par client (par ordre décroissant)
SELECT nom_client AS commande , SUM(total) FROM commande JOIN nom_client ON commande.nom_client = non_client JOIN plat ON commande.id_plat = id_plat GROUP BY nom_client ORDER BY SUM(total) DESC

2. Ecrire des requêtes de modification de la base de données

.Ecrivez une requête permettant de supprimer les plats non actif de la base de données
DELETE FROM plat WHERE active = 0

.Ecrivez une requête permettant de supprimer les commandes avec le statut livré
DELETE FROM commande WHERE etat = 'Livrée'

.Ecrivez un script sql permettant d ajouter une nouvelle catégorie et un plat dans cette nouvelle catégorie.


.Ecrivez une requête permettant daugmenter de 10% le prix des plats de la catégorie 'Pizza'
UPDATE plat SET prix = prix * 1.10 WHERE libelle = (SELECT id FROM categorie WHERE libelle = 'Pizza')