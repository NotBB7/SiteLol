<?php include "components/navbar.php" ?>
<?php include "components/head.php" ?>

<?php include '../models/data.php'; ?>
<?php $cardCount = 0; ?>
<?php foreach ($champion as $info) { ?>
    <?php if ($cardCount < 12) { ?>



        <div class="first hero">
            <img class="hero-profile-img" src="../assets/img/champions/<?= $info['image']; ?>" alt="">
            <div class="hero-description-bk-<?= $info['color']; ?>"></div>
            <div class="hero-logo">
                <img src="../assets/img/logo-card.jpg" alt="">
            </div>
            <div class="hero-description">
                <p><?= $info['name']; ?></p>
            </div>
            <div class="hero-date">
                <p><?= $info['prix'] ?><img src="../assets/img/EB.webp" width="50px" height="50px" alt=""></p>
            </div>
            <div class="hero-btn">
                <a href="#">Achetez</a>
            </div>
        </div>
        <?php $cardCount++; ?>
    <?php } ?>
<?php } ?>



<?php include "components/footer.php" ?>