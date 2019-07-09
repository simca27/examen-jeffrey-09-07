<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('') ?>">
    < Retour à la page d'accueil</a> <br>
        <a href="<?= url('registrations/add') ?>" class="btn btn-sm btn-primary">Ajouter une inscription</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>marque</th>
                    <th>modele</th>
                    <th>couleur</th>
                    <th>immatriculation</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($vehicule as $vehicule) : ?>

                    <tr>
                        <td><?= $vehicule['id'] ?></td>
                        <td> <a href="<?= url()  ?>"></a></td>
                        <td><?= $vehicule['id'] ?></td>
                        <td><?= $vehicule['id'] ?></td>


                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>