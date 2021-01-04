<div class="row mb-4">
    <div class="col">
        <h2>PHP Sandbox</h2>
    </div>
    <div class="col text-right">
        <a href="/lab" class="btn btn-outline-secondary">Go back to lab</a>
    </div>
</div>

<form action="" method="post">
    <div class="form-group">
        <label for="algo" class="d-block">Hash algorithm</label>
        <select class="custom-select" id="algo" name="algo">
            <?php foreach ($supported_algo as $algo) { ?>
                <option value="<?= $algo ?>"><?= strtoupper($algo) ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="text" class="d-block">Text</label>
        <input type="text" class="form-control" id="text" name="text">
    </div>
    <input class="btn btn-primary" type="submit" name="form-hash-functions" value="Execute">
</form>

<div class="alert alert-secondary mt-4">
    <b>Output :</b>
    <pre><?= $output ?></pre>
</div>
