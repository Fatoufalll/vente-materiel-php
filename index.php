<?php
require_once 'db.php'; // Assure-toi que ce fichier existe avec ta connexion PDO

$rechercheResultats = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['rechercher'])) {
    $terme = trim($_POST['terme']);

    if (!empty($terme)) {
        $sql = "
            SELECT c.nom, c.prenom, c.telephone, c.fi, c.adresse,
                   m.marque, m.modele, m.systeme_exploitation, m.numero_serie, m.nom_utilisateur, m.accessoires
            FROM clients c
            JOIN materiels m ON c.id = m.client_id
            WHERE c.nom LIKE :terme
               OR c.prenom LIKE :terme
               OR c.telephone LIKE :terme
               OR c.fi LIKE :terme
               OR c.adresse LIKE :terme
               OR m.marque LIKE :terme
               OR m.modele LIKE :terme
               OR m.numero_serie LIKE :terme
               OR m.nom_utilisateur LIKE :terme
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':terme' => '%' . $terme . '%']);
        $rechercheResultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un matériel</title>
    <link rel="stylesheet" href="styles/formulaire.css">
    <script>
        function validerFormulaire() {
            const telephone = document.forms[0]["telephone"].value;
            const numeroSerie = document.forms[0]["numero_serie"].value;

            // Vérification du téléphone (format FR basique)
            const regexTel = /^(0|\+33)[1-9](\d{2}){4}$/;
            if (!regexTel.test(telephone.replace(/\s+/g, ''))) {
                alert("Le numéro de téléphone doit être valide (ex : 0601020304 ou +33601020304)");
                return false;
            }

            // Vérification numéro de série (chiffres uniquement)
            if (!/^\d+$/.test(numeroSerie)) {
                alert("Le numéro de série doit contenir uniquement des chiffres.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <!-- 🔍 Formulaire de recherche -->
<h2>🔍 Recherche</h2>
<form method="POST" style="margin-bottom: 20px;">
    <input type="text" name="terme" placeholder="Nom, prénom, téléphone, fi..." required>
    <button type="submit" name="rechercher">Rechercher</button>
</form>

<?php if (isset($_POST['rechercher'])): ?>
    <?php if (count($rechercheResultats) > 0): ?>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>FI</th>
                    <th>Adresse</th>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>OS</th>
                    <th>Numéro de série</th>
                    <th>Utilisateur</th>
                    <th>Accessoires</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rechercheResultats as $result): ?>
                    <tr>
                        <td><?= htmlspecialchars($result['nom']) ?></td>
                        <td><?= htmlspecialchars($result['prenom']) ?></td>
                        <td><?= htmlspecialchars($result['telephone']) ?></td>
                        <td><?= htmlspecialchars($result['fi']) ?></td>
                        <td><?= htmlspecialchars($result['adresse']) ?></td>
                        <td><?= htmlspecialchars($result['marque']) ?></td>
                        <td><?= htmlspecialchars($result['modele']) ?></td>
                        <td><?= htmlspecialchars($result['systeme_exploitation']) ?></td>
                        <td><?= htmlspecialchars($result['numero_serie']) ?></td>
                        <td><?= htmlspecialchars($result['nom_utilisateur']) ?></td>
                        <td><?= htmlspecialchars($result['accessoires']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucun matériel trouvé pour la recherche « <?= htmlspecialchars($_POST['terme']) ?> ».</p>
    <?php endif; ?>
<?php endif; ?>
    <!-- Ton code HTML/PHP actuel -->

    <h1>Enregistrement d’un nouveau matériel</h1>
    
    <form action="enregistrer.php" method="POST" onsubmit="return validerFormulaire();">
        <h3>Informations client</h3>
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="text" name="adresse" placeholder="Adresse" required>
        <input type="text" name="telephone" placeholder="Téléphone (ex : 06XXXXXXXX)" required>
        <input type="text" name="fi" placeholder="FI" required>

        <h3>Matériel</h3>
        <input type="text" name="type" placeholder="Type" required>
        <input type="text" name="marque" placeholder="Marque" required>
        <input type="text" name="modele" placeholder="Modèle" required>
        <input type="text" name="os" placeholder="Système d’exploitation" required>
        <input type="text" name="numero_serie" placeholder="Numéro de série (chiffres uniquement)" required>
        <input type="text" name="nom_utilisateur" placeholder="Nom d’utilisateur" required>
        <input type="text" name="accessoires" placeholder="Accessoires">

        <button type="submit">Enregistrer</button>
        
    </form>
    

    <p><a href="fiche_activite.php">← Voir la fiche d’activité</a></p>
</body>

</body>
</html>
