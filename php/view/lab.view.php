<main class="bd-content container">
    <div class="row">
        <div class="col-8">
            <div class="up-content">
                <h1 class="up-title mb-4 pb-3">Lab</h1>
                <p class="up-lead"></p>
                <p class="up-text text-muted">Understand cryptographic hash functions, experiment on their use, try hash functions breaking tools.</p>
            </div>
        </div>
    </div>

    <ul class="row row-cols-1 row-cols-md-2 row-cols-xl-3 list-unstyled list">
        <?php while ($lab = $labs->fetch()) { ?>
            <li class="col py-1 my-4 d-block">
                <div class="card border-light">
                    <div class="card-header">
                        <?= ($lab['python']) ? 'Pyhton lab' : $lab['lab_type'] ?>
                    </div>
                    <div class="card-body">
                        <h2><?= $lab['title'] ?></h2>
                        <p><?= htmlspecialchars_decode($lab['abstract_html']) ?></p>
                        <a href="/lab/<?= $lab['name'] ?>" class="btn btn-primary">Try out</a>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</main>
