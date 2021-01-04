<main class="bd-content container">
    <div class="row">
        <div class="col-md-6">
            <div class="up-content">
                <h1 class="up-title mb-4 pb-3">Lab</h1>
                <p class="up-lead"><?= $lab['meta_title'] ?></p>
                <p class="up-text text-muted"><?= htmlspecialchars_decode($lab['abstract_html']) ?></p>
            </div>
        </div>

        <div class="col-md-6 my-4">
            <?php include ('../php/view/lab/'. $lab_view .'.view.php'); ?>
        </div>
    </div>

</main>
