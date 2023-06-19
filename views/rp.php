<?php include "components/navbar.php" ?>
<?php include "components/headrp.php" ?>


<?php $cardCount = 0; ?>
<?php foreach ($rp as $info) { ?>
  <?php if ($cardCount < 6) { ?>

    <section>
      <div class="wrapper">
        <div class="product-img">
          <img src="https://assets.millionpugs.com/redeem/prd/RIOT_Points_100_RP_66de8be237.png" height="420" width="327">
        </div>
        <div class="product-info">
          <div class="product-text">
            <h1><?= $info['nombre']; ?></h1>
            <h2><?= $info['bonus']; ?></h2>
            <p><?= $info['description']; ?> </p>
          </div>
          <div class="product-price-btn">
            <p><?= $info['prix']; ?></p>
            <button type="button">Achetez</button>
          </div>
        </div>
      </div>
    </section>
    <?php $cardCount++; ?>
  <?php } ?>
<?php } ?>
<?php include "components/footer.php" ?>