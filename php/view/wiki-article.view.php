<main class="bd-content container">
    <div class="row">
        <div class="col-10">
            <div class="up-content">
                <h1 class="up-title mb-4 pb-3"><?= $page['title'] ?></h1>

                <p class="up-lead"><?= $article['title'] ?></p>
                <p class="up-text text-muted"><?= $article['abstract'] ?></p>
        </div>
    </div>
    
    <article class="py-1 my-4">
        <h2><?= $article['title'] ?></h2>
        <p><?= $article['abstract'] ?></p>
    </article>
</main>