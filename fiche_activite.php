<style>
  .encadrement {
    border: 2px solid #333;
    padding: 20px;
    border-radius: 10px;
    background-color: #f9f9f9;
    margin-bottom: 20px;
    width: 100%;
    box-sizing: border-box;
  }

  .titre-centre {
    text-align: center;
    margin-bottom: 15px;
    font-size: 1.5em;
  }

  .ligne {
    margin-bottom: 10px;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    align-items: center;
  }

  .checkbox-commentaire-container {
    display: flex;
    gap: 30px;
  }

  .checkbox-column {
    display: flex;
    flex-direction: column;
    gap: 10px;
    min-width: 300px;
  }

  .checkbox-line {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  textarea {
    width: 100%;
    height: 250px;
    padding: 10px;
    font-size: 14px;
    font-family: Arial, sans-serif;
    resize: vertical;
  }

  .commentaire-block {
    flex-grow: 1;
  }

  .autres-precisez {
    display: flex;
    align-items: center;
    gap: 5px;
  }

  .autres-precisez input[type="text"] {
    width: 150px;
  }
  
</style>

<!-- Partie en-tête -->
<div class="encadrement">
  <h2 class="titre-centre">Fiche d’activité</h2>
  <div class="ligne">
    Nom : <input type="text" name="nom">
    Prénom : <input type="text" name="prenom">
    <label for="date">Date :</label>
    <input type="date" id="date" name="date" required>
  </div>
</div>

<!-- Partie tâches -->
<div class="encadrement">
  <div class="ligne">
    ACCUEIL CLIENTÈLE – Nombre de clients au téléphone :
    <input type="text" name="clients_telephone">
    Et dans BEI :
    <input type="text" name="clients_bei">
  </div>

  <div class="checkbox-commentaire-container">
    <div class="checkbox-column">
      <div class="checkbox-line"><input type="checkbox" name="test_diag" id="test_diag"><label for="test_diag">Test et Diag</label></div>
      <div class="checkbox-line"><input type="checkbox" name="depannage" id="depannage"><label for="depannage">Dépannage</label></div>
      <div class="checkbox-line"><input type="checkbox" name="prise_charge" id="prise_charge"><label for="prise_charge">Prise en charge MAT</label></div>
      <div class="checkbox-line"><input type="checkbox" name="presentation_mat" id="presentation_mat"><label for="presentation_mat">Présentation MAT</label></div>
      <div class="checkbox-line"><input type="checkbox" name="facturation" id="facturation"><label for="facturation">Facturation</label></div>
      <div class="checkbox-line"><input type="checkbox" name="renseignement" id="renseignement"><label for="renseignement">Renseignement</label></div>
      <div class="checkbox-line autres-precisez">
    <input type="checkbox" name="autres"> Autres
    <input type="text" name="autres_commentaire" placeholder="Précisez...">
      </div>
    </div>

    <div class="commentaire-block">
      <label for="commentaires"><strong></strong></label><br>
      <textarea name="commentaires" id="commentaires" placeholder="Écrire ici vos remarques..."></textarea>
    </div>
  </div>
</div>
<style>
  .encadrement {
    border: 2px solid #333;
    padding: 20px;
    border-radius: 10px;
    background-color: #f9f9f9;
    margin-bottom: 20px;
    width: 100%;
    box-sizing: border-box;
  }

  .titre-centre {
    text-align: center;
    margin-bottom: 15px;
    font-size: 1.5em;
  }

  .ligne {
    margin-bottom: 10px;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    align-items: center;
  }

  .checkbox-commentaire-container {
    display: flex;
    gap: 30px;
  }

  .checkbox-column {
    display: flex;
    flex-direction: column;
    gap: 10px;
    min-width: 300px;
  }

  .checkbox-line {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  textarea {
    width: 100%;
    height: 250px;
    padding: 10px;
    font-size: 14px;
    font-family: Arial, sans-serif;
    resize: vertical;
  }

  .commentaire-block {
    flex-grow: 1;
  }

  .autres-precisez {
    display: flex;
    align-items: center;
    gap: 5px;
  }

  .autres-precisez input[type="text"] {
    width: 150px;
  }

  /* Ligne de temps */
  .timeline-container {
    margin-top: 25px;
    width: 100%;
  }

  .timeline {
    position: relative;
    height: 50px;
    border-top: 3px solid #333;
    margin-bottom: 10px;
  }

  /* Points principaux des heures */
  .timeline-hour {
    position: absolute;
    top: -10px;
    width: 4px;
    height: 20px;
    background-color: #333;
  }

  /* Étiquettes des heures */
  .timeline-label-hour {
    position: absolute;
    top: 15px;
    font-size: 12px;
    font-family: Arial, sans-serif;
    color: #333;
    user-select: none;
  }

  /* Petits ticks pour les 15, 30, 45 minutes */
  .timeline-minute-tick {
    position: absolute;
    top: 0;
    width: 2px;
    height: 10px;
    background-color: #666;
  }

  /* Étiquettes minutes */
  .timeline-label-minute {
    position: absolute;
    top: 25px;
    font-size: 10px;
    font-family: Arial, sans-serif;
    color: #666;
    user-select: none;
  }
</style>

<!-- Ton formulaire... -->

<!-- Ligne de temps -->
<div class="timeline-container">
  <div class="timeline">
    <!-- Heures (9h à 18h) -->
    <div class="timeline-hour" style="left: 0%;"></div>
    <div class="timeline-label-hour" style="left: 0%;">9h</div>

    <div class="timeline-hour" style="left: 11.11%;"></div>
    <div class="timeline-label-hour" style="left: 11.11%;">10h</div>

    <div class="timeline-hour" style="left: 22.22%;"></div>
    <div class="timeline-label-hour" style="left: 22.22%;">11h</div>

    <div class="timeline-hour" style="left: 33.33%;"></div>
    <div class="timeline-label-hour" style="left: 33.33%;">12h</div>

    <div class="timeline-hour" style="left: 44.44%;"></div>
    <div class="timeline-label-hour" style="left: 44.44%;">13h</div>

    <div class="timeline-hour" style="left: 55.55%;"></div>
    <div class="timeline-label-hour" style="left: 55.55%;">14h</div>

    <div class="timeline-hour" style="left: 66.66%;"></div>
    <div class="timeline-label-hour" style="left: 66.66%;">15h</div>

    <div class="timeline-hour" style="left: 77.77%;"></div>
    <div class="timeline-label-hour" style="left: 77.77%;">16h</div>

    <div class="timeline-hour" style="left: 88.88%;"></div>
    <div class="timeline-label-hour" style="left: 88.88%;">17h</div>

    <div class="timeline-hour" style="left: 100%; transform: translateX(-100%);"></div>
    <div class="timeline-label-hour" style="left: 100%; transform: translateX(-100%);">18h</div>

    <!-- Minutes (15, 30, 45) entre chaque heure -->
    <!-- Calculées par 11.11% / 4 = environ 2.78% entre chaque tick -->
    <!-- Par exemple entre 9h (0%) et 10h (11.11%) -->

    <!-- 9h15 -->
    <div class="timeline-minute-tick" style="left: 2.78%;"></div>
    <div class="timeline-label-minute" style="left: 2.78%;">15</div>

    <!-- 9h30 -->
    <div class="timeline-minute-tick" style="left: 5.56%;"></div>
    <div class="timeline-label-minute" style="left: 5.56%;">30</div>

    <!-- 9h45 -->
    <div class="timeline-minute-tick" style="left: 8.33%;"></div>
    <div class="timeline-label-minute" style="left: 8.33%;">45</div>

    <!-- Répéter pour chaque heure -->

    <!-- 10h15 -->
    <div class="timeline-minute-tick" style="left: 13.89%;"></div>
    <div class="timeline-label-minute" style="left: 13.89%;">15</div>

    <!-- 10h30 -->
    <div class="timeline-minute-tick" style="left: 16.67%;"></div>
    <div class="timeline-label-minute" style="left: 16.67%;">30</div>

    <!-- 10h45 -->
    <div class="timeline-minute-tick" style="left: 19.44%;"></div>
    <div class="timeline-label-minute" style="left: 19.44%;">45</div>

    <!-- 11h15 -->
    <div class="timeline-minute-tick" style="left: 24.07%;"></div>
    <div class="timeline-label-minute" style="left: 24.07%;">15</div>

    <!-- 11h30 -->
    <div class="timeline-minute-tick" style="left: 26.85%;"></div>
    <div class="timeline-label-minute" style="left: 26.85%;">30</div>

    <!-- 11h45 -->
    <div class="timeline-minute-tick" style="left: 29.63%;"></div>
    <div class="timeline-label-minute" style="left: 29.63%;">45</div>

    <!-- 12h15 -->
    <div class="timeline-minute-tick" style="left: 35.18%;"></div>
    <div class="timeline-label-minute" style="left: 35.18%;">15</div>

    <!-- 12h30 -->
    <div class="timeline-minute-tick" style="left: 37.96%;"></div>
    <div class="timeline-label-minute" style="left: 37.96%;">30</div>

    <!-- 12h45 -->
    <div class="timeline-minute-tick" style="left: 40.74%;"></div>
    <div class="timeline-label-minute" style="left: 40.74%;">45</div>

    <!-- 13h15 -->
    <div class="timeline-minute-tick" style="left: 46.29%;"></div>
    <div class="timeline-label-minute" style="left: 46.29%;">15</div>

    <!-- 13h30 -->
    <div class="timeline-minute-tick" style="left: 49.07%;"></div>
    <div class="timeline-label-minute" style="left: 49.07%;">30</div>

    <!-- 13h45 -->
    <div class="timeline-minute-tick" style="left: 51.85%;"></div>
    <div class="timeline-label-minute" style="left: 51.85%;">45</div>

    <!-- 14h15 -->
    <div class="timeline-minute-tick" style="left: 57.40%;"></div>
    <div class="timeline-label-minute" style="left: 57.40%;">15</div>

    <!-- 14h30 -->
    <div class="timeline-minute-tick" style="left: 60.18%;"></div>
    <div class="timeline-label-minute" style="left: 60.18%;">30</div>

    <!-- 14h45 -->
    <div class="timeline-minute-tick" style="left: 62.96%;"></div>
    <div class="timeline-label-minute" style="left: 62.96%;">45</div>

    <!-- 15h15 -->
    <div class="timeline-minute-tick" style="left: 68.51%;"></div>
    <div class="timeline-label-minute" style="left: 68.51%;">15</div>

    <!-- 15h30 -->
    <div class="timeline-minute-tick" style="left: 71.29%;"></div>
    <div class="timeline-label-minute" style="left: 71.29%;">30</div>

    <!-- 15h45 -->
    <div class="timeline-minute-tick" style="left: 74.07%;"></div>
    <div class="timeline-label-minute" style="left: 74.07%;">45</div>

    <!-- 16h15 -->
    <div class="timeline-minute-tick" style="left: 79.62%;"></div>
    <div class="timeline-label-minute" style="left: 79.62%;">15</div>

    <!-- 16h30 -->
    <div class="timeline-minute-tick" style="left: 82.40%;"></div>
    <div class="timeline-label-minute" style="left: 82.40%;">30</div>

    <!-- 16h45 -->
    <div class="timeline-minute-tick" style="left: 85.18%;"></div>
    <div class="timeline-label-minute" style="left: 85.18%;">45</div>

    <!-- 17h15 -->
    <div class="timeline-minute-tick" style="left: 90.73%;"></div>
    <div class="timeline-label-minute" style="left: 90.73%;">15</div>

    <!-- 17h30 -->
    <div class="timeline-minute-tick" style="left: 93.51%;"></div>
    <div class="timeline-label-minute" style="left: 93.51%;">30</div>

    <!-- 17h45 -->
    <div class="timeline-minute-tick" style="left: 96.29%;"></div>
    <div class="timeline-label-minute" style="left: 96.29%;">45</div>
  </div>
</div>
<style>
  .timeline-container {
    border-top: 2px solid #333;
    margin-bottom: 10px;
    position: relative;
    height: 40px;
  }

  .timeline-hour-tick,
  .timeline-minute-tick {
    position: absolute;
    top: -5px;
    height: 10px;
    width: 1px;
    background: #000;
  }

  .timeline-hour-label,
  .timeline-label-minute {
    position: absolute;
    top: 10px;
    font-size: 11px;
    transform: translateX(-50%);
    color: #333;
  }

  .client-fieldset {
    border: 2px solid #ccc;
    padding: 15px;
    margin-bottom: 30px;
    border-radius: 10px;
  }

  .ligne-info {
    margin-bottom: 15px;
  }

  .checkbox-line {
    margin-bottom: 5px;
  }
  .taches-et-commentaire {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  gap: 20px;
  margin-bottom: 20px;
}

.colonne-checkboxes {
  flex: 1;
  min-width: 200px;
}

.colonne-commentaire {
  flex: 2;
  min-width: 300px;
}

.colonne-commentaire textarea {
  width: 100%;
  height: 150px;
  resize: vertical;
  padding: 10px;
  font-size: 14px;
}
.checkbox-commentaire-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  width: 100%;
  margin-top: 15px;
}

.checkbox-column {
  flex: 1;
  min-width: 250px;
}

.checkbox-line {
  margin-bottom: 10px;
}

.autres-precisez input[type="text"] {
  margin-top: 5px;
  width: 100%;
  padding: 5px;
  box-sizing: border-box;
}

.commentaire-block {
  flex: 2;
  min-width: 300px;
}

.commentaire-block textarea {
  width: 100%;
  height: 160px;
  padding: 10px;
  font-size: 14px;
  resize: vertical;
  box-sizing: border-box;
}

</style>
<?php
// Connexion à la base de données
$pdo = new PDO("mysql:host=localhost;dbname=bidouille_info", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$materiels_associes = [];
$fi_associe = '';
$nom_recherche = '';

// Si un nom a été saisi dans le formulaire et que le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nom'][0])) {
    $nom_recherche = $_POST['nom'][0];

    // Récupère les infos du client et ses matériels associés
    $stmt = $pdo->prepare("
        SELECT c.fi, m.marque, m.modele
        FROM clients c
        LEFT JOIN materiels m ON m.client_id = c.id
        WHERE c.nom = :nom
    ");
    $stmt->execute([':nom' => $nom_recherche]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($results) {
        $fi_associe = $results[0]['fi']; // FI associé
        foreach ($results as $row) {
            if ($row['marque'] && $row['modele']) {
                $materiels_associes[] = $row['marque'] . ' ' . $row['modele'];
            }
        }
    }
}
?>


<div id="clients-container">
  <!-- Bloc client avec ligne de temps -->
  <div class="client-block">
    <!-- Ligne de temps -->
  

    <fieldset class="client-fieldset">
      <legend></legend>
      <div class="ligne-info">
        <?php if (!empty($materiels_associes)): ?>
         Nom :
<input type="text" name="nom[]" value="<?= htmlspecialchars($nom_recherche) ?>">

Matériel :
<select name="materiel[]">
    <?php if (!empty($materiels_associes)): ?>
        <?php foreach ($materiels_associes as $materiel): ?>
            <option value="<?= htmlspecialchars($materiel) ?>"><?= htmlspecialchars($materiel) ?></option>
        <?php endforeach; ?>
    <?php else: ?>
        <option value="">-- Aucun matériel trouvé --</option>
    <?php endif; ?>
</select>

FI :
<input type="text" name="fi[]" value="<?= htmlspecialchars($fi_associe) ?>">

        <?php elseif (!empty($_POST['nom_recherche']) || !empty($_POST['fi_recherche'])): ?>
          <p>Aucun résultat trouvé.</p>
          Nom: <input type="text" name="nom[]">
          Matériel: <input type="text" name="materiel[]">
          FI: <input type="text" name="fi[]">
        <?php else: ?>
          Nom: <input type="text" name="nom[]">
          Matériel: <input type="text" name="materiel[]">
          FI: <input type="text" name="fi[]">
        <?php endif; ?>
      </div>

      <div class="checkbox-commentaire-container">
  <div class="checkbox-column">
    <div class="checkbox-line"><input type="checkbox" name="installe" id="installe"><label for="installe"> Installé</label></div>
    <div class="checkbox-line"><input type="checkbox" name="nettoyage" id="nettoyage"><label for="nettoyage"> Nettoyage</label></div>
    <div class="checkbox-line"><input type="checkbox" name="test" id="test"><label for="test"> Test</label></div>
    <div class="checkbox-line"><input type="checkbox" name="intervention" id="intervention"><label for="intervention"> Intervention</label></div>
    <div class="checkbox-line"><input type="checkbox" name="reinitialisation" id="reinitialisation"><label for="reinitialisation"> Réinitialisation</label></div>
    <div class="checkbox-line"><input type="checkbox" name="reparation" id="reparation"><label for="reparation"> Réparation</label></div>
    <div class="checkbox-line autres-precisez">
      <input type="checkbox" name="autres" id="autres"><label for="autres"> Autres</label>
      <input type="text" name="autres_commentaire" placeholder="Précisez...">
    </div>
  </div>

  <div class="commentaire-block">
    <label for="commentaires"><strong></strong></label><br>
    <textarea name="commentaires" id="commentaires" placeholder="Écrire ici vos remarques..."></textarea>
  </div>
</div>


      <div class="actions">
        <button type="button" class="enregistrer-btn" onclick="enregistrerClient(this)">Enregistrer</button>
        <button type="button" class="modifier-btn" onclick="modifierClient(this)">Modifier</button>
        <button type="button" class="supprimer-btn" onclick="supprimerClient(this)">Supprimer</button>
      </div>
    </fieldset>
      <div class="timeline-container">
      <?php
        for ($h = 9; $h <= 18; $h++) {
          $left = ($h - 9) * (100 / 9);
          echo "<div class='timeline-hour-tick' style='left: {$left}%; height: 14px;'></div>";
          echo "<div class='timeline-hour-label' style='left: {$left}%;'>{$h}h</div>";
          
          if ($h < 18) {
            for ($m = 15; $m <= 45; $m += 15) {
              $offset = $left + ($m / 60) * (100 / 9);
              echo "<div class='timeline-minute-tick' style='left: {$offset}%; height: 8px;'></div>";
              echo "<div class='timeline-label-minute' style='left: {$offset}%;'>{$m}</div>";
            }
          }
        }
      ?>
    </div>
  </div>
</div>

<!-- Ajouter un client -->
<button id="ajouter-btn" onclick="ajouterClient()">➕ Ajouter un client</button>

<script>
  function ajouterClient() {
    const container = document.getElementById("clients-container");
    const bloc = document.querySelector(".client-block");
    const clone = bloc.cloneNode(true);

    // Réinitialiser les champs dans le clone
    const inputs = clone.querySelectorAll("input");
    inputs.forEach(input => {
      if (input.type === "text") input.value = "";
      if (input.type === "checkbox") input.checked = false;
      input.disabled = false;
    });

    container.appendChild(clone);
  }

  function supprimerClient(button) {
    const bloc = button.closest(".client-block");
    if (document.querySelectorAll(".client-block").length > 1) {
      bloc.remove();
    } else {
      alert("Il faut au moins une fiche client.");
    }
  }

  function enregistrerClient(button) {
    const bloc = button.closest(".client-block");
    const inputs = bloc.querySelectorAll("input");
    inputs.forEach(input => input.disabled = true);
    alert("Fiche enregistrée !");
  }

  function modifierClient(button) {
    const bloc = button.closest(".client-block");
    const inputs = bloc.querySelectorAll("input");
    inputs.forEach(input => input.disabled = false);
  }
</script>
