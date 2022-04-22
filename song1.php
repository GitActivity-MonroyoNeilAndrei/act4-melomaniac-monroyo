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
                    $chordEm = '<span class="chord">Em</span>';
                    $chordC = '<span class="chord">C</span>';
                    $chordD = '<span class="chord">D</span>';
                    $chordAm = '<span class="chord">Am</span>';
                    $chordBm = '<span class="chord">Bm</span>';


                    echo "<h2 class='text-primary'>Line Without A Hook</h2>";
                    echo "<p class='lead '>Ricky Montgomery</p><br/>";

                    echo '<p class="song show-chords">I don\'t really give a damn about the way you ' . $chordG . 'touch me</p>';
                    echo '<p class="song show-chords">When we\'re ' . $chordEm . 'alone</p>';
                    echo '<p class="song show-chords">You can ' . $chordC . 'hold my hand</p>';
                    echo '<p class="song show-chords">If ' . $chordD . 'no one\'s home</p>';
                    echo '<p class="song show-chords">Do you ' . $chordG . 'like it when I\'m ' . $chordEm . 'away?</p>';
                    echo '<p class="song show-chords">If I went and hurt my ' . $chordC . 'body, baby</p>';
                    echo '<p class="song show-chords">Would you love me the ' . $chordD . 'same?</p>';
                    echo '<p class="song show-chords">I can feel all my ' . $chordG . 'bones coming back</p>';
                    echo '<p class="song show-chords">And I\'m ' . $chordEm . 'craving motion</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Mama never really learns how to ' . $chordD . 'live by herself</p>';
                    echo '<p class="song show-chords">It\'s a ' . $chordG . 'curse</p>';
                    echo '<p class="song show-chords">And it\'s ' . $chordEm . 'growing</p>';
                    echo '<p class="song show-chords">You\'re a ' . $chordC . 'pond and I\'m an ' . $chordD . 'ocean</p>';
                    echo '<p class="song show-chords">Oh, ' . $chordG . 'all my ' . $chordEm . 'emotions</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Feel like ' . $chordD . 'explosions when you are ' . $chordG . 'around</p>';
                    echo '<p class="song show-chords">And I\'ve ' . $chordEm . 'found a ' . $chordC . 'way to kill the ' . $chordD . 'sounds, oh</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordG . 'Oh, baby, I am a ' . $chordEm . 'wreck when I\'m ' . $chordC . 'without you</p>';
                    echo '<p class="song show-chords">I ' . $chordD . 'need you here to ' . $chordG . 'stay</p>';
                    echo '<p class="song show-chords">I broke all my ' . $chordEm . 'bones that day I ' . $chordC . 'found you</p>';
                    echo '<p class="song show-chords">' . $chordD . 'Crying at the ' . $chordG . 'lake</p>';
                    echo '<p class="song show-chords">Was it something I ' . $chordEm . 'said to make you ' . $chordC . 'feel like you\'re a ' . $chordD . 'burden?</p>';
                    echo '<p class="song show-chords">Oh, and ' . $chordG . 'if I could take it all ' . $chordEm . 'back</p>';
                    echo '<p class="song show-chords">I swear that ' . $chordC . 'I would ' . $chordD . 'pull you from the tide</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordD . 'Oh, whoa, whoa, whoa</p>';
                    echo '<p class="song show-chords">I said ' . $chordG . 'no, I said ' . $chordEm . 'no</p>';
                    echo '<p class="song show-chords">Listen ' . $chordC . 'close, it\'s a ' . $chordD . 'no</p>';
                    echo '<p class="song show-chords">The ' . $chordG . 'wind is a-pounding ' . $chordEm . 'on my back</p>';
                    echo '<p class="song show-chords">And I ' . $chordC . 'found hope in a ' . $chordD . 'heart attack</p>';
                    echo '<p class="song show-chords">Oh at ' . $chordG . 'last, it is ' . $chordEm . 'past</p>';
                    echo '<p class="song show-chords">Now I\'ve ' . $chordC . 'got it, and you can\'t ' . $chordD . 'have it</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordG . 'Baby, I am a ' . $chordEm . 'wreck when I\'m ' . $chordC . 'without you</p>';
                    echo '<p class="song show-chords">I ' . $chordD . 'need you here to ' . $chordG . 'stay</p>';
                    echo '<p class="song show-chords">I broke all my ' . $chordEm . 'bones that day I ' . $chordC . 'found you</p>';
                    echo '<p class="song show-chords">' . $chordD . 'Crying at the ' . $chordG . 'lake</p>';
                    echo '<p class="song show-chords">Was it something ' . $chordEm . 'I said to make you ' . $chordC . 'feel like you\'re a ' . $chordD . 'burden, oh</p>';
                    echo '<p class="song show-chords">And ' . $chordG . 'if I could take it ' . $chordEm . 'all back</p>';
                    echo '<p class="song show-chords">I swear that ' . $chordC . 'I would ' . $chordD . 'pull you from the tide</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordAm . 'Darling, when I\'m ' . $chordG . 'fast ' . $chordBm . 'asleep</p>';
                    echo '<p class="song show-chords">I\'ve ' . $chordAm . 'seen this person ' . $chordG . 'watching ' . $chordBm . 'me</p>';
                    echo '<p class="song show-chords">Saying, ' . $chordAm . '"Is it worth it? ' . $chordG . 'Is it ' . $chordBm . 'worth it? ' . $chordAm . 'Tell me, is it ' . $chordD . 'worth it?"</p>';
                    echo '<p class="song show-chords">Guess there is ' . $chordG . 'something, and there is ' . $chordEm . 'nothing</p>';
                    echo '<p class="song show-chords">There is ' . $chordC . 'nothing in ' . $chordD . 'between</p>';
                    echo '<p class="song show-chords">And in my ' . $chordG . 'eyes, there is a ' . $chordEm . 'tiny dancer</p>';
                    echo '<p class="song show-chords">' . $chordC . 'Watching over ' . $chordD . 'me, he\'s singing</p>';
                    echo '<p class="song show-chords">"She\'s a, ' . $chordG . 'she\'s a ' . $chordEm . 'lady, and ' . $chordC . 'I am just a ' . $chordD . 'boy"</p>';
                    echo '<p class="song show-chords">He\'s singing, ' . $chordG . '"She\'s a, she\'s a ' . $chordEm . 'lady, and ' . $chordC . 'I am just a ' . $chordD . 'line without a hook"</p>';
                    echo '<br/>';

                    echo '<p class="song show-chords">' . $chordG . 'Baby, I am a ' . $chordEm . 'wreck when I\'m ' . $chordC . 'without you</p>';
                    echo '<p class="song show-chords">I ' . $chordD . 'need you here to ' . $chordG . 'stay</p>';
                    echo '<p class="song show-chords">I broke all my ' . $chordEm . 'bones that day I ' . $chordC . 'found you</p>';
                    echo '<p class="song show-chords">' . $chordD . 'Crying at the ' . $chordG . 'lake</p>';
                    echo '<p class="song show-chords">Was it something I ' . $chordEm . 'said to make you ' . $chordC . 'feel like you\'re a ' . $chordD . 'burden, oh</p>';
                    echo '<p class="song show-chords">And ' . $chordG . 'if I could take it all ' . $chordEm . 'back</p>';
                    echo '<p class="song show-chords">I swear that ' . $chordC . 'I would ' . $chordD . 'pull you from the ' . $chordG . 'tide</p>';

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