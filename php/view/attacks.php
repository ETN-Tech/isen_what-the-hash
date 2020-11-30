<main class="bd-content container">
    <div class="row">
        <div class="col-8">
            <div class="up-content">
                <h1 class="up-title mb-4 pb-3">Attacks</h1>
                <p class="up-lead">What are the attacks against cryptographic hash functions ?</p>
                <p class="up-text text-muted">Many attacks exist to try to break cryptographic hash functions. Some of them can successfully break a hash function, others are currently technically impossible to accomplish.</p>
                <p class="up-text text-muted">A hash function is considered to be broken by an attack if this one requires less tries than a brute force attack.</p>
            </div>
        </div>
    </div>

    <? while ($attack = $attacks->fetch()) { ?>
        <article class="py-1 my-2">
            <h2><?= $attack['name'] ?></h2>
            <p><?= $attack['abstract'] ?></p>
            <p><?= $attack['description'] ?></p>
        </article>
    <? } ?>
</main>
