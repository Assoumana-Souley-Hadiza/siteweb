
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
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
    <?php
    include('menu.php');
    include('fonctionBD.php');
    ?>
    <center>
    <h3>Ajouter un nouveau produit</h3>
    <form action="ajoutervetement.php" method="POST" >
    <table border="x" bgcolor=" green">
        <tr> 
            <th>Type:</th>
            <td><select name="type">
                <option value="chemise"> Chemise/femme</option>
                <option value="pantalon">pantalon/femme</option>
                <option value="chemise/homme">chemise/homme</option>
                <option value="veste">Veste</option>
                <option value="Jilet">chemise/homme</option>
               </select>
            </td>
        </tr>
        <tr>
            <th>Réf:</th>
            <td><input type="text" name="ref"></td>
        </tr>
        <tr>
            <th>Marque:</th>
            <td> <input type="text" name="marque"></td>
        </tr>
        <tr>
            <th>Prix</th>
            <td><input type="text" name="prix"></td>
        </tr>
    </table>
     <input type="submit" value=" Ajouter">&nbsp;&nbsp;<input type="reset" value="Effacer">
    </form>
    </center>
     <?php
     if(isset($_POST['type'])and isset($_POST['ref']) and isset($_POST['marque']) and isset($_POST['prix']))
     {
        if(!empty($_POST['type']) and !empty($_POST['ref']) and !empty($_POST['marque']) and !empty($_POST['prix']))
        {
            connexion();
            $sql1="select * from mesproduits where ref='".$_POST['ref']."'";
            $reponse=$bdd->query($sql1);
            $donnees=$reponse->fetch();
            if(empty($donnees))
            {
                $sql2="insert into mesproduits(ref,type,prix,marque) values('".$_POST['ref']."','".$_POST['type']."',
                '".$_POST['prix']."','".$_POST['marque']."')";
                $bdd->exec($sql2);
                echo "<center> Le produit".$_POST['type']." est ajouté avec succes</center>";
            }
            else echo "<center> Le produit existe deja!!!</center>";
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