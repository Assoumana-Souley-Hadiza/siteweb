<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <center>
    <h1> S'AUTHENTIFIER</h1>
    <h3>BACK OFFICE</h3>
    <h3>Page protégée par mot de passe</h3>
    <h5>veuillez saisir votre Login et mot de passe</h5>
    <form action="authentifier.php" method="POST" name="Authentification" >
        <table border="1" bgcolor="pink">
            <tr>
                <th>Login:</th>
                <td><input type="text" name="Login"></td>
            </tr>
            <tr>
                <th>Password:</th>
                <td> <input type="password" name="motdepasse"></td>
            </tr>
        </table>
        <input type="submit" value="envoyer">&nbsp;&nbsp;<input type="reset" value="effacer">
    </form>
    </center>
    <?php
    include('fonctionBD.php');
    if(isset($_POST['Login'])and isset($_POST['motdepasse']))
    {
        if($_POST['Login']=='admin' and $_POST['motdepasse']=='admin')
	         header( "location: gestionproduits.php");
	else
	{
	
		echo "<center> Mot de passe incorrect</center>";
	}
    }
    ?>
</body>
</html>