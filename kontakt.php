<!-- Sets the current page variable and includes the header.php -->
<?php $page = "contact"; ?>
<?php require_once 'includes/header.php'; ?>

<div class="main">
    <section class="general hero">
        <div class="title">
            <h1>Kontakt</h1>
        </div>
    </section>
    <section class="content">
        <section class="contact">
            <div class="hours">
                <div class="icon">
                    <i data-feather="clock"></i>
                </div>
                <div class="info">
                    <h4>Åbningstider</h4>
                    <p class="day">Man - Lør</p>
                    <p class="time">10:00 - 21:00</p>
                    <p class="day">Søn & helligdage</p>
                    <p class="time">12:00 - 21:00</p>
                </div>
            </div>
            <div class="address">
                <div class="icon">
                    <i data-feather="map-pin"></i>
                </div>
                <div class="info">
                    <h4>The Burger & Sandwich</h4>
                    <p>Lyngby Hovedgade 51</br>2800 Kongens Lyngby</p>
                </div>
            </div>
            <div class="mail">
                <div class="icon">
                    <i data-feather="at-sign"></i>
                </div>
                <div class="info">
                    <h4>Mail</h4>
                    <p>kontakt@the-sandwich.com</p>
                </div>
            </div>
            <div class="phone">
                <div class="icon">
                    <i data-feather="phone"></i>
                </div>
                <div class="info">
                    <h4>Tlf. nr.</h4>
                    <p>+45 45 70 00 03</p>
                </div>
            </div>
        </section>
        <section class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.37838352825!2d12.503255251659741!3d55.769299880462356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46524e6c981f7135%3A0x68b69173c042f651!2sThe%20Burger%20%26%20Sandwich!5e0!3m2!1sen!2sdk!4v1653396796152!5m2!1sen!2sdk"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </section>
</div>

<!-- Includes the footer.php -->
<?php require_once 'includes/footer.php'; ?>