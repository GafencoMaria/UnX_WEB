<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/CSS.css">
</head>
<body class="about-body">
<header>
    <div class="header">
        <img class="logo" src="imagini/logo.jpg">
        <button onclick="menuDropdown()" class="buton-meniu-toggle"><img class="meniu-toggle" src="imagini/meniu.jpg"></button>
        <div id="dropMenu" class="drop-menu">
            <a class="link-meniu" href="Pagina-principala.php"><button class="buton-drop-meniu-acasa">Acasă</button></a>
            <a class="link-meniu" href="about.php"><button class="buton-drop-meniu-despre buton-on">Despre noi</button></a>
            <a class="link-meniu" href="Resurse.php"><button class="buton-drop-meniu-resurse">Mai multe resurse</button></a>
        </div>
        <ul class="meniu">
            <li><a class="link-meniu" href="Pagina-principala.php"><button class="buton-meniu-acasa">Acasă</button></a></li>
            <li><a class="link-meniu" href="about.php"><button class="buton-meniu-despre buton-on">Despre noi</button></a></li>
            <li><a class="link-meniu" href="Resurse.php"><button class="buton-meniu-resurse">Mai multe resurse</button></a></li>
        </ul>
    </div>
</header>

<div class="container-about">
    <div class="box">
        <h2>Primul Chenar</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at ligula in lorem dictum fermentum.</p>
    </div>
    <div class="box">
        <h2>Al Doilea Chenar</h2>
        <p>Sed quis justo eu ex placerat vestibulum ut eu urna. Integer ac justo vel nisi fermentum euismod.</p>
        <a class="link-raport" href="Raport/scholarlyHTML.html">scholarlyHTML</a>
    </div>
</div>

<footer>
    <div class="footer">
        <p class="rights">All rights reserved</p>
        <p class="contact">Contacteaza-ne</p>
    </div>
</footer>
<script>
    function menuDropdown() {
      document.getElementById("dropMenu").classList.toggle("showMenu");
    }
</script>
</body>
</html>
