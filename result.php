<?php
$page = "Home";
$path = './';
include($path . 'assets/inc/header.php');
include($path . 'assets/inc/nav.php');
?>
    <div id="page-wrap">

        <h1>Result</h1>

        <?php

        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];

        $totalCorrect = 0;

        if ($answer1 == "A") {
            $totalCorrect++;
        }
        if ($answer2 == "C") {
            $totalCorrect++;
        }
        if ($answer3 == "A") {
            $totalCorrect++;
        }
        if ($answer4 == "D") {
            $totalCorrect++;
        }
        if ($answer5 == "C") {
            $totalCorrect++;
        }

        echo "<div id='results'>$totalCorrect / 5 correct</div>";

        ?>

    </div>

<?php
include($path . 'assets/inc/footer.php');
?>
