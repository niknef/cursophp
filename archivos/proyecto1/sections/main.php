<main>
    
    <section>
        <h2>La próxima pelicula de Marvel</h2>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>" style="border-radius:16px">
    </section>

    <hgroup>
        <h2><?= $data["title"]; ?></h2>
        <h3>Estreno: <?= $daysMessage ?></h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>

        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>
