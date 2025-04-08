<?php include '../inc/haut.php' ?>

<main class="tutopage">
  <h1>📚 Apprendre la crypto</h1>

  <section>
    <h2>💡 Qu’est-ce qu’une cryptomonnaie ?</h2>
    <p>Une cryptomonnaie est une monnaie numérique qui fonctionne sans banque centrale. Elle repose sur la technologie <strong>blockchain</strong> 🔗, une sorte de registre public sécurisé et infalsifiable.</p>
  </section>

  <section>
    <h2>👛 Qu’est-ce qu’un wallet ?</h2>
    <p>Un <strong>wallet</strong> (ou portefeuille) est un outil qui permet de stocker, envoyer et recevoir des cryptomonnaies. Il peut être une app, un site ou même un objet physique 💼.</p>
  </section>

  <section>
    <h2>🔄 Et une transaction ?</h2>
    <p>Une transaction est un transfert de crypto d’un wallet à un autre. Elle est validée par le réseau grâce à un système appelé <em>minage</em> ⛏️ ou <em>staking</em>.</p>
  </section>


  <section>
    <h2>🧠 Quiz du jour</h2>
    <p><strong>Question :</strong> Quelle affirmation est correcte ?</p>

<form method="post">
  
  <h3>1. À quoi sert un wallet ?</h3>
  <label><input type="radio" name="reponse1" value="a"> À jouer au poker en ligne </label><br>
  <label><input type="radio" name="reponse1" value="b"> À stocker ses cryptomonnaies </label><br>
  <label><input type="radio" name="reponse1" value="c"> À imprimer des billets </label><br><br>

  <h3>2. Qui contrôle les cryptomonnaies ?</h3>
  <label><input type="radio" name="reponse2" value="a"> La Banque Centrale Européenne </label><br>
  <label><input type="radio" name="reponse2" value="b"> Le gouvernement français </label><br>
  <label><input type="radio" name="reponse2" value="c"> Personne, elles sont décentralisées </label><br><br>

  <h3>3. Quelle est une crypto connue ?</h3>
  <label><input type="radio" name="reponse3" value="a"> Bitcoin (BTC) </label><br>
  <label><input type="radio" name="reponse3" value="b"> Euro Coin (EUR) </label><br>
  <label><input type="radio" name="reponse3" value="c"> DollarCash (DC$) </label><br><br>

  <h3>4. Que signifie NFT ?</h3>
  <label><input type="radio" name="reponse4" value="a"> Non-Financial Token</label><br>
  <label><input type="radio" name="reponse4" value="b"> Nice Funky Thing</label><br>
  <label><input type="radio" name="reponse4" value="c"> Non-Fungible Token</label><br><br>

  <h3>5. Quelle phrase est vraie ?</h3>
  <label><input type="radio" name="reponse5" value="a"> Toutes les cryptos sont physiques </label><br>
  <label><input type="radio" name="reponse5" value="b"> Un wallet est aussi appelé portefeuille numérique </label><br>
  <label><input type="radio" name="reponse5" value="c"> Les cryptos ne sont utilisées que dans les jeux vidéo </label><br><br>

  <h3>6. Que permet la technologie blockchain ?</h3>
  <label><input type="radio" name="reponse6" value="a"> De jouer à Minecraft en ligne </label><br>
  <label><input type="radio" name="reponse6" value="b"> De sécuriser et tracer les transactions </label><br>
  <label><input type="radio" name="reponse6" value="c"> D'effacer les données bancaires </label><br><br>

  <button class="buttonquiz" type="submit">Valider mes réponses</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $score = 0;

  if (isset($_POST['reponse1']) && $_POST['reponse1'] === 'b') $score++;
  if (isset($_POST['reponse2']) && $_POST['reponse2'] === 'c') $score++;
  if (isset($_POST['reponse3']) && $_POST['reponse3'] === 'a') $score++;
  if (isset($_POST['reponse4']) && $_POST['reponse4'] === 'c') $score++;
  if (isset($_POST['reponse5']) && $_POST['reponse5'] === 'b') $score++;
  if (isset($_POST['reponse6']) && $_POST['reponse6'] === 'b') $score++;

  $message = "Tu as obtenu $score / 6. ";

  if ($score === 6) {
    $message .= "Parfait !  T’es un(e) crack de la crypto 🔥";
    echo "<p style='color: limegreen;'>$message</p>";
  } elseif ($score >= 4) {
    $message .= "Bien joué ! Encore un petit effort ";
    echo "<p style='color: orange;'>$message</p>";
  } else {
    $message .= "Courage ! Tu vas progresser  Réessaye encore !";
    echo "<p style='color: red;'>$message</p>";
  }
  echo "<script>alert(" . json_encode($message) . ");</script>";
}
?>




  </section>
</main>
<aside class = "imgquiztuto">
  <img class ="tuto" src="<?= ROOT ?>images/tuto.png" alt="logo tuto">
  <img class ="quiz" src="<?= ROOT ?>images/quiz.png" alt="logo quiz">
</aside>

<?php include '../inc/bas.php';?>
