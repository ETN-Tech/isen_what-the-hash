<main class="bd-masthead" id="content" role="main">
    <div class="container">
        <div class="row mb-5 pb-5">
            <div class="col-6 mx-auto col-md-3 order-md-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="10" class="img-fluid mb-3 mb-md-0" viewBox="0 0 1024 860" focusable="false" role="img"></svg>
            </div>
            <div class="col-md-9 order-md-1 text-center text-md-left pr-md-5">
                <h1 class="mb-3">Explore hash functions, attacks and implications</h1>
                <p class="lead mb-4">
                    Hash functions are used to protect the confidentiality of digital data, verify the integrity, authenticate and for a significant number of other technologies. Having secure hash functions is key to protect all these things.
                </p>
                <div class="d-flex flex-column flex-md-row">
                    <a href="/questions" class="btn btn-lg btn-primary mb-3 mr-md-3">Get started</a>
                    <a href="/lab" class="btn btn-lg btn-info mb-3 mr-md-3">Experiment</a>
                </div>
                <p class="text-muted mb-0"></p>
            </div>
        </div>

        <div class="up-content pt-4">
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
    </div>
</main>
