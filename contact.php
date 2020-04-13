<?php require 'header.php'; ?>
<link rel="stylesheet" href="css/contact.css">

    <!---------------------------------SECTION----------------------------------------->

    <section>
        <div class="container_popup2">
            <a class="button" href="#popup2">Cliquez pour nous contacter</a>
            <div class="popup2" id="popup2">
                <div class="popup-inner2">
                    <div class="popuptext2">

                        <form method="post" action="#" class="form-group">
                            <fieldset class="inscription">
                                <div class="form">
                                    <label for="nom">Nom</label>
                                    <input type="text" name ="nom" id="nom" class="form-control">
                                </div>
                                <div class="form">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control">
                                </div>
                                <div class="form">
                                    <label for="mail">Email</label>
                                    <input type="email" name="mail" id="mail" class="form-control">
                                </div>
                                <div class="form">
                                    <label for="objet">Objet</label>
                                    <input type="text" name="objet" id="objet" placeholder="Ex : Infos supplémentaires" class="form-control">
                                </div>
                                <div class="form">
                                    <label for="msg">Votre message</label>
                                    <textarea name="user_name" id="msg" class="form-control" >Dites-nous</textarea>
                                </div>
                                <div id="envoyer">
                                    <button type="submit" class="btn cf-btn-primary">Envoyer</button>
                                </div>
                            </fieldset>
                        </form>

                    </div>
                    <a class="closepopup2" href="#">X</a>
                </div>
            </div>
        </div>

        <div id="renseignements">
            <div class="flex_r">
                <h1>UP TO FOUMIES</h1>
                <p>5 rue Arlette Corrente <br>
                    59610 Fourmies</p>
            </div>
            <div class="flex_r">
                <h1>FACE Thierache</h1>
                <p>2 Rue du Général Raymond Chomel<br>
                    59610 FOURMIES<br>
                    Lundi-vendredi de 9h à 17h<br>
                    Tel: 03 27 57 55 17<br>
                    mail: contact@facethierache.fr</p>
            </div>
            <div class="flex_r"><iframe id="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.4942521083353!2d4.029901115636413!3d50.02083387941851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2747b555b139b%3A0x5a4cc7aaeb54bcc6!2s2+Rue+du+G%C3%A9n%C3%A9ral+Raymond+Chomel%2C+59610+Fourmies!5e0!3m2!1sfr!2sfr!4v1544432954053">
                </iframe></div>
        </div>

    </section>

<script src="js/btn_cacher.js"></script>
<?php require 'footer.php'; ?>