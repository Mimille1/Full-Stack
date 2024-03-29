<?php

include 'DAO.php';

$result = plat_categorie($connexion);



?>

<div class="container-fluid parallax overflow-hidden">
    <?php require 'header.php'; ?>

    <div class="card-deck justify-content-center d-md-flex">
        <?php foreach ($result as $row) {
            $verif = True;
            $id = $row['id']; ?>

            <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                <div class="zoom">

                    <div class="card ml-3" style="background-color: rgb(156, 156, 156);">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="ASSET/img/food/<?= $row['image']; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $row['libelle']; ?>
                                    </h5>
                                    <p class="card-text">
                                        <?= $row['description']; ?>
                                    </p>
                                    <p class="card-text">
                                        <?= $row['prix'] . "€" ?>
                                    </p>
                                    <a href="commande_form.php?id=<?= $id ?>" class="btn btn-primary">Commander</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        if (!$verif) { ?>
            <div id="mention" class="container mt-5 d-flex text-align-center">
                <p>
                    Pas de plat dans cette catégorie pour le moment.
                </p>
            </div>
        <?php }
        ?>

    </div>
    <br><br><br><br>






    <?php require 'footer.php'; ?>
</div>
</body>

</html>