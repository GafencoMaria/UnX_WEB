<?php ?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>UNXplorer</title>
        <link rel="stylesheet" href="CSS/CSS.css" />
    </head>
    <body class="resurse-body">
        <div class="header">
            <img class="logo" src="imagini/logo.jpg">
            <button onclick="menuDropdown()" class="buton-meniu-toggle"><img class="meniu-toggle" src="imagini/meniu.jpg"></button>
            <div id="dropMenu" class="drop-menu">
                <a class="link-meniu" href="Pagina-principala.php"><button class="buton-drop-meniu-acasa">Acasă</button></a>
                <a class="link-meniu" href="about.php"><button class="buton-drop-meniu-despre">Despre noi</button></a>
                <a class="link-meniu" href="Resurse.php"><button class="buton-drop-meniu-resurse buton-on">Mai multe resurse</button></a>
            </div>
            <ul class="meniu">
                <li><a class="link-meniu" href="Pagina-principala.php"><button class="buton-meniu-acasa">Acasă</button></a></li>
                <li><a class="link-meniu" href="about.php"><button class="buton-meniu-despre">Despre noi</button></a></li>
                <li><a class="link-meniu" href="Resurse.php"><button class="buton-meniu-resurse buton-on">Mai multe resurse</button></a></li>
            </ul>
        </div>
        <div class="continut-resurse">
            <div class="ponturi">
                <p class="titlu-ponturi">Ponturi pentru interviuri</p>
                <div class="continut-ponturi">
                    <div class="pont">
                        <p class="titlu-p">Puneți întrebări</p>
                        <p class="continut-p">La sfârșitul interviului trebuie să aveți întrebări. Dacă angajatorul nu vă dă această șansă, cereți permisiunea de a pune întrebări.</p>
                    </div>
                    <div class="pont">
                        <p class="titlu-p">Fii atent asupra limbajului nonverbal</p>
                        <p class="continut-p">Chiar dacă este un interviu online, limbajul nonverbal joacă un rol foarte important în procesul de recrutare. </p>
                    </div>
                    <div class="pont">
                        <p class="titlu-p">Demonstrează că jobul ți se potrivește</p>
                        <p class="continut-p">Indiferent de calitățile pe care le ai, trebuie să știi cum să le pui în valoare. Analizează-ți punctele forte și cunoștințele. Fii pregătit să prezint un scenariu despre cum ai putea ajuta compania, prin prisma abilităților pe care le ai.</p>
                    </div>
                    <div class="pont">
                        <p class="titlu-p">Prezintă-te cu un aspect îngrijit</p>
                        <p class="continut-p">De cele mai multe ori, ne lăsăm cuprinși de confortul propriei camere și uităm să acordăm atenție aspectului nostru. Cel mai bine este să adopți o ținută smart casual dacă vei candida pentru o poziție de execuție.</p>
                    </div>
                </div>
            </div>
            <div class="alte-siteuri">Alte site-uri relevante</div>
            <div class="links-r">
            <a class="link-resurse" href="https://mmuncii.ro/j33/index.php/ro/transparenta/statistici/date-statistice?id=7205:statistici-somaj-2024&catid=29:domenii">Statistici-șomaj 2024</a><br><br>
            <a class="link-resurse" href="https://cariera.ejobs.ro/intrebari-interviu-pentru-recrutor/">30 de întrebări prin care poți face impresie bună la interviu</a><br><br>
            <a class="link-resurse" href="https://verandamall.ro/jobs/resurse/interviu-de-angajare/">Ghid pentru interviul de angajare: ce întrebări se pun și care sunt cele mai potrivite răspunsuri</a>
            </div>
        </div>
        <div class="footer">
            <p class="rights">All rights reserved</p>
            <p class="contact">Contacteaza-ne</p>
        </div>
        <script>
            function menuDropdown() {
              document.getElementById("dropMenu").classList.toggle("showMenu");
            }
        </script>
    </body>
    </html>