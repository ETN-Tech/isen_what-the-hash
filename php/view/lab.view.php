<main class="bd-content container">
    <div class="row">
        <div class="col-8">
            <div class="up-content">
                <h1 class="up-title mb-4 pb-3">Lab</h1>
                <p class="up-lead">Experiment with cryptographic hash functions.</p>
                <p class="up-text text-muted">Understand cryptographic hash functions, experiment on their use, try hash functions breaking tools.</p>
            </div>
        </div>
    </div>

    <? while ($lab = $labs->fetch()) { ?>
        <article class="py-1 my-4 d-block">
            <h2><?= $lab['title'] ?></h2>
            <p><?= $lab['abstract'] ?></p>
            <a href="/lab/<?= $lab['name'] ?>" class="btn btn-primary">Try out</a>
        </article>
    <? } ?>
</main>
