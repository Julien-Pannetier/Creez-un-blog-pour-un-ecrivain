<?php ob_start(); ?>

<!-- Header -->
<header id="masthead" class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Jean Forteroche</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Billet simple pour l'Alaska</h2>
            <a href="#about" class="btn btn-primary js-scroll-trigger">Découvrir</a>
        </div>
    </div>
</header>

<!-- Post Section  -->
<section id="post" class="post-section text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-black mb-4">
                    <?= htmlspecialchars($post['title']) ?>
                </h2>
                <hr class="d-none d-lg-block mb-5">
                <p class="text-black-50 text-left mb-3">
                    <em>Publié le <?= $post['date'] ?></em>
                </p>
                <p class="text-black-50 text-justify mb-5">
                    <?= nl2br(htmlspecialchars($post['content'])) ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Comment Section -->
<section id="comment" class="comment-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <h2 class="text-black mb-4">
                    LAISSER UN COMMENTAIRE
                </h2>
                <hr class="d-none d-lg-block mb-5">
                <p class="mb-5">
                    Votre adresse de messagerie ne sera pas publiée.
                </p>
                <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-5 text-left">
                            <label for="name">NOM :</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div class="form-group col-md-6 offset-md-1 text-left">
                            <label for="email">ADRESSE DE MESSAGERIE :</label>
                            <input type="email" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <label for="message">MESSAGE :</label>
                        <textarea id="message" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">ENVOYER</button>
                </form>
            </div>
        </div>
        <?php
        while ($comment = $comments->fetch())
        {
        ?>
        <div>
            <p>
                <strong><?= htmlspecialchars($comment['author']) ?></strong><em>, le <?= $comment['date'] ?></em>
            </p>
            <p class="text-justify">
                <?= nl2br(htmlspecialchars($comment['comment'])) ?>
            </p>
            <div class="text-center">
                <a class="btn btn-primary mt-1 " href="#" >
                    Signaler
                </a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>