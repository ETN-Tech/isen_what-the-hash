<main class="bd-content container">
    <div class="up-content">
        <h1 class="up-title mb-4 pb-2">Implications</h1>
        <p>Why is hash function security crucial ?</p>
        <p>Hash functions are used in a very large scope nowadays. Data security, data integrity, authentication, crypto-money...</p>
    </div>

    <? while ($implication = $implications->fetch()) { ?>
        <article class="py-1 my-2">
            <h2><?= $implication['name'] ?></h2>
            <p><?= $implication['abstract'] ?></p>
            <p><?= $implication['description'] ?></p>
        </article>
    <? } ?>
</main>