<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Technos Prod</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
  <header>
    <h1>Technos Prod</h1>
    <h2>Formulaire de commande</h2>
  </header>
<main>
<?php
#adresse
  if(isset($_POST["send"])){
    if(!empty($_POST["tablettes"]) && !empty($_POST["pc"]) && !empty($_POST["portable"])){
      if(preg_match('#[0-9][a-zA-Z ]#', $_POST["adresse"])){
        session_start();
        $_SESSION["tablettes"] = $_POST["tablettes"];
        $_SESSION["pc"] = $_POST["pc"];
        $_SESSION["portable"] = $_POST["portable"];
        $_SESSION["adresse"] = $_POST["adresse"];
        header("location:./src/validation_commande.php");
      }else{
        print "<p class=\"warning\">Il manque votre adresse de livraison</p>";
      }
    }else{
    print "<p class=\"warning\">Vous n'avez rien commander</p>";
  }
  }

?>
  <form action="index.php" method="post">
    <table>
      <thead>
        <tr>
          <th>Produits</th>
          <th>Quantité</th>
        </tr>
      </thead>
      <tr>
        <td><label for="tablettes">Tablettes</label></td>
        <td><input type="number" min="1" max="10" name="tablettes" id="tablettes" placeholder="0" autofocus></td>
      </tr>
      <tr>
        <td><label for="pc">Pc</label></td>
        <td><input type="number" min="1" max="10" name="pc"  id="pc" placeholder="0"></td>
      </tr>
      <tr>
        <td><label for="portable">Portable</label></td>
        <td><input type="number" min="1" max="10" name="portable" id="portable" placeholder="0"></td>
      </tr>
      <tr>
        <td><label for="adresse">Adresse</label></td>
        <td><input type="text" name="adresse" id="adresse" placeholder="Adresse"></td>
      </tr>
      <tfoot>
        <tr>
          <td colspan=2><input type=submit name="send" value="Envoyer la commande"></td>
        </tr>
    </tfoot>
    </table>
  </form>  

</main>

</body>
</html>

