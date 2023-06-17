<?php include "components/navbar.php" ?>
<?php include "components/headskin.php" ?>

<?php include '../models/data.php'; ?>
<?php $cardCount = 0; ?>
<?php foreach ($skin as $info) { ?>
    <?php if ($cardCount < 12) { ?>



        <div class="gallery">
            <div class="card" style="background-image: url(../assets/img/skins/<?= $info['image']; ?>);">
                <h2 class="card_subtitle">Nouveaux Skins</h2>
                <h1 class="card_title"><?= $info['name']; ?></h1>
                <p class="card_about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi optio totam hic neque nemo rerum tempore tenetur
                    non
                    esse quod.
                </p>
                <div class="card_actions">
                    <div class="card_action">
                        <button class="card_btn">
                            <?= $info['argent']; ?>
                        </button>
                        <span class="card_tooltip"></span>
                    </div>
                    <div class="card_action">
                        <button class="card_btn">
                            <?= $info['prix']; ?>
                        </button>
                        <span class="card_tooltip"></span>
                    </div>
                </div>
            </div>
            <div class="card" style="background-image: url(../assets/img/skins/<?= $info['image1']; ?>);">
                <h2 class="card_subtitle">TOP VENTES</h2>
                <h1 class="card_title"><?= $info['name']; ?></h1>
                <p class="card_about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi optio totam hic neque nemo rerum tempore tenetur
                    non
                    esse quod.
                </p>
                <div class="card_actions">
                    <div class="card_action">
                        <button class="card_btn">
                            <?= $info['argent1']; ?>
                        </button>
                        <span class="card_tooltip"></span>
                    </div>
                    <div class="card_action">
                        <button class="card_btn">
                            <?= $info['prix1']; ?>
                        </button>
                        <span class="card_tooltip"></span>
                    </div>
                </div>
            </div>
        </div>

        <?php $cardCount++; ?>
    <?php } ?>
<?php } ?>



<?php include "components/footer.php" ?>