<?php 
session_start();
include 'inc/haut.php';
?>

<aside class="box">
    <img src="<?= ROOT ?>images/eaagle.png" alt="Logo">
    <p>Obtenez 5 Learning XP en rejoignant notre association</p>
    <a href="<?= ROOT ?>page/assoc.php">Inscrivez-vous →</a>
</aside>

<main>
    <h1>MY B1CS WALLET</h1>
    <br><br>

    <p>
        Le premier <strong><span class="blue">portefeuille crypto virtuel</span></strong> réservé aux étudiants B1CS de l’EFREI.<br>
        Apprenez à <span class="blue">gérer</span> vos cryptomonnaies, <span class="blue">simuler</span> des transactions, et <span class="blue">trader</span> sans risquer un seul euro 💶 ❌.<br>
        Devenez un pro de la finance décentralisée dans un environnement 100% sécurisé 🔐🚀
    </p>

    <section>
        <br>
        <h2>Pourquoi ce projet ?</h2>
        <br>
        <p><strong>B1CS Wallet</strong> est une <strong>plateforme fictive</strong> développée dans le cadre de notre Bachelor 1 CyberSécurité à l’EFREI par les membres de l'association du BDE.<br>
            Elle a pour but de permettre aux étudiants de découvrir le fonctionnement d’un portefeuille crypto, de s'entraîner à <strong>acheter, vendre, gérer un solde</strong> — le tout sans utiliser d'argent réel.
        </p>
    </section>

    <br>

    <section>
        <h2>Fonctionnalités</h2>
        <br>
        <ul>
            <li>🔐 Connexion via identifiants de connexion MyEFREI</li>
            <li>💼 Portefeuille crypto virtuel personnalisé</li>
            <li>📈 Suivi de vos achats, ventes et soldes</li>
            <li>📊 Statistiques de progression (wallet, gains)</li>
            <li>⚙️ Interface simple</li>
            <li>🎓 Projet conçu exclusivement pour la promo B1CS</li>
        </ul>
        <br><br>
        <h3>Rejoignez plus de 10.000 étudiants. Commencez dès aujourd'hui !!!</h3>
    </section>
</main>

<aside>
    <img src="<?= ROOT ?>images/teel.png" alt="tel">
</aside>

<?php include 'inc/bas.php'; ?>
