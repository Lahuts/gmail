
<?php
    require('include/pdo.class.inc.php');
try {
    $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $_bdd = new PDO('mysql:host=localhost;dbname=gmail','root','root');
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options);

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
$_bdd = new Database("gmail","root","root","localhost");
$_bdd = $_bdd->getPDO();
?>