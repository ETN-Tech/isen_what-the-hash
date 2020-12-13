<? if (isset($hash)) { ?>
    <div class="alert alert-primary mb-4">
        <b>Result :</b> <?= $algo_name .'('. $text .') = '. $hash ?>
    </div>
<? } ;?>

<form action="" method="post">
    <div class="form-group">
        <label for="algo" class="d-block">Hash algorithm</label>
        <select class="custom-select" id="algo" name="algo">
            <? foreach ($supported_algo as $algo) { ?>
                <option value="<?= $algo ?>"><?= strtoupper($algo) ?></option>
            <? } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="text" class="d-block">Text</label>
        <input type="text" class="form-control" id="text" name="text">
    </div>
    <input class="btn btn-primary" type="submit" name="form-hash-functions" value="Hash it">
</form>
