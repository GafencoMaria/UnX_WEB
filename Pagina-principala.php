<?php ?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>UNXplorer</title>
        <link rel="stylesheet" href="CSS/CSS.css" />
    </head>
    <body>
        <div class="header">
            <img class="logo" src="imagini/logo.jpg">
            <button onclick="menuDropdown()" class="buton-meniu-toggle"><img class="meniu-toggle" src="imagini/meniu.jpg"></button>
            <div id="dropMenu" class="drop-menu">
                <button onclick="dropdown2()" class="buton-drop-meniu-criterii">Criterii
                    <img class="sageata" src="imagini/sageata.png">
                    </button>
                    <div id="dropdown2" class="dropdown-drop-content">
                        <button id="crit" onclick="activeChoice()" class="criteriu-drop">Judet</button>
                        <button id="crit" onclick="activeChoice()" class="criteriu-drop">Nivel Educatie</button>
                        <button id="crit" onclick="activeChoice()" class="criteriu-drop">Varsta</button>
                        <button id="crit" onclick="activeChoice()" class="criteriu-drop">Mediu</button>
                        <button id="crit" onclick="activeChoice()" class="criteriu-drop">Perioada de timp</button>
                    </div>
                <a class="link-meniu" href="Pagina-principala.php"><button class="buton-drop-meniu-acasa buton-on">Acasă</button></a>
                <a class="link-meniu" href="about.php"><button class="buton-drop-meniu-despre">Despre noi</button></a>
                <a class="link-meniu" href="Resurse.php"><button class="buton-drop-meniu-resurse">Mai multe resurse</button></a>
            </div>
            <ul class="meniu">
                <li><button onclick="dropdown()" class="buton-meniu-criterii">Criterii
                    <img class="sageata" src="imagini/sageata.png">
                    </button>
                    <div id="dropdown" class="dropdown-content">
                        <button id="crit" onclick="activeChoice()" class="criteriu">Judet</button>
                        <button id="crit" onclick="activeChoice()" class="criteriu">Nivel Educatie</button>
                        <button id="crit" onclick="activeChoice()" class="criteriu">Varsta</button>
                        <button id="crit" onclick="activeChoice()" class="criteriu">Mediu</button>
                        <button id="crit" onclick="activeChoice()" class="criteriu">Perioada de timp</button>
                  </div>
                </li>
                <li><a class="link-meniu" href="Pagina-principala.php"><button class="buton-meniu-acasa buton-on">Acasă</button></a></li>
                <li><a class="link-meniu" href="about.php"><button class="buton-meniu-despre">Despre noi</button></a></li>
                <li><a class="link-meniu" href="Resurse.php"><button class="buton-meniu-resurse">Mai multe resurse</button></a></li>
            </ul>
        </div>
        <div class="continut">
            <div class="statistici">
                <img class="graf3" src="imagini/graf3.jpg">
                <img class="graf1" src="imagini/graf1.jpg">
                <img class="graf4" src="imagini/graf4.jpg">
                <p class="descarca">
                    <button class="desc-CSV">Descarcă CSV</button>
                    <button class="desc-SVG">Descarcă SVG</button>
                    <button class="desc-PDF">Descarcă PDF</button>
                </p>
            </div>
            <div class="noutati">
                <p class="titlu-noutati">Noutăți</p>
                <p class="stiri">
                    <a href="https://romania.europalibera.org/a/paradoxul-somajului-romania/32246450.html">"România avea la finele anului trecut, oficial, peste 460.000 de șomeri. În contextul în care firmele se plâng de lipsa de forței de muncă, pare paradoxal că sute de mii de români nu lucrează. Ce împiedică piața să integreze acești lucrătorii disponibili, de care e atâta nevoie?"</a>
                    <br>
                    <p class="autori">-Adrian Ardelean, Europa Liberă</p>
                    <br><br>
                    <a href="https://www.digi24.ro/digieconomic/consumer/rata-somajului-in-zona-euro-a-scazut-sub-minimul-istoric-romania-se-mentine-la-nivelul-de-acum-doi-ani-5481?__grsc=cookieIsUndef0&__grts=57103184&__grua=5e705226acd7a97aa6ee95ab188632d6&__grrn=1">"Rata şomajului în zona euro a coborât cu 0,1 puncte procentuale în luna noiembrie comparativ cu octombrie, până la 6,4% din populaţia activă, arată cifrele publicate marţi de Eurostat. În România, valoarea înregistrată s-a menținut la nivelul de acum doi ani."</a>
                    <br>
                    <p class="autori">-Digi24 Economic</p>
                    <br><br>
                    <a href="https://ziare.com/somaj-romania/rata-somaj-romania-ianuarie-2024-1855612">Cum stă România la șomaj la începutul lui 2024. Cei mai mulți români fără serviciu au între 40 și 49 de ani Acest text a fost copiat de pe Ziare.com Cum stă România la șomaj la începutul lui 2024. Cei mai mulți români fără serviciu au între 40 și 49 de ani</a>
                    <br>
                    <p class="autori">-Alina Toma, Ziare.com</p>
                </p>
            </div>
        </div>
        <div class="footer">
            <p class="rights">All rights reserved</p>
            <p class="contact">Contacteaza-ne</p>
        </div>
        <script>
            function dropdown() {
              document.getElementById("dropdown").classList.toggle("show");
            }

            function menuDropdown() {
              document.getElementById("dropMenu").classList.toggle("showMenu");
            }
            function dropdown2() {
              document.getElementById("dropdown2").classList.toggle("show2");
            }
            
            // function activeChoice() {
            //     document.getElementById("crit").classList.toggle("activeButton");
            // }
            // window.onclick = function(event) {
            //   if (!event.target.matches('.buton-meniu-criterii')) {
            //     var dropdowns = document.getElementsByClassName("dropdown-content");
            //     var i;
            //     for (i = 0; i < dropdowns.length; i++) {
            //       var openDropdown = dropdowns[i];
            //       if (openDropdown.classList.contains('show')) {
            //         openDropdown.classList.remove('show');
            //       }
            //     }
            //   }
            // }
            </script>
    </body>
    </html>