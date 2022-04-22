<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Melomaniac Activity</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">ILoveSongs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="song1.php">Song 1</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="song2.php">Song 2</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="song3.php">Song 3</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="song4.php">Song 4</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="song5.php">Song 5</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark bg-gradient text-white">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">Welcome to ILoveSongs</h1>
            <p class="lead">Never forget your favorite song lyrics and guitar chords.</p>

        </div>
    </header>
    <!-- About section-->
    <section id="songs">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-12 text-center">

                    <?php

                    $chordA = '<span class="chord">A</span>';
                    $chordFsharpm = '<span class="chord">F#m</span>';
                    $chordDM7 = '<span class="chord">DM7</span>';
                    $chordA9 = '<span class="chord">A9</span>';
                    $chordF = '<span class="chord">F</span>';
                    $chordE = '<span class="chord">E</span>';
                    $chordD9 = '<span class="chord">D9</span>';
                    $chordDm = '<span class="chord">Dm</span>';

                    echo "<h2 class='text-primary'>Ikaw Lamang</h2>";
                    echo "<p class='lead '>Silent Sanctuary</p><br/>";

                    echo '<p class="song show-chords">' . $chordA . 'Di ko maintindihan</p>';
                    echo '<p class="song show-chords">An' . $chordFsharpm . 'g nilalaman ng puso</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Tuwing magkahawak ang ' . $chordFsharpm . 'ating kamay</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Pinapanalangin lagi ' . $chordFsharpm . 'tayong magkasama</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Hinihiling bawat oras ' . $chordFsharpm . 'kapiling ka</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordDM7 . 'Sa lahat ' . $chordA9 . 'ng aking ' . $chordFsharpm . 'ginagawa</p>';
                    echo '<p class="song show-chords">' . $chordDM7 . 'Ikaw lama' . $chordA9 . 'ng ang nasa' . $chordFsharpm . ' isip ko sinta</p>';
                    echo '<p class="song show-chords">' . $chordF . 'Sana\'y di na tay' . $chordE . 'o magkahiwalay</p>';
                    echo '<p class="song show-chords">' . $chordF . 'Kahit kaila' . $chordE . 'n pa man</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordA . 'Ikaw lamang ang ak' . $chordFsharpm . 'ing minamahal</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Ikaw lamang ang tang' . $chordFsharpm . 'i kong inaasam</p>';
                    echo '<p class="song show-chords">Makap' . $chordD9 . 'iling ka ' . $chordDm . 'habang buhay</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Ikaw lamang ' . $chordFsharpm . 'sinta</p>';
                    echo '<p class="song show-chords">' . $chordD9 . 'Wala na ko' . $chordDm . 'ng hihingin pa</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Wala na' . $chordD9 . '</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordA . 'Ayoko ng maulit pa</p>';
                    echo '<p class="song show-chords">An' . $chordFsharpm . 'g nakaraang ayokong maalala</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Bawat oras na wala ka</p>';
                    echo '<p class="song show-chords">Par' . $chordFsharpm . 'ang mabigat na parusa</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Huwag mong kakalimutan ' . $chordFsharpm . 'na kahit nag-iba</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Hindi ako tumigil magm' . $chordFsharpm . 'ahal sayo sinta</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordDM7 . 'Sa lahat ' . $chordA9 . 'ng aking gin' . $chordFsharpm . 'agawa</p>';
                    echo '<p class="song show-chords">' . $chordDM7 . 'Ikaw lama' . $chordA9 . 'ng ang n' . $chordFsharpm . 'asa isip ko sinta</p>';
                    echo '<p class="song show-chords">' . $chordF . 'Sana\'y di na tay' . $chordE . 'o magkahiwalay</p>';
                    echo '<p class="song show-chords">' . $chordF . 'Kahit kaila' . $chordE . 'n pa man</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordA . 'Ikaw lamang ang akin' . $chordFsharpm . 'g minamahal</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Ikaw lamang ang tangi ' . $chordFsharpm . 'kong inaasam</p>';
                    echo '<p class="song show-chords">Makap' . $chordD9 . 'iling ka' . $chordDm . ' habang buhay</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Ikaw lamang ' . $chordFsharpm . 'sinta</p>';
                    echo '<p class="song show-chords">' . $chordD9 . 'Wala na k' . $chordDm . 'ong hihingin pa</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Wala na' . $chordD9 . '</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordA . 'Ikaw lamang ang akin' . $chordFsharpm . 'g minamahal</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Ikaw lamang ang tangi ' . $chordFsharpm . 'kong inaasam</p>';
                    echo '<p class="song show-chords">Makap' . $chordD9 . 'iling ka' . $chordDm . ' habang buhay</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Ikaw lamang ' . $chordFsharpm . 'sinta</p>';
                    echo '<p class="song show-chords">' . $chordD9 . 'Wala na k' . $chordDm . 'ong hihingin pa</p>';
                    echo '<p class="song show-chords">' . $chordA . 'Wala na' . $chordD9 . '</p>';


                    ?>


                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 bg-danger">
        <div class="container px-4">
            <p class="m-0 text-center text-white">Copyright &copy; 2022. Neil Andrei Monroyo</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>