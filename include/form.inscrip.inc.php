<?php include_once './include/pdo.inc.php' ?>
<?php include_once './include/inscription.func.inc.php' ?>
<fieldset class="inscription-field">
            <legend>Créer un compte</legend>
            <form action="./index.php" method="post">
                <label for="nom">Nom <sup>*</sup></label>
                <input type="text" placeholder="Votre nom" id="nom" name="nom">
                <label for="prenom">Prénom <sup>*</sup></label>
                <input type="text" placeholder="Votre prenom" id="prenom" name="prenom">
                <label for="mail">Mail <sup>*</sup></label>
                <input type="email" placeholder="Votre mail" id="mail" name="mail">
                <label for="psw">Choisir votre mot de passe <sup>*</sup></label>
                <input type="password" placeholder="Mot de passe" id="psw" name="psw">
                <input type="submit" value="VALIDER VOTRE COMPTE" id="val" name="val">
            </form>
        </fieldset>