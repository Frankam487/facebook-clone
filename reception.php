<?php
include "./config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1">
    
    <thead>
      <tr>

  <th>ID</th>
  <th>Email</th>
  <th>Mot de passe</th>
</tr>
  </thead>
  <?php 
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($con, $sql);

    while ($row=mysqli_fetch_assoc($result)) {
      
      ?>
      
      <tbody>
        <tr>
          
          <td><?php echo $row['id'] ?></td>
          <td><?php  echo $row['email'] ?></td>
          <td><?php echo $row['mdp'] ?></td>
        </tr>
      </tbody>
      <?php
    }
    ?>
</table>
<script src="./app.js"></script>
</body>
</html>