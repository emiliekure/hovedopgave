<!-- Sets the current page variable and includes the header.php -->
<?php $page = "home"; ?>
<?php require_once 'includes/header.php'; ?>

<div class="main">
    <section class="index hero">
        <div class="title">
            <h1>The Burger & Sandwich</h1>
            <div class="buttons">
                <a href="#" class="primary-btn">
                    Bestil
                </a>
                <a href="menu.php" class="secondary-btn">
                    Se menu
                </a>
            </div>
        </div>
    </section>
    <section class="content">
        <section class="catering">
            <h2>Catering</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos tenetur temporibus dolore! Eligendi
                reprehenderit fugit nam iste quibusdam laudantium minus praesentium. Asperiores unde repellendus
                debitis?</p>
            <p><a href="catering.php">Læs mere</a></p>
        </section>
        <section class="about">
            <h2>Om os</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam asperiores, accusantium repellendus sed
                et rem a fugiat quos aperiam. Reprehenderit perferendis incidunt accusantium corporis quaerat.</p>
            <p><a href="om-os.php">Læs mere</a></p>
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