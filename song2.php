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
                    $chordAm7 = '<span class="chord">Am7</span>';
                    $chordF = '<span class="chord">F</span>';
                    $chordE7 = '<span class="chord">E7</span>';


                    echo "<h2 class='text-primary'>Do You Want To Build A Snowman?</h2>";
                    echo "<p class='lead '>Stellar Kart</p><br/>";

                    echo '<p class="song show-chords">Do you want to build a ' . $chordC . 'snowman?</p>';
                    echo '<p class="song show-chords">Come on, let\'s go and ' . $chordG . 'play!</p>';
                    echo '<p class="song show-chords">I never see you ' . $chordAm7 . 'anymore</p>';
                    echo '<p class="song show-chords">Come ' . $chordF . 'out the door</p>';
                    echo '<p class="song show-chords">It\'s like you\'ve gone ' . $chordG . 'away</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">We used to be best ' . $chordAm7 . 'buddies</p' . $chordG . '>';
                    echo '<p class="song show-chords">And ' . $chordC . 'now we\'re not</p>';
                    echo '<p class="song show-chords">I ' . $chordAm7 . 'wish you would ' . $chordE7 . 'tell me ' . $chordF . 'why</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">Do you want to build a ' . $chordC . 'snowman?</p>';
                    echo '<p class="song show-chords">It doesn\'t have to be a ' . $chordF . 'snowman</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">Do you want to build a ' . $chordC . 'snowman?</p>';
                    echo '<p class="song show-chords">Or ride our bike around the ' . $chordG . 'halls?</p>';
                    echo '<p class="song show-chords">I think some company is ' . $chordAm7 . 'overdue</p>';
                    echo '<p class="song show-chords">I\'ve started ' . $chordF . 'talking to the pictures on the ' . $chordG . 'walls!</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">It gets a little ' . $chordAm7 . 'lonely</p>';
                    echo '<p class="song show-chords">All these empty ' . $chordC . 'rooms</p>';
                    echo '<p class="song show-chords">Just ' . $chordAm7 . 'watching the ' . $chordE7 . 'hours tick ' . $chordF . 'by...</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">Please, I know you\'re' . $chordC . ' in there</p>';
                    echo '<p class="song show-chords">People are asking where you\'ve ' . $chordG . 'been</p>';
                    echo '<p class="song show-chords">They say, "have courage" and I\'m trying ' . $chordAm7 . 'to</p>';
                    echo '<p class="song show-chords">I\'m right out here for ' . $chordF . 'you</p>';
                    echo '<p class="song show-chords">Just let me ' . $chordG . 'in</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">We only have ' . $chordAm7 . 'each other</p>';
                    echo '<p class="song show-chords">It\'s just ' . $chordC . 'you and me</p>';
                    echo '<p class="song show-chords">' . $chordAm7 . 'What are we ' . $chordE7 . 'gonna ' . $chordF . 'do?</p>';
                    echo '<p class="song show-chords">Do you want to build a ' . $chordC . 'snowman?</p>';
                    echo '<p class="song show-chords">Do you want to build a ' . $chordC . 'snowman?</p>';

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