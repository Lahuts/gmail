<?php 
include_once( 'include/user.class.inc.php' );

if(!empty($_POST["mail"]) && !empty($_POST["psw"]) && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail'])){
    try {
        $reponse = $_bdd->query("SELECT * FROM  users WHERE email = '{$_POST['mail']}' limit 1");
        $DATA = $reponse->fetch();
        $login = $_POST["mail"];
        $mdp = $_POST["psw"];
    if(!password_verify($_POST["psw"],$DATA['password'])){
            echo "<p class='state error'> Erreur login ou mot de passe?</p>";
        }
    else if(password_verify($_POST["psw"],$DATA['password']))
    {
        $_current_user = new User($DATA['name'],$DATA['surname'],$DATA['password'],$DATA['email']);
        $_current_user->setSession();
        echo "<p class='state success'>Bonjour ".$_SESSION['prenom']." ".$_SESSION['nom']." </p>";
                                
    }
    } catch (Exception $e) {}


}else if(isset($_POST['val'])){
    echo "<p class='state warn'>Vous avez oubliez votre mail ou password?</p>";
}
?>