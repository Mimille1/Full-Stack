<?php

include 'DAO.php';

$result = categorie_categorie($connexion);


?>


<div class="container-fluid parallax overflow-hidden">
    <?php require 'header.php'; ?>
    <!-- recherche -->
    <div class="card-deck justify-content-center d-md-flex">
        <?php foreach ($result as $row) {
            $id = $row->id;
            $nombre++; ?>

            <div class="col-md-4 col-12 d-flex justify-content-center mt-5">
                <div class="zoom">
                    <a href="plat_categorie.php?id=<?= $id ?>">
                        <div class="card" style="background-color: rgb(156, 156, 156);">

                            <div class="card-header">
                                Catégorie
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $row->libelle; ?>
                                </h5>

                                <br>
                                <img class="card-img-bottom" src="ASSET/img/category/<?= $row->image; ?>" alt="Card images category">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        <?php
            if ($nombre == 6) {
                $nombre = 0;
                break;
            }
        } ?>



    </div>


    <br><br><br><br>
    <?php require 'footer.php'; ?>
</div>
</body>

</html>