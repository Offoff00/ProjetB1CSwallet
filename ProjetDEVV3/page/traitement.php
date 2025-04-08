<?php
include '../inc/cle.php';

if (isset($_GET['recherche']) && !empty($_GET['recherche'])) {
    $mot = htmlspecialchars($_GET['recherche']);
    
    $sql = "SELECT * FROM clients WHERE nom LIKE '%$mot%' OR prenom LIKE '%$mot%'";

    $resultats = $cle->query($sql);

    echo "<h2>Résultats pour : " . htmlentities($mot) . "</h2><ul>";
    while ($ligne = $resultats->fetch()) {
        echo "<li>" . $ligne['prenom'] . " " . $ligne['nom'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Veuillez saisir un mot-clé.</p>";
}
?>

