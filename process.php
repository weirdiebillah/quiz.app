<?php
 session_start();
    if (!isset($_SESSION['score'])) {
    	$_SESSION['score'] = 0;
    }
     $submit = $_POST['submit'];
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $total = 5;
        $score = 0;
        if ($q1 == "a") {
        	$score++;
        }
        if ($q2 == "b") {
        	$score++;
        }
        if ($q3 == "c") {
        	$score++;
        }
        if ($q4 == "d") {
        	$score++;
        }
        if ($q5 == "a") {
        	$score++;
        }
        $_SESSION['score'] = $score;
        header("Location: index.php");
        exit();
     	

    
?>