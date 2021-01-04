<main class="bd-content container">
    <h2 class="mb-4">Dashboard</h2>
    <hr class="mb-2">

    <div class="row mb-5">
        <div class="col col-md-8 col-lg-6 py-3">
            <div class="card ">
                <div class="card-header">Account connected</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="card-text my-2"><b>Username :</b> <?= ucfirst($user['username']) ?></p>
                        </div>
                        <div class="col text-right">
                            <a href="/admin/logout" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2 class="mb-4">Pages & articles management</h2>
            <hr>
            <?php
            while($page = $pages->fetch()) {
                $page_url = ($page['wiki']) ? 'wiki/'.$page['name'] : $page['name'];
                ?>
                <div class="row py-2">
                    <div class="col">
                        <h4><?= $page['meta_title'] ?></h4>
                    </div>
                    <div class="col">
                        <a href="/admin/manage-page/<?= $page['name'] ?>" class="btn btn-primary btn-sm">
                            <span class="icon-text">Manage</span>
                            <svg class="bi ml-1" width="20" height="20" fill="currentColor">
                                <use xlink:href="/icons/bootstrap-icons.svg#pencil-square"></use>
                            </svg>
                        </a>
                        <a href="/<?= $page_url ?>" target="_blank" class="btn btn-info btn-sm">
                            <span class="icon-text">View page</span>
                            <svg class="bi ml-1" width="20" height="20" fill="currentColor">
                                <use xlink:href="/icons/bootstrap-icons.svg#eye-fill"></use>
                            </svg>
                        </a>
                    </div>
                </div>

                <?php
                $articles = ($page['wiki']) ? get_articles($page['id']) : get_labs();
                while ($article = $articles->fetch()) {
                    ?>
                    <div class="row py-1">
                        <div class="col">
                            <svg class="bi mr-2" width="20" height="20" fill="currentColor">
                                <use xlink:href="/icons/bootstrap-icons.svg#file-earmark-text"></use>
                            </svg>
                            <span class="icon-text"><?= $article['meta_title'] ?></span>
                        </div>
                        <div class="col">
                            <a href="/admin/manage-<?= ($page['wiki']) ? 'article/'.$article['name'] : 'lab/'.$article['name'] ?>" class="btn btn-primary btn-sm">
                                <span class="icon-text">Manage</span>
                                <svg class="bi ml-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="/icons/bootstrap-icons.svg#pencil-square"></use>
                                </svg>
                            </a>
                            <a href="/<?= $page_url.'/'.$article['name'] ?>" target="_blank" class="btn btn-info btn-sm">
                                <span class="icon-text">View article</span>
                                <svg class="bi ml-1" width="20" height="20" fill="currentColor">
                                    <use xlink:href="/icons/bootstrap-icons.svg#eye-fill"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php } ?>
                <a href="/admin/create-<?= ($page['wiki']) ? 'article/'.$page['name'] : 'lab' ?>" class="btn btn-sm btn-outline-success my-2">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#plus"></use>
                    </svg>
                    <span class="icon-text">Add <?= ($page['wiki']) ? 'article' : 'lab' ?></span>
                </a>
                <hr>
            <?php } ?>

            <a href="/admin/create-page" class="btn btn-success">
                <span class="icon-text">Add page</span>
                <svg class="bi ml-1" width="24" height="24" fill="currentColor">
                    <use xlink:href="/icons/bootstrap-icons.svg#file-earmark"></use>
                </svg>
            </a>
        </div>
    </div>

</main>