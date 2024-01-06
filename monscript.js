
 function verif() {
       if (document.getElementById("nom").value == "") { alert("Veuillez taper votre nom!"); return false;}
       if (document.getElementById("prenom").value == "") { alert("Veuillez taper votre prenom!"); return false;}
 if (document.getElementById("cin").value == "") { alert("Veuillez taper votre CIN!");
return false; }
 var v = 1;
 var taille = document.getElementById("CN").value.length;
 for (i = 0; i < taille;i++) { if(document.getElementById("cin").value.charAt(i) < "0" ||
document.getElementById("cin").value.charAt(i) > "9" || taille != 8) v = -1;}
 if (v == -1) {alert("Le numero de votre CIN est incorrect!"); return false; }

 if (document.getElementById("email").value == "") { alert("Veuillez entrer votre adresse email!"); return false;}
 if (document.getElementById("email").value.indexOf('@') == -1) { alert("Adresse e-mail incorrecte!"); return false; }

 }
 