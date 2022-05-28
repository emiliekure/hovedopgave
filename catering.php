<!-- Sets the current page variable and includes the header.php -->
<?php $page = "catering"; ?>
<?php require_once 'includes/header.php'; ?>

<div class="main">
    <section class="general hero">
        <div class="title">
            <h1>Catering</h1>
        </div>
    </section>
    <section class="content">
        <section class="text">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo ducimus dicta in libero animi debitis
                molestias odit eos recusandae cumque molestiae officia, dolores amet soluta!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, animi! Id consectetur iure beatae,
                libero placeat nulla dignissimos quia, sint eaque, quo velit ab earum.</p>
        </section>
        <section class="photos">
            <img class="hori first" src="img/photos/potatoes.jpg" alt="">
            <img class="verti second" src="img/photos/spread.jpg" alt="">
        </section>
        <section class="buttons">
            <a href="menu.php" class="primary-btn">
                Se menu
            </a>
            <a href="kontakt.php" class="secondary-btn">
                Kontakt
            </a>
        </section>
    </section>
</div>

<!-- Includes the footer.php -->
<?php require_once 'includes/footer.php'; ?>