<?php
if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['psw'])){
    $_resp = $_bdd->query("SELECT * FROM users WHERE email = '{$_POST['mail']}'");
    if ($_resp->rowCount() > 0) {
        echo "<p class='warn'>Cette email est déja utiliser veuillez vous connecté ou changer votre email.</p>";
    }else{
        $req = $_bdd->prepare('INSERT INTO users (email,password,name,surname)VALUES(?,?,?,?)');
            $req->execute(array($_POST['mail'], password_hash($_POST['psw'],PASSWORD_DEFAULT),$_POST['prenom'],$_POST['nom']));
        header("Location: connection.php");
    }
}else if(isset($_POST['val'])){
    echo '<p class="state warn"> Veuillez compléter le formulaire avant de valider </p>';
}
?>
