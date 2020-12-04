<main class="bd-content container">
    <div class="row">
        <div class="col-8">
            <div class="up-content">
                <h1 class="up-title mb-4 pb-3"><?= $page['title'] ?></h1>

                <? while ($lead = $leads->fetch()) { ?>
                    <p class="up-lead"><?= $lead['subtitle'] ?></p>
                    <p class="up-text text-muted"><?= $lead['text'] ?></p>
                <? } ?></div>
        </div>
    </div>

    <? while ($article = $articles->fetch()) { ?>
        <article class="py-1 my-4 d-block">
            <h2><?= $article['title'] ?></h2>
            <p><?= $article['abstract'] ?></p>
            <a href="/wiki/<?= $page['page'] ?>/<?= $article['name'] ?>" class="btn btn-primary">Learn more</a>
        </article>
    <? } ?>
</main>