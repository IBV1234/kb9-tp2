<?php
require "views/partials/header.php";
require "views/partials/nav.php";

?>
<div class="ocllapse navbar-collapse" id="navbarsMain">

    <ul class="container nav nav-pills">
        <?php foreach ($Catégories as $key => $value): ?>

            <li class='nav-item'>

                <a class="nav-link <?= $value['name'] == 'Urumakis' ? 'active' : '' ?>" data-bs-toggle="pill"
                    href="#tab<?= $key + 1 ?>"><?= $value['name'] ?></a>

            </li>

        <?php endforeach ?>

    </ul>
</div>
</div>
<ul class="container nav navbar-nav justify-content-end">
    <li class="nav-item">
        <a href="/connection">     

                <i class="fa-solid fa-right-to-bracket fa-lg" name="Panier"></i>        
        </a>
    </li>
    <div class="cart-wrapper">
        <li class="nav-item">

            <a class="nav-link nav-menu" href="?panier=/panier" name="Panier" title="Panier d'achat">

                <i class="fa-solid fa-cart-shopping fa-lg"></i> <!-- Icone du panier -->
                <div class="cart-counter" id="cart-counter"><?= $NombreSushsiPanier ?></div> <!-- Compteur du panier -->
            </a>
        </li>
    </div>
</ul>
</nav>

<main>
    <div class="tab-content">
        <div class='tab-pane active' id='tab1' role='tabpanel'>
            <div class="row">
                <?php foreach ($Sushis as $key => $value): ?>
                    <?php if ($key == 3) {
                        break;
                    }
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="img-thumbnail">
                            <img src="public/uploads/<?= $value['image'] ?>" class="img-fluid" alt="...">
                            <div class="price"><?= $value['price'] ?></div>
                            <div class="caption">
                                <h4><?= $value['name'] ?></h4>
                                <p><?= $value['description'] ?></p>
                                <a href="?id=<?= $key + 1 ?>" class="btn btn-order add-to-cart" role="button"
                                    onclick="return alert('Article ajouté');"><span class="bi-cart-fill"></span> Ajouter au
                                    panier</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>


        <div class='tab-pane ' id='tab2' role='tabpanel'>
            <div class="row">
                <?php foreach ($Sushis as $key => $value): ?>
                    <?php
                    if ($key == 3 || $key == 4): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?= $value['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $value['price'] ?></div>
                                <div class="caption">
                                    <h4><?= $value['name'] ?></h4>
                                    <p><?= $value['description'] ?></p>
                                    <a href="?id=<?= $key + 1 ?>" class="btn btn-order add-to-cart" role="button"
                                        onclick="return alert('Article ajouté');"><span class="bi-cart-fill"></span> Ajouter au
                                        panier</a>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>

            </div>
        </div>
        <div class='tab-pane ' id='tab3' role='tabpanel'>
            <div class="row">
                <?php foreach ($Sushis as $key => $value): ?>
                    <?php
                    if ($key == 5 || $key == 6): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?= $value['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $value['price'] ?></div>
                                <div class="caption">
                                    <h4><?= $value['name'] ?></h4>
                                    <p><?= $value['description'] ?></p>
                                    <a href="?id=<?= $key + 1 ?> " class="btn btn-order add-to-cart" role="button"
                                        onclick="return alert('Article ajouté');"><span class="bi-cart-fill"></span> Ajouter au
                                        panier</a>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
        <div class='tab-pane ' id='tab4' role='tabpanel'>
            <div class="row">
                <?php foreach ($Sushis as $key => $value): ?>
                    <?php
                    if ($key == 7 || $key == 8): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?= $value['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $value['price'] ?></div>
                                <div class="caption">
                                    <h4><?= $value['name'] ?></h4>
                                    <p><?= $value['description'] ?></p>
                                    <a href="?id=<?= $key + 1 ?>" class="btn btn-order add-to-cart" role="button"
                                        onclick="return alert('Article ajouté');"><span class="bi-cart-fill"></span> Ajouter au
                                        panier</a>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
        <div class='tab-pane ' id='tab5' role='tabpanel'>
            <div class="row">
                <?php foreach ($Sushis as $key => $value): ?>
                    <?php
                    if ($key == 9 || $key == 10): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?= $value['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $value['price'] ?></div>
                                <div class="caption">
                                    <h4><?= $value['name'] ?></h4>
                                    <p><?= $value['description'] ?></p>
                                    <a href="?id=<?= $key + 1 ?>" class="btn btn-order add-to-cart" role="button"
                                        onclick="return alert('Article ajouté');"><span class="bi-cart-fill"></span> Ajouter au
                                        panier</a>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
require "views/partials/footer.php";
?>