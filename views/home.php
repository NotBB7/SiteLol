<?php include "components/navbar.php" ?>
<?php include "components/head.php" ?>



<div class="container d-flex justify-content-center mt-50 mb-50">

    <div class="row">
        <div class="col-md-4 mt-2">
        <?php include '../models/data.php'; ?>
            <?php $cardCount = 0; ?>
            <?php foreach ($champion as $info) { ?>
                <?php if ($cardCount < 12) { ?>
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions">

                        <img src="../assets/img/champions/<?= $info['image']; ?>" class="card-img img-fluid" width="96" height="350" alt="Image">


                    </div>
                </div>

                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2">
                            <a href="#" class="text-default mb-2" data-abc="true"><?= $info['name'] ?></a>
                        </h6>

                        <a href="#" class="text-muted" data-abc="true"><?= $info['region'] ?> & <?= $info['description'] ?></a>
                    </div>

                    <h3 class="mb-0 font-weight-semibold"><?= $info['prix'] ?></h3>

                    <div>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                        <i class="fa fa-star star"></i>
                    </div>

                    <div class="text-muted mb-3"><?= $info['poste'] ?></div>

                    <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Achetez</button>


                </div>
            </div>
            <?php $cardCount++; ?>
                <?php } ?>
            <?php } ?>




        </div>

    </div>
</div>











<?php include "components/footer.php" ?>