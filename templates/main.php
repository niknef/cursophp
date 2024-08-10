<main>
    
    <section>
        <h2>La próxima pelicula de Marvel</h2>
        <img src="<?= $poster_url; ?>" width="300" alt="Poster de <?= $title ?>" style="border-radius:16px">
    </section>

    <hgroup>
        <h2><?= $title; ?></h2>
        <h3>Estreno: <?= $until_message ?></h3>
        <p>Fecha de estreno: <?= $release_date; ?></p>

        <p>La siguiente es: <?= $following_production; ?></p>
    </hgroup>
</main>
