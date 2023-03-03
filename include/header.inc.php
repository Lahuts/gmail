<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/inscription.css">
    <?php 
    $url = "http://";      
    $url.= $_SERVER['HTTP_HOST'];     
    $url.= $_SERVER['REQUEST_URI']; 

        if($url =='http://localhost:8888/connection.php'){
        echo '<link rel="stylesheet" href="./css/connection.css">';
        }
    ?>
    <title>Créer un compte - Gmail</title>
</head>
<body>
    <header>
        <a href="/index.php" class="gm_logo"><img src="./asset/gmail.png" alt="logo_gmail"></a>
        <nav>
            <ul>
                <li><a href="/index.php">POUR LES PROS</a></li>
                <li><a href="/connection.php">CONNEXION</a></li>
                <li><a href="/index.php#inscrip">CRÉER UN COMPTE</a></li>
            </ul>
        </nav>
    </header>