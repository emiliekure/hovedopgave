<!-- Sets the current page variable and includes the header.php -->
<?php $page = "about"; ?>
<?php require_once 'includes/header.php'; ?>

<div class="main">
    <section class="general hero">
        <div class="title">
            <h1>Om os</h1>
        </div>
    </section>
    <section class="content">
        <section class="text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, minus ipsum perferendis quibusdam
                nisi atque aliquam repellendus eaque nam numquam debitis fugiat a? Tempore, autem.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus consequuntur doloremque rerum,
                quibusdam quia nulla aperiam sunt quae error, accusamus deserunt reiciendis nisi libero minima.
            </p>
            <p><a href="https://www.findsmiley.dk/774211" target="_blank">Se kontrolrapport</a></p>
        </section>
        <section class="photos">
            <img class="hori first" src="img/photos/firepit.jpg" alt="">
            <img class="verti second" src="img/photos/burger-man.jpg" alt="">
        </section>
        <section class="buttons">
            <a href="kontakt.php" class="primary-btn">
                Kontakt
            </a>
        </section>
    </section>
</div>

<!-- Includes the footer.php -->
<?php require_once 'includes/footer.php'; ?>