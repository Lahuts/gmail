<?php 
include 'include/header.inc.php';
?>
    <main>
        <h1 class="connec"></h1>
        <?php include './include/form.connec.inc.php'; ?>
        <?php include './include/connec.func.inc.php' ?>
        <span class="go-down"><img src="../asset/arrow.png" alt=""></span>
    </main>
</body>
<script>
document.addEventListener("DOMContentLoaded", () =>{
    let a = '<?php if (isset($_SESSION['nom'])) { echo $_SESSION['prenom']." ".$_SESSION['nom'];} ?>';
   let suc =  document.querySelector(".success");
   console.log(a);
   if(suc != null){
    h1 = document.querySelector(".connec");
    h1.innerText = "Bienvenue sur votre espace personelle "+a;
   }
});
</script>
</html>
