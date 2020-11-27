<main class="bd-content container">
    <h1>Attacks</h1>
    <p>Lots of research about attacks on cryptographic algorithms are conducted. Here are the attacks researchers and hackers focus on, to try to break hash functions. Hash functions are considered ti be broken by an attack if this one requires less tries than a brute force attack.</p>

    <? while ($attack = $attacks->fetch()) { ?>
        <article class="py-1 my-2">
            <h2><?= $attack['name'] ?></h2>
            <p><?= $attack['abstract'] ?></p>
            <p><?= $attack['description'] ?></p>
        </article>
    <? } ?>
</main>
