<?php
// Connexion à la base de données
$pdo = new PDO("mysql:host=localhost;dbname=bidouille_info", "root", "");

// Initialisation
$resultats = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération des données du formulaire
    $nom = $_POST["nom"] ?? '';
    $prenom = $_POST["prenom"] ?? '';
    $adresse = $_POST["adresse"] ?? '';
    $telephone = $_POST["telephone"] ?? '';
    $fi = $_POST["fi"] ?? '';

    // Requête SQL avec jointure clients + materiels
    $sql = "
        SELECT materiels.*, clients.nom, clients.prenom, clients.adresse, clients.telephone, clients.fi
        FROM materiels
        INNER JOIN clients ON materiels.client_id = clients.id
        WHERE clients.nom LIKE :nom
           OR clients.prenom LIKE :prenom
           OR clients.adresse LIKE :adresse
           OR clients.telephone LIKE :telephone
           OR clients.fi LIKE :fi
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nom' => "%$nom%",
        ':prenom' => "%$prenom%",
        ':adresse' => "%$adresse%",
        ':telephone' => "%$telephone%",
        ':fi' => "%$fi%",
    ]);

    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Historique des Matériels</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        form { margin-bottom: 20px; }
        input { padding: 5px; margin: 5px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Recherche dans l'historique</h2>
    <form method="post">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="text" name="adresse" placeholder="Adresse">
        <input type="text" name="telephone" placeholder="Téléphone">
        <input type="text" name="fi" placeholder="FI">
        <button type="submit">Rechercher</button>
    </form>

    <?php if ($resultats): ?>
        <h3>Résultats :</h3>
        <table>
            <tr>
                <th>Nom</th><th>Prénom</th><th>Adresse</th><th>Téléphone</th><th>FI</th>
                <th>Marque</th><th>Modèle</th><th>OS</th><th>N° de série</th>
                <th>Utilisateur</th><th>Accessoires</th>
            </tr>
            <?php foreach ($resultats as $ligne): ?>
                <tr>
                    <td><?= htmlspecialchars($ligne['nom']) ?></td>
                    <td><?= htmlspecialchars($ligne['prenom']) ?></td>
                    <td><?= htmlspecialchars($ligne['adresse']) ?></td>
                    <td><?= htmlspecialchars($ligne['telephone']) ?></td>
                    <td><?= htmlspecialchars($ligne['fi']) ?></td>
                    <td><?= htmlspecialchars($ligne['marque']) ?></td>
                    <td><?= htmlspecialchars($ligne['modele']) ?></td>
                    <td><?= htmlspecialchars($ligne['systeme_exploitation']) ?></td> <!-- corrigé ici -->
                    <td><?= htmlspecialchars($ligne['numero_serie']) ?></td>
                    <td><?= htmlspecialchars($ligne['nom_utilisateur']) ?></td> <!-- corrigé ici -->
                    <td><?= htmlspecialchars($ligne['accessoires']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php elseif ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
        <p>Aucun matériel trouvé.</p>
    <?php endif; ?>
    <p><a href="index.php">← Retour à l’enregistrement</a></p>
</body>
</html>
