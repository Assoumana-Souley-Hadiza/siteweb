<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nos vêtements</title>
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
    <section class="produit-section">
        <div class="produit-colonne">
            <img src="clothes-store-with-rack-clothes.jpg" alt="produit1">
            <h3>Veste femme</h3>
            <p class="prix">495.75MAD</p>
            <button onclick="ajouterAuPanier()">Ajouter au panier</button>
        </div>
        <div class="produit-colonne">
            <img src="beau-marche-occasion (1).jpg" alt="produit1">
            <h3>Jilet</h3>
            <p class="prix">349.95 MAD</p>
            <button onclick="ajouterAuPanier()">Ajouter au panier</button>
        </div>
        <div class="produit-colonne">
            <img src="shirt-mockup-concept-with-plain-clothing.jpg" alt="produit1">
            <h3>Chemise homme</h3>
            <p class="prix">200.00 MAD</p>
            <button onclick="ajouterAuPanier()">Ajouter au panier</button>
        </div>
    </section>
    <section class="produit-section">
        <div class="produit-colonne">
            <img src="belle-jeune-femme-faire-du-shopping-dans-magasin-vetements.jpg" alt="produit2">
            <h3>chemise femme</h3>
            <p class="prix">150.75MAD</p>
            <button onclick="ajouterAuPanier('chemise femme',150.75)">Ajouter au panier</button>
        </div>
        <div class="produit-colonne">
            <img src="redhead-woman-trying-out-clothes.jpg" alt="produit3">
            <h3>chemisier</h3>
            <p class="prix">199.95 MAD</p>
            <button onclick="ajouterAuPanier('chemisier',199.95)">Ajouter au panier</button>
        </div>
        <div class="produit-colonne">
            <img src="ensemble-vetements-colores-feminins-etageres-chaussures-dans-magasin-vetements-toute-nouvelle-boutique-moderne.jpg" alt="produit4">
            <h3>Chemise</h3>
            <p class="prix">200.00 MAD</p>
            <button onclick="ajouterAuPanier('Chemise',200.00)">Ajouter au panier</button>
        </div>
    </section>
    <section>
        <h2>Panier</h2>
    <ul id="liste-panier"></ul>
    <p id="total">Total: 0 MAD</p>
    <button onclick="allerAuFormulaire()">Payer</button>
        </section>
        <script>
             let panier = [];

function ajouterAuPanier(nomProduit, prixProduit) {
    panier.push({ nom: nomProduit, prix: prixProduit });
    mettreAJourPanier();
}

function retirerDuPanier(index) {
    panier.splice(index, 1);
    mettreAJourPanier();
}

function mettreAJourPanier() {
    const listePanier = document.getElementById('liste-panier');
    const totalElement = document.getElementById('total');
    let total = 0;

    // Effacer la liste du panier
    listePanier.innerHTML = '';

    // Ajouter chaque produit au panier
    panier.forEach((produit, index) => {
        const listItem = document.createElement('li');
        listItem.textContent = `${produit.nom} - ${produit.prix} MAD`;

        // Ajouter un bouton de suppression
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Retirer';
        removeButton.addEventListener('click', () => retirerDuPanier(index));

        listItem.appendChild(removeButton);
        listePanier.appendChild(listItem);

        // Mettre à jour le total
        total += produit.prix;
    });

    // Mettre à jour le total affiché
    totalElement.textContent = `Total: ${total} MAD`;
}
function allerAuFormulaire() {
            // Rediriger vers la page du formulaire de paiement
            window.location.href = 'formulaire.php';
        }
        </script>
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