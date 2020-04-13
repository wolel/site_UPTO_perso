<?php require 'header.php'; ?>
<link rel="stylesheet" href="css/formation.css">


<section>

    <div class="bloc_gauche" id="formation">
        <div class=" lnVerticale">
            <h1>Devenir développeur web</h1>
        </div>

        <h2>En huit mois, obtenez les savoirs et les compétences d'un bac+2</h2>

        <p class="txtBG"> Huit mois de formation, alternant théorie et exercices tout en privilégiant la pratique.
            Vous apprendrez à créer un site web de A à Z, à le faire fonctionner, le sécuriser et le relier avec les bases de données adéquates. <br><br>
            - 840h dédiées au développement<br>
            - Front-end (la partie visible du site)<br>
            - Back-end (les coulisses, les fonctionnalités)<br>
            - Administration systèmes<br>
            - Programmation d'objets connectés<br>
            - Gestion de projet<br>
            - Conception d'interfaces<br>
            - 1 jours par semaine d'accompagnement à l'emploi<br>
            - 1 mois de stage<br>
        </p>

        <div class=" lnVerticale">
            <h1 class="titre">Prérequis</h1>
        </div>

        <p class="txtBG"><strong>AUCUN!</strong> Connaître les bases du fonctionnement d'un PC et quelques bases en anglais sont toutefois un atout.</p>

    </div>

    <aside>
        <div class="bloc_droit">
            <div class="container"><p id="technologie">Les technologies enseignées</p>
                <div class="row tableau" >
                    <div class="col-sm"><img src="img/html.png" ></div>
                    <div class="col-sm"><img src="img/css31600.png"/></div>
                    <div class="col-sm"><img src="img/Bootstrap-4-1.png"></div>
                </div>
                <div class="row tableau">
                    <div class="col-sm"><img src="img/img_js.png"></div>
                    <div class="col-sm"><img src="img/angular.png"></div>
                    <div class="col-sm"><img src="img/jquery.gif"></div>
                </div>
                <div class="row tableau">
                    <div class="col-sm"><img src="img/php_PNG7.png"></div>
                    <div class="col-sm"><img src="img/mysql-logo_2800x2800_pixels1.png"></div>
                    <div class="col-sm"><img src="img/symfony_black_03.png"></div>
                </div>
                <div class="row tableau">
                    <div class="col-sm"><img src="img/phpstorm-logo.png"></div>
                    <div class="col-sm"><img src="img/github1600.png"></div>
                    <div class="col-sm"><img src="img/github-desktop-icon.png"></div>
                </div>
            </div>
        </div>
        <!------------------------block LOGO------------------------------>

        <div class="bloc_droit2">
            <fieldset>
                <div class="form">
                    <label for="login">Login</label>
                    <input type="text" name ="pseudo" id="login" maxlength="9"/>
                </div>
                <div class="form">
                    <label for="MP">Password</label>
                    <input type="password" name="pass" id="MP">
                </div>
                <div class="form">
                    <label for="mail">Email</label>
                    <input type="email" name="mail" id="mail">
                </div>
                <div class="form">
                    <label for="msg"></label>
                    <textarea name="user_name" id="msg" >Décrivez votre motivation</textarea>
                </div>
                <div id="envoyer">
                    <button type="submit">Envoyer</button>
                </div>
            </fieldset>
        </div>

        <!-----------------------formulaire inscription------------------------------>

        <div class=" lnVerticale"><form method="post" action="#"></form></div>
    </aside>
</section>



<?php require 'footer.php'; ?>
