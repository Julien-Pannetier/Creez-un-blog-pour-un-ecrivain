<?php $title = 'Jean Forteroche - Administration'; ?>

<?php ob_start(); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="my-4">Tableau de bord</h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-flag mr-1"></i>Commentaires signalés
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php if (empty($reportComments)): ?>
                                    <p>
                                        Il n’y a pas de commentaire signalé.
                                    </p>
                                <?php else: ?>
                                    <thead>
                                        <tr>
                                            <th>Auteur</th>
                                            <th>Commentaire</th>
                                            <th>Signalements</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($reportComments as $reportComment) { ?>
                                        <tr>
                                            <td><?= htmlspecialchars($reportComment->author()) ?></td>
                                            <td class="text-justify">
                                                <em>Publié le <?= $reportComment->date() ?></em><br>
                                                <?= htmlspecialchars_decode($reportComment->comment()) ?>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <?= $reportComment->reported() ?>  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a class="btn btn-success mx-1" href="index.php?action=approveComment&amp;id=<?= htmlspecialchars($reportComment->id()) ?>" title="Approuver">
                                                        <i class="fas fa-check"></i>
                                                    </a>
                                                    <a class="btn btn-warning mx-1" href="index.php?action=displayUpdateComment&amp;id=<?= htmlspecialchars($reportComment->id()) ?>" title="Modifier">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a class="btn btn-danger mx-1" href="index.php?action=deleteComment&amp;id=<?= htmlspecialchars($reportComment->id()) ?>" title="Supprimer">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>