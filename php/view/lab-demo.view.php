<main class="bd-content container">
    <div class="row">
        <div class="col-6">
            <div class="up-content">
                <h1 class="up-title mb-4 pb-3">Lab</h1>
                <p class="up-lead"><?= $lab['meta_title'] ?></p>
                <p class="up-text text-muted"><?= $lab['abstract'] ?></p>
            </div>
        </div>

        <div class="col-6 my-4">
            <? include ('../php/view/lab/'. $lab['name'] .'.view.php'); ?>
        </div>
    </div>

</main>
