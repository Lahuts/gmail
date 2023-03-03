<fieldset class="inscription-field">
    <?php include './include/pdo.inc.php' ?>
    
            <legend>Connectez-vous à votre compte</legend>
            <form action="./connection.php" method="post">
                <label for="login">Mail ou Login <sup>*</sup></label>
                <input type="email" placeholder="Votre login ou mail" id="mail" name="mail">
                <label for="psw">Choisir votre mot de passe <sup>*</sup></label>
                <input type="password" placeholder="Mot de passe" id="psw" name="psw">
                <input type="submit" value="CONNEXION À VOTRE COMPTE" id="val" name="val">
            </form>
        </fieldset>