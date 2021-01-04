<main class="bd-content container">
    <div class="up-content">
        <h1 id="#questions" class="up-title mb-5 pb-3">Questions</h1>
        <?php
        while ($page = $pages->fetch()) {
            $url = ($page['wiki']) ? '/wiki/'.$page['name'] : '/lab';
            ?>
            <div class="row mb-5">
                <div class="col col-md-8">
                    <p class="up-lead"><?= $page['lead_title'] ?></p>
                    <p class="up-text text-muted"><?= $page['lead_text'] ?></p>
                    <a href="<?= $url ?>" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        <?php } ?>
    </div>
</main>