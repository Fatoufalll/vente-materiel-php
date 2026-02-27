<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données POST en évitant les erreurs si champ manquant
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $adresse = $_POST['adresse'] ?? '';
    $telephone = $_POST['telephone'] ?? '';
    $fi = $_POST['fi'] ?? '';

    $marque = $_POST['marque'] ?? '';
    $modele = $_POST['modele'] ?? '';
    $os = $_POST['os'] ?? '';
    $numero_serie = $_POST['numero_serie'] ?? '';
    $nom_utilisateur = $_POST['nom_utilisateur'] ?? '';
    $accessoires = $_POST['accessoires'] ?? '';

    // Vérifier que les champs obligatoires ne sont pas vides
    if ($nom && $prenom && $adresse && $telephone && $fi &&
        $marque && $modele && $os && $numero_serie && $nom_utilisateur) {

        // Insertion client
        $sqlClient = "INSERT INTO clients (nom, prenom, adresse, telephone, fi) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sqlClient);
        $stmt->execute([$nom, $prenom, $adresse, $telephone, $fi]);

        $client_id = $pdo->lastInsertId();

        // Insertion matériel
        $sqlMat = "INSERT INTO materiels (client_id, marque, modele, systeme_exploitation, numero_serie, nom_utilisateur, accessoires) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sqlMat);
        $stmt->execute([$client_id, $marque, $modele, $os, $numero_serie, $nom_utilisateur, $accessoires]);

        echo "Matériel enregistré avec succès. <a href='historique.php'>Voir l’historique des matériels</a>";
    } else {
        echo "Erreur : veuillez remplir tous les champs obligatoires.";
    }
} else {
    echo "Formulaire non soumis.";
}
