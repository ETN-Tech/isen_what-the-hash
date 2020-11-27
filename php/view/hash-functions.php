<main class="bd-content container">
    <h1>Cryptographic algorithm MD5</h1>

    <p>MD5 is a cryptographic algorithm created in . This hash function is not considered anymore secured and should not be used.</p>

    <? while ($hash_function = $hash_functions->fetch()) { ?>
        <article class="py-1 my-2">
            <h2><?= $hash_function['name'] ?></h2>
            <p><?= $hash_function['abstract'] ?></p>
            <p><?= $hash_function['description'] ?></p>
        </article>
    <? } ?>
</main>