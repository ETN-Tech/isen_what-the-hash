<main class="bd-content container">
    <?php  if(isset($notif)){ echo $notif; } ?>

    <form action="" method="post">
        <div class="row">
            <div class="col">
                <h1 class="m-0 text-black-50">Edit article - <?= $article['meta_title'] ?></h1>
            </div>
            <div class="col text-right">
                <a href="/admin" class="btn btn-outline-secondary">Back to dashboard</a>
                <a href="/wiki/<?= $page['name'].'/'.$article['name'] ?>" target="_blank" class="btn btn-info">
                    <span class="icon-text">View article</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#eye-fill"></use>
                    </svg>
                </a>
                <button name="form-article-update" type="submit" class="btn btn-success" id="btn-save" value="Save">
                    <span class="icon-text">Save</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#file-earmark-arrow-up"></use>
                    </svg>
                </button>
                <button name="form-article-delete" type="submit" class="btn btn-danger" id="btn-save" value="Save">
                    <span class="icon-text">Delete</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#trash"></use>
                    </svg>
                </button>
            </div>
        </div>
        <hr class="mb-5">

        <div class="row mb-5">
            <div class="col">
                <h3 class="mt-2 mb-0">Article details</h3>
                <hr class="mb-3">

                <div class="row">
                    <div class="col-4 form-group">
                        <label for="title">Article title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="eg. Welcome to Crypto Thing" value="<?= $article['title'] ?>">
                    </div>
                    <div class="col-4 form-group">
                        <label for="meta-title">Tab title (short)</label>
                        <input type="text" class="form-control" id="meta-title" name="meta-title" placeholder="eg. Crypto Thing" value="<?= $article['meta_title'] ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3 class="mt-2 mb-0">Abstract abstract preview</h3>
            </div>
            <div class="col text-right">
                <button type="button" class="btn btn-primary" id="btn-edit-abstract">
                    <span class="icon-text">Edit</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#pencil-square"></use>
                    </svg>
                </button>
            </div>
        </div>
        <hr class="mb-4">

        <div id="abstract-preview" class="mb-5 px-4 py-2">
            <?= htmlspecialchars_decode($article['abstract_html']) ?>
        </div>

        <div class="row">
            <div class="col">
                <h3 class="mt-2 mb-0">Article body preview</h3>
            </div>
            <div class="col text-right">
                <button type="button" class="btn btn-primary" id="btn-edit-content">
                    <span class="icon-text">Edit</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#pencil-square"></use>
                    </svg>
                </button>
            </div>
        </div>
        <hr class="mb-4">

        <div id="content-preview" class="py-2 px-4">
            <?= htmlspecialchars_decode($article['content_html']) ?>
        </div>

        <textarea name="content-html" id="content-html" class="d-none"><?= htmlspecialchars_decode($article['content_html']) ?></textarea>
        <textarea name="content-md" id="content-md" class="d-none"><?= $article['content_md'] ?></textarea>
        <textarea name="abstract-html" id="abstract-html" class="d-none"><?= htmlspecialchars_decode($article['abstract_html']) ?></textarea>
        <textarea name="abstract-md" id="abstract-md" class="d-none"><?= $article['abstract_md'] ?></textarea>
    </form>
</main>

<script src="https://unpkg.com/stackedit-js@1.0.7/docs/lib/stackedit.min.js"></script>
<script src="/js/content-edit.js"></script>
<script src="/js/abstract-edit.js"></script>
