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
                    $chordG = '<span class="chord">G</span>';
                    $chordD = '<span class="chord">D</span>';
                    $chordC = '<span class="chord">C</span>';
                    $chordEm = '<span class="chord">Em</span>';
                    $chordG7 = '<span class="chord">G7</span>';

                    echo "<h2 class='text-primary'>Wonderful Tonight</h2>";
                    echo "<p class='lead '>Eric Clapton</p><br/>";

                    echo '<p class="song show-chords">'.$chordG.'It\'s late in the evening; she\'s wondering what clothes to wear'.$chordG.'</p>';
                    echo '<p class="song show-chords">'.$chordC.'She puts on her make-up and br'.$chordC.'ushes her long blonde hair</p>';
                    echo '<p class="song show-chords">And then she asks me, "'.$chordG.'Do I look all righ'.$chordEm.'t?"</p>';
                    echo '<p class="song show-chords">And I say, "Yes, you look wonderful tonight."'.$chordC.'</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">'.$chordG.'We go to a party '.$chordC.'and everyone turns to see</p>';
                    echo '<p class="song show-chords">'.$chordG.'This beautiful lady that\'s walking around with me</p>';
                    echo '<p class="song show-chords">'.$chordC.'And then she asks me'.$chordG.', "Do you feel all righ'.$chordEm.'t?"</p>';
                    echo '<p class="song show-chords">And I say, "'.$chordC.'Yes, I feel wonderful toni'.$chordG.'ght'.$chordG7.'."</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">I feel w'.$chordC.'onderful because I see</p>';
                    echo '<p class="song show-chords">The '.$chordG.'love light in your eyes</p>';
                    echo '<p class="song show-chords">And the '.$chordC.'wonder of it all</p>';
                    echo '<p class="song show-chords">Is that you j'.$chordC.'ust don\'t realize how much I love you</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">'.$chordG.'It\'s time to go home now'.$chordC.' and I\'ve got an aching head</p>';
                    echo '<p class="song show-chords">So I g'.$chordG.'ive her the car keys and '.$chordC.'she helps me to bed</p>';
                    echo '<p class="song show-chords">'.$chordC.'And then I tell her,'.$chordG.' as I turn out the light</p>';
                    echo '<p class="song show-chords">I say, "My d'.$chordC.'arling, you were wonderful tonight'.$chordG.'</p>';
                    echo '<p class="song show-chords">Oh my da'.$chordC.'rling, you were wonderful tonight."</p>';
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