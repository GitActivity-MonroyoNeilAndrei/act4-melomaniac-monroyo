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
                    $chordC = '<span class="chord">C</span>';
                    $chordG = '<span class="chord">G</span>';
                    $chordEm = '<span class="chord">Em</span>';
                    $chordD = '<span class="chord">D</span>';

                    echo "<h2 class='text-primary'>Sana</h2>";
                    echo "<p class='lead '>I Belong to the Zoo</p><br/  >";

                    echo '<p class="song show-chords">' . $chordC . 'Umuwi lang tila bang lahat ' . $chordG . 'nagbago na</p>';
                    echo '<p class="song show-chords">' . $chordEm . 'Nawalan na ng sigla ang \'yong ' . $chordD . 'mga mata</p>';
                    echo '<p class="song show-chords">Ngayon ko ' . $chordC . 'lang naramdaman ang la' . $chordG . 'mig ng gabi</p>';
                    echo '<p class="song show-chords">Kahit na ' . $chordD . 'magdamag na tayong magkatab' . $chordG . 'i</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">B' . $chordEm . 'akit ka ' . $chordD . 'na' . $chordG . 'g-iba?</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">M' . $chordEm . 'eron na ' . $chordD . 'ban' . $chordG . 'g iba?</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">Para ' . $chordEm . 'di na umasang ' . $chordG . 'may tayo pa sa huli</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Sana sinabi mo</p>';
                    echo '<p class="song show-chords">' . $chordD . 'Hahayaan naman kitang sumaya\'t umalis</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">Para ' . $chordEm . 'di na umasang ' . $chordG . 'may tayo pa sa huli</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Hahayaan naman kitang umali' . $chordC . 's' . $chordG . '</p>';
                    echo '<p class="song show-chords">' . $chordEm . 'Umalis' . $chordD . '</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">Bi' . $chordC . 'nibilang ang hakbang, hanggang wa' . $chordG . 'la ka na</p>';
                    echo '<p class="song show-chords">Nagbaba' . $chordEm . 'kasakaling lilingon ka p' . $chordD . 'a</p>';
                    echo '<p class="song show-chords">Hindi na ' . $chordC . 'ba mababalik ang mg' . $chordG . 'a sandali</p>';
                    echo '<p class="song show-chords">Mga pana' . $chordD . 'hong may lalim pa ang \'yong ngit' . $chordG . 'i</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordD . 'B' . $chordEm . 'akit ka na' . $chordG . 'g-iba?</p>';
                    echo '<p class="song show-chords">' . $chordD . 'M' . $chordEm . 'eron na ban' . $chordG . 'g iba?</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">Para ' . $chordEm . 'di na umasang ' . $chordG . 'may tayo pa sa huli</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">' . $chordD . 'Hahayaan naman kitang sumaya\'t umalis</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Sana sinabi mo</p>';
                    echo '<p class="song show-chords">Para ' . $chordEm . 'di na umasang ' . $chordG . 'may tayo pa sa huli</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">' . $chordD . 'Hahayaan naman kita</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">Para ' . $chordEm . 'ang mga ayaw mo' . $chordG . '\'y aking iibahin</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Diba ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">' . $chordD . 'Basta\'t tayong dal\'wa\'y sasaya ang mundong mapait</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Diba ' . $chordG . 'sinabi ko</p>';
                    echo '<p class="song show-chords">Gag' . $chordEm . 'awin kong lahat ' . $chordG . 'upang tayo parin sa huli</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Biglang ' . $chordG . 'nalaman ko</p>';
                    echo '<p class="song show-chords">' . $chordC . 'May hinihintay ka lang palang bumalik</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">' . $chordEm . 'Dahil di ko maisip ano bang nagawa kong mali</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">' . $chordD . 'Para di na umibig ang puso kong muli</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">' . $chordEm . 'Para di na umasang ' . $chordG . 'may tayo pa sa huli</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">' . $chordD . 'Hahayaan naman kita</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo</p>';
                    echo '<p class="song show-chords">' . $chordEm . 'Para di na umasang ' . $chordG . 'may tayo pa sa huli</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Sana ' . $chordG . 'sinabi mo' . $chordC . '</p>';

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