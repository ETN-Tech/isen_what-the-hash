<main class="bd-content container">
    <?php  if(isset($notif)){ echo $notif; } ?>

    <form action="" method="post" class="form" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <h1 class="m-0 text-black-50">Edit article - <?= $lab['meta_title'] ?></h1>
            </div>
            <div class="col text-right">
                <a href="/admin" class="btn btn-outline-secondary">Back to dashboard</a>
                <a href="/lab/<?= $lab['name'] ?>" target="_blank" class="btn btn-info">
                    <span class="icon-text">View lab</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#eye-fill"></use>
                    </svg>
                </a>
                <button name="form-lab-update" type="submit" class="btn btn-success" id="btn-save" value="Save">
                    <span class="icon-text">Save</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#file-earmark-arrow-up"></use>
                    </svg>
                </button>
                <button name="form-lab-delete" type="submit" class="btn btn-danger" id="btn-save" value="Save">
                    <span class="icon-text">Delete</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#trash"></use>
                    </svg>
                </button>
            </div>
        </div>
        <hr class="mb-5">

        <h3 class="mt-2 mb-0">Lab details</h3>
        <hr class="mb-3">

        <div class="row mb-5">
            <div class="col-4 form-group">
                <label for="title">Lab title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="eg. Welcome to Crypto Thing" value="<?= $lab['title'] ?>">
            </div>
            <div class="col-4 form-group">
                <label for="meta-title">Tab title (short)</label>
                <input type="text" class="form-control" id="meta-title" name="meta-title" placeholder="eg. Crypto Thing" value="<?= $lab['meta_title'] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3 class="mt-2 mb-0">Lab abstract Preview</h3>
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
            <?= htmlspecialchars_decode($lab['abstract_html']) ?>
        </div>

        <?php if ($lab['python']) { ?>

        <h3 class="mt-2 mb-0">Lab script</h3>
        <hr class="mb-3">

        <div class="row">
            <div class="col form-group">
                <label for="script-instruction">Input instructions</label>
                <input type="text" class="form-control" id="script-instruction" name="script-instruction" placeholder="eg. Enter a word to hash." value="<?= $lab['script_instruction'] ?>">
            </div>
            <div class="col form-group">
                <label for="script-file" class="form-label">Python script</label>
                <input class="form-control" type="file" id="script-file" name="script-file" accept=".py">
            </div>
        </div>

        <?php } ?>

        <textarea name="abstract-html" id="abstract-html" class="d-none"><?= htmlspecialchars_decode($lab['abstract_html']) ?></textarea>
        <textarea name="abstract-md" id="abstract-md" class="d-none"><?= $lab['abstract_md'] ?></textarea>
    </form>
</main>

<script src="https://unpkg.com/stackedit-js@1.0.7/docs/lib/stackedit.min.js"></script>
<script src="/js/abstract-edit.js"></script>