<main class="bd-content container">
    <h1>Implications</h1>
    <p>Why is hash function security crucial ?</p>
    <p>Hash functions are used in a very large scope nowadays. Data security, data integrity, authentication, crypto-money...</p>

    <? while ($implication = $implications->fetch()) { ?>
        <article class="py-1 my-2">
            <h2><?= $implication['name'] ?></h2>
            <p><?= $implication['abstract'] ?></p>
            <p><?= $implication['description'] ?></p>
        </article>
    <? } ?>
</main>