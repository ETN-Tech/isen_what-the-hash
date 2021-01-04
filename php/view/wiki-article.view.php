<main class="bd-content container">
    <div class="row">
        <div class="col-10">
            <div class="up-content">
                <h1 class="up-title mb-4 pb-3"><?= $article['title'] ?></h1>

                <p class="up-lead"><?= $article['title'] ?></p>
                <p class="up-text text-muted"><?= htmlspecialchars_decode($article['abstract_html']) ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <?= htmlspecialchars_decode($article['content_html']) ?></p>
        </div>
    </div>
</main>
