<h2>Mouvement Trajet</h2>

<?php if (!empty($_GET['success'])): ?>
    <p style="color:green;">Enregistrement réussi !</p>
<?php endif; ?>

<form method="post" action="/mvtTrajet/save">

    <label>Date début</label>
    <input type="datetime-local" name="dateDebut" required>

    <label>Date fin</label>
    <input type="datetime-local" name="dateFin" required>

    <label>Montant Recette</label>
    <input type="number" name="montantRecette" required>

    <label>Montant Carburant</label>
    <input type="number" name="montantCarburant" required>

    <label>Chauffeur</label>
    <select name="idChauffeur">
        <?php foreach ($chauffeurs as $c): ?>
            <option value="<?= $c['id'] ?>"><?= $c['nomChauffeur'] ?></option>
        <?php endforeach; ?>
    </select>

    <label>Véhicule</label>
    <select name="idVehicule">
        <?php foreach ($vehicules as $v): ?>
            <option value="<?= $v['id'] ?>"><?= $v['nomVehicule'] ?></option>
        <?php endforeach; ?>
    </select>

    <label>Trajet</label>
    <select name="idTrajet">
        <?php foreach ($trajets as $t): ?>
            <option value="<?= $t['id'] ?>"><?= $t['pointDepart'] ?> - <?= $t['pointArrive'] ?></option>
        <?php endforeach; ?>
    </select>

    <label>Panne (optionnel)</label>
    <input type="text" name="panne">

    <button type="submit">Enregistrer</button>
</form>
