<main class="bd-content container">
    <?php  if(isset($notif)){ echo $notif; } ?>

    <form action="" method="post" class="form" enctype="multipart/form-data"q>
        <div class="row">
            <div class="col">
                <h1 class="m-0 text-black-50">Lab creation</h1>
            </div>
            <div class="col text-right">
                <a href="/admin" class="btn btn-outline-secondary">Back to dashboard</a>
                <button name="form-lab-create" type="submit" class="btn btn-success" id="btn-save" value="Save">
                    <span class="icon-text">Save</span>
                    <svg class="bi ml-1 mb-1" width="20" height="20" fill="currentColor">
                        <use xlink:href="/icons/bootstrap-icons.svg#file-earmark-arrow-up"></use>
                    </svg>
                </button>
            </div>
        </div>
        <hr class="mb-5">

        <h3 class="mt-2 mb-0">Lab details</h3>
        <hr class="mb-3">

        <div class="row mb-5">
            <div class="col form-group">
                <label for="title">Lab title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="eg. Welcome to Crypto Thing">
            </div>
            <div class="col form-group">
                <label for="name">Lab url</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="eg. crypto-thing">
            </div>
            <div class="col form-group">
                <label for="meta-title">Tab title (short)</label>
                <input type="text" class="form-control" id="meta-title" name="meta-title" placeholder="eg. Crypto Thing">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3 class="mt-2 mb-0">Lab abstract preview</h3>
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
            <i>Open the editor to edit lab abstract...</i>
        </div>

        <h3 class="mt-2 mb-0">Lab script</h3>
        <hr class="mb-3">

        <div class="row">
            <div class="col form-group">
                <label for="script-instruction">Input instructions</label>
                <input type="text" class="form-control" id="script-instruction" name="script-instruction" placeholder="eg. Enter a word to hash.">
            </div>
            <div class="col form-group">
                <label for="script-file" class="form-label">Python script</label>
                <input class="form-control" type="file" id="script-file" name="script-file" accept=".py">
            </div>
        </div>

        <textarea name="abstract-html" id="abstract-html" class="d-none"></textarea>
        <textarea name="abstract-md" id="abstract-md" class="d-none">*Start typing...*</textarea>
    </form>
</main>

<script src="https://unpkg.com/stackedit-js@1.0.7/docs/lib/stackedit.min.js"></script>
<script src="/js/abstract-edit.js"></script>
