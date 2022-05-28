<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger & Sandwich</title>
    <script src="scripts/script.js" defer></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style/style.css">

    <!-- Logo in tab -->
    <link rel="icon" type="image/png" href="img/favicon/favicon2-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon/favicon2-16x16.png" sizes="16x16" />
</head>

<body>

    <header>
        <nav>
            <div id="nav-icons">
                <a href="index.php" id="nav-logo">
                    <img src="img/logos/orange/secondary1.png" alt="Header logo">
                </a>
                <div id="mobile-icons">
                    <div id="closenav" onclick="closeNav()">
                        <i data-feather="x"></i>
                    </div>
                    <div id="opennav" onclick="openNav()">
                        <i data-feather="menu"></i>
                    </div>
                </div>
            </div>
            <div id="nav-links">
                <ul>
                    <li>
                        <a href="index.php" class="<?php echo ($page == "home" ? "active" : "")?>">Hjem</a>
                    </li>
                    <li>
                        <a href="menu.php" class="<?php echo ($page == "menu" ? "active" : "")?>">Menu</a>
                    </li>
                    <li>
                        <a href="catering.php" class="<?php echo ($page == "catering" ? "active" : "")?>">Catering</a>
                    </li>
                    <li>
                        <a href="om-os.php" class="<?php echo ($page == "about" ? "active" : "")?>">Om os</a>
                    </li>
                    <li>
                        <a href="kontakt.php" class="<?php echo ($page == "contact" ? "active" : "")?>">Kontakt</a>
                    </li>
                    <li>
                        <a href="#" class="menu-btn">Bestil</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>