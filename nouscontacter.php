<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nouscontacter</title>
    <script langage="JavaScript" src="monscript.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="logo de mon site">
            <p>Majestic Luxury Boutique</p>
        </div>
        <nav>
            <ul>
                <li> <a href="monsiteweb.php">Accueil</a></li>
                <li> <a href="Apropos.php">A Propos</a></li>
                <li> <a href="nosvetements.php">Nos vêtements</a></li>
                <li> <a href="nouscontacter.php">Nous contacter</a></li>
            </ul>
        </nav>
    </header>
    <center>

        <h2><u>INSCRIPTION</u></h2><br>
        <form name="f" action="nouscontacter.php" method="post" onSubmit="verif()">
            <table>
              <tr>
                <th><label for="NP">Nom :</label></th>
                <td><input type="text" id="NP" name="nom" required></td>
              </tr>
              <tr>
                <th><label for="NP">Prénom :</label></th>
                <td><input type="text" id="NP" name="prenom" required></td>
              </tr>
              <tr>
                <th><label for="CN">CIN :</label></th>
                <td><input type="text" id="CN" name="cin" required></td>
              </tr>
              <tr>
                <td><label for="eml">Email :</label></td>
                <td><input type="email" id="eml" name="email" required></td>
              </tr>
              <tr>
                <td><label for="message">Message :</label></td>
                <td><textarea id="message" name="message" rows="4" required></textarea></td>
              </tr>
            </table>
          
            <button type="submit">Envoyer</button>
            <button type="reset">Réinitialiser</button>
          </form>
    </center>
    <?php
    include('fonctionBD.php');
     if(isset($_POST['nom'])and isset($_POST['prenom']) and isset($_POST['cin']) and isset($_POST['email'])and isset($_POST['message']))
     {
        if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['cin']) and !empty($_POST['email'])and !empty($_POST['message']))
        {
            connexion();
            $sql1="select * from client where cin='".$_POST['cin']."'";
            $reponse=$bdd->query($sql1);
            $donnees=$reponse->fetch();
            if(empty($donnees))
            {
                $sql2="insert into client(nom,prenom,cin,email,message) values('".$_POST['nom']."','".$_POST['prenom']."',
                '".$_POST['cin']."','".$_POST['email']."','".$_POST['message']."')";
                $bdd->exec($sql2);
                echo "<center> Le client ".$_POST['nom']." est ajouté avec succes</center>";
            }
            else echo "<center> Le client existe deja!!!</center>";
        }
        else
        echo "<center> Attention!!!Remplir tous les champs avec des valeurs non nulles</center>";
     }
     ?>
    <footer>
        <div class="footer-contenue">
            <p>Contactez nous:majesticluxury@gmail.com</p>
            <p>Suivez nous sur les réseaux sociaux:</p>
            <p><img src="facebook.png" alt="facebook"></p>
            <p><img src="twitter.png" alt="twitter"></p>
            <p>tel:+2126501243254</p>
            <p>copyritgth <small>tout droit réservé à majestic luxury</small></p>
        </div>
    </footer>

        
</body>
</html>