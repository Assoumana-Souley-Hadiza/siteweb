<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
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
                <li> <a href="apropos.php">A Propos</a></li>
                <li> <a href="nosvetements.php">Nos vêtements</a></li>
                <li> <a href="nouscontacter.php">Nous contacter</a></li>
            </ul>
        </nav>
    </header>
    <h1>Formulaire de paiement!</h1>
    <div class="container">
        <form id="orderForm" action="formulaire.php" method="post">
            <label for="fullName">Nom complet:</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="cin">CIN:</label>
            <input type="text" id="cin" name="cin" required>

            <label for="address">Adresse de livraison:</label>
            <textarea id="address" name="address" required></textarea>

            <label for="phone">Numéro de téléphone:</label>
            <input type="tel" id="phone" name="phone" required>

            <button type="button" onclick="submitForm()">Valider la commande</button>
        </form>
    </div>
    <script>
    function submitForm() {
    var form = document.getElementById("orderForm");
    form.submit();
    }
    </script>
    <?php
    include('fonctionBD.php');
    if(isset($_POST['fullName']) and isset($_POST['cin']) and isset($_POST['address']) and isset($_POST['phone']))
    {
       if(!empty($_POST['fullName']) and !empty($_POST['cin']) and !empty($_POST['address']) and !empty($_POST['phone']))
       {
           connexion();
               $sql2="insert into commandes (nom_complet,cin,adresse_livraison,numero_telephone) values('".$_POST['fullName']."','".$_POST['cin']."',
               '".$_POST['address']."','".$_POST['phone']."')";
               $bdd->exec($sql2);
               echo "<center> votre commande  a ete effectué avec succes vous serez livré dans les 48h qui suivent!!!</center>";
           
       }
     
    }
    ?>
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