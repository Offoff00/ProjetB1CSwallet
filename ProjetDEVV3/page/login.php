<?php
session_start();
include '../inc/haut.php';
include '../inc/key.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $mdp = $_POST['motdepasse'];
    
    if (str_ends_with($email, '@efrei.net')) {
        $sql = "SELECT * FROM utilisateurs WHERE email = '$email'";
        $res = $cle->query($sql);
        $user = $res->fetch();

        if ($user) {
            $_SESSION['utilisateur'] = $user['prenom'];
            $_SESSION['nom'] = $user['nom'];
        } else {
            $cle->query("INSERT INTO utilisateurs (prenom, nom, email, mot_de_passe)
                         VALUES ('Etudiant', 'EFREI', '$email', '$mdp')");

            $_SESSION['utilisateur'] = 'Etudiant';
            $_SESSION['nom'] = 'EFREI';
        }

        header("Location: ../index.php");
        exit;

    } else {
        echo "<p style='color:red;'>❌ Email EFREI requis (ex: prenom.nom@efrei.net)</p>";
    }
}
?>
  
  <h1>🔐 Connexion automatique EFREI</h1>

<form method="post" class="formlogin">
  <label for="email">Email EFREI</label>
  <input type="email" name="email" id="email" placeholder="prenom.nom@efrei.net" required>

  <label for="motdepasse">Mot de passe</label>
  <input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" required>

  <button type="submit">Connexion</button>
</form>
