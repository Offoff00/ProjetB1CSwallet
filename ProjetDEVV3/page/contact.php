<?php include '../inc/haut.php' ?>

<main class="contactpage">
  <a href="<?= ROOT?>page/contact.php"><h1>📩 Contactez-nous</h1>
  </a>

  <form action="<?= ROOT ?>pages/traitement.php" method="post" class="contact-form">
    <label for="nom">Nom</label>
    <input type="text" name="nomDeFamille" id="nom" placeholder="Votre nom" maxlength="200" required>

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" placeholder="Votre prénom" maxlength="200" required>

    <label for="groupe">Groupe :</label>
  <input type="radio" name="groupe" value="B1CS1">
  B1CS1
  <input type="radio" name="groupe" value="B1CS2">
  B1CS2
  <input type="radio" name="groupe" value="B1CS3">
  B1CS3
  <br><br>

    <label for="mail">E-mail Compte Efrei </label>
    <input type="email" name="mail" id="mail" placeholder="xxxx@efrei.net" maxlength="200" required pattern="^[a-zA-Z0-9._%+-]+@efrei\.net$"
  title="Veuillez entrer une adresse efrei.net valide">
    


    <input type="submit" value="📨 Envoyer">
  </form>
</main>
<aside class ="telmieux">
<img src= "<?= ROOT ?>images/telmieux.png" >
</aside>
<?php include '../inc/bas.php';?>