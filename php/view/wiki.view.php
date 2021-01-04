<main class="bd-content container">
    <div class="row">
        <div class="col-8">
            <div class="up-content">
                <h1 class="up-title mb-4 pb-3"><?= $page['title'] ?></h1>

                <p class="up-lead"><?= $page['lead_title'] ?></p>
                <p class="up-text text-muted"><?= $page['lead_text'] ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <?= htmlspecialchars_decode($page['content_html']) ?>
        </div>
    </div>

    <ul class="row row-cols-1 list-unstyled list">
        <?php while ($article = $articles->fetch()) { ?>
            <li class="col py-1 my-3 d-block">
                <div class="card border-light">
                    <div class="card-body">
                        <h2><?= $article['title'] ?></h2>
                        <p><?= htmlspecialchars_decode($article['abstract_html']) ?></p>
                        <a href="/wiki/<?= $page['name'] ?>/<?= $article['name'] ?>" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</main>
