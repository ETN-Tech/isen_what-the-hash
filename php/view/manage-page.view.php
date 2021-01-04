<main class="bd-content container">
    <?php  if(isset($notif)){ echo $notif; } ?>

    <form action="" method="post">
        <div class="row">
            <div class="col">
                <h1 class="m-0 text-black-50">Edit page - <?= $page['meta_title'] ?></h1>
            </div>
            <div class="col text-right">
                <a href="/admin" class="btn btn-outline-secondary">Back to dashboard</a>
                <a href="/wiki/<?= $page['name'] ?>" target="_blank" class="btn btn-info">
                    <span class="icon-text">View page</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#eye-fill"></use>
                    </svg>
                </a>
                <button name="form-page-update" 9type="submit" class="btn btn-success" id="btn-save" value="Save">
                    <span class="icon-text">Save</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#file-earmark-arrow-up"></use>
                    </svg>
                </button>
                <button name="form-page-delete" type="submit" class="btn btn-danger" id="btn-save" value="Save">
                    <span class="icon-text">Delete</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#trash"></use>
                    </svg>
                </button>
            </div>
        </div>
        <hr class="mb-5">

        <h3 class="mt-2 mb-0">Page details</h3>
        <hr class="mb-3">

        <div class="row mb-5">
            <div class="col-4 form-group">
                <label for="title">Page title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="eg. Welcome to Crypto Thing" value="<?= $page['title'] ?>">
            </div>
            <div class="col-4 form-group">
                <label for="meta-title">Tab title (short)</label>
                <input type="text" class="form-control" id="meta-title" name="meta-title" placeholder="eg. Crypto Thing" value="<?= $page['meta_title'] ?>">
            </div>
        </div>

        <h3 class="mt-2 mb-0">Page lead</h3>
        <hr class="mb-3">

        <div class="row">
            <div class="col-4 form-group">
                <label for="lead-title">Lead title</label>
                <input type="text" class="form-control" id="lead-title" name="lead-title" placeholder="eg. What is Crypto ?" value="<?= $page['lead_title'] ?>">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-7">
                <label for="lead-text">Lead text</label>
                <textarea name="lead-text" id="lead-text" rows="2" class="form-control" placeholder="eg. Well it's simply crypto."><?= $page['lead_text'] ?></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3 class="mt-2 mb-0">Page body preview</h3>
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
            <?= htmlspecialchars_decode($page['content_html']) ?>
        </div>

        <textarea name="content-html" id="content-html" class="d-none"><?= htmlspecialchars_decode($page['content_html']) ?></textarea>
        <textarea name="content-md" id="content-md" class="d-none"><?= $page['content_md'] ?></textarea>
    </form>
</main>

<script src="https://unpkg.com/stackedit-js@1.0.7/docs/lib/stackedit.min.js"></script>
<script src="/js/content-edit.js"></script>
