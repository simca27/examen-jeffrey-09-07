<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('list-vehicule') ?>">
    < Retour à la liste des vehicules</a> <form action="<?= url('vehicule/add') ?>" method="post">
        <input type="text" name="marque" class="form-control" placeholder="marque">
        <input type="text" name="modele" class="form-control" placeholder="modele">
        <input type="text" name="couleur" class="form-control" placeholder="couleur">
        <input type="text" name="immatriculation" class="form-control" placeholder="immatriculation">
        <button class="btn btn-success float-right">enregistrer le vehicule</button>
        </form>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>