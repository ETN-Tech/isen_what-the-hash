<main class="bd-content container">
    <div class="row">
        <div class="col-8">
            <div class="up-content">
                <h1 class="up-title mb-4 pb-3">Cryptographic hash functions</h1>
                <p class="up-lead">What are hash functions ?</p>
                <p class="up-text text-muted">A cryptographic hash function is an algorithm that takes an arbitrary amount of data and produces a fixed-size output of enciphered text called a hash.</p>
            </div>
        </div>
    </div>

    <? while ($hash_function = $hash_functions->fetch()) { ?>
        <article class="py-1 my-2">
            <h2><?= $hash_function['name'] ?></h2>
            <p><?= $hash_function['abstract'] ?></p>
            <p><?= $hash_function['description'] ?></p>
        </article>
    <? } ?>
</main>