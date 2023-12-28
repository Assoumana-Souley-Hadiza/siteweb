
 function verif() {
 if (document.getElementById("NP").value == "") { alert("Veuillez taper votre nom et prenom!"); return false;}
 if (document.getElementById("CN").value == "") { alert("Veuillez taper votre CIN!");
return false; }
 var v = 1;
 var taille = document.getElementById("CN").value.length;
 for (i = 0; i < taille;i++) { if(document.getElementById("CN").value.charAt(i) < "0" ||
document.getElementById("CN").value.charAt(i) > "9" || taille != 8) v = -1;}
 if (v == -1) {alert("Le numero de votre CIN est incorrect!"); return false; }

 if (document.getElementById("eml").value == "") { alert("Veuillez entrer votre adresse email!"); return false;}
 if (document.getElementById("eml").value.indexOf('@') == -1) { alert("Adresse e-mail incorrecte!"); return false; }

 }
 let panier = [];

        function ajouterAuPanier(nomProduit, prixProduit) {
            panier.push({ nom: nomProduit, prix: prixProduit });
            mettreAJourPanier();
        }

        function mettreAJourPanier() {
            const listePanier = document.getElementById('liste-panier');
            const totalElement = document.getElementById('total');
            let total = 0;

            // Effacer la liste du panier
            listePanier.innerHTML = '';

            // Ajouter chaque produit au panier
            panier.forEach((produit) => {
                const listItem = document.createElement('li');
                listItem.textContent = `${produit.nom} - ${produit.prix} MAD`;
                listePanier.appendChild(listItem);

                // Mettre à jour le total
                total += produit.prix;
            });

            // Mettre à jour le total affiché
            totalElement.textContent = `Total: ${total} MAD`;
        }
