<?php
session_start();
if (!isset($_SESSION['score'])) {

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizApp</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <header>
    <div class="container">
        <h1>QuizApp</h1>
      </div>

  </header>
  <div class="name">
            <h3>Masum Billah Zihadi <br><span>Id:20-43885-2</h3>
        </div>
  <main>
    <div class="container" id="main">
    <div class="result">
         <h3 id ='score'>Your Score is: <?php
            if (isset($_SESSION['score'])) {
            	echo $_SESSION['score'];
            	unset($_SESSION['score']);
            }
            ?></h3>
         </div>
        <div class="questions">
        <h3>Questions</h3>
            <form action="process.php" method="post">
                <ol>
                    <li>
                        <h4>What does PHP stand for?</h4>
                        <div>
                            <input type="radio" name="q1" id="q1a" value="a">
                            <label for="q1a">Personal Home Page</label>
                        </div>
                        <div>
                            <input type="radio" name="q1" id="q1b" value="b">
                            <label for="q1b">Hypertext Preprocessor</label>
                        </div>
                        <div>
                            <input type="radio" name="q1" id="q1c" value="c">
                            <label for="q1c">Preprocessor Home Page</label>
                        </div>
                        <div>
                            <input type="radio" name="q1" id="q1d" value="d">
                            <label for="q1d">None of the above</label>
                        </div>
                    </li>
                    <li>
                        <h4>What is the correct way to end a PHP statement?</h4>
                        <div>
                            <input type="radio" name="q2" id="q2a" value="a">
                            <label for="q2a">New Line</label>
                        </div>
                        <div>
                            <input type="radio" name="q2" id="q2b" value="b">
                            <label for="q2b">Semicolon (;)</label>
                        </div>
                        <div>
                            <input type="radio" name="q2" id="q2c" value="c">
                            <label for="q2c">Both of the above</label>
                        </div>
                        <div>
                            <input type="radio" name="q2" id="q2d" value="d">
                            <label for="q2d">None of the above</label>
                        </div>
                    </li>
                    <li>
                        <h4>Which of the following is not a reserved word in PHP?</h4>
                        <div>
                            <input type="radio" name="q3" id="q3a" value="a">
                            <label for="q3a">interface</label>
                        </div>
                        <div>
                            <input type="radio" name="q3" id="q3b" value="b">
                            <label for="q3b">throws</label>
                        </div>
                        <div>
                            <input type="radio" name="q3" id="q3c" value="c">
                            <label for="q3c">program</label>
                        </div>
                        <div>
                            <input type="radio" name="q3" id="q3d" value="d">
                            <label for="q3d">None of the above</label>
                        </div>
                    </li>
                    <li>
                        <h4>Which of the following is not a valid function in PHP?</h4>
                        <div>
                            <input type="radio" name="q4" id="q4a" value="a">
                            <label for="q4a">is_float()</label>
                        </div>
                        <div>
                            <input type="radio" name="q4" id="q4b" value="b">
                            <label for="q4b">is_double()</label>
                        </div>
                        <div>
                            <input type="radio" name="q4" id="q4c" value="c">
                            <label for="q4c">is_real()</label>
                        </div>
                        <div>
                            <input type="radio" name="q4" id="q4d" value="d">
                            <label for="q4d">is_integer()</label>
                        </div>
                    </li>
                    <li>
                        <h4>Which of the following is not a valid constant in PHP?</h4>
                        <div>
                            <input type="radio" name="q5" id="q5a" value="a">
                            <label for="q5a">__LINE__</label>
                        </div>
                        <div>
                            <input type="radio" name="q5" id="q5b" value="b">
                            <label for="q5b">__FILE__</label>
                        </div>
                        <div>
                            <input type="radio" name="q5" id="q5c" value="c">
                            <label for="q5c">__CLASS__</label>
                        </div>
                        <div>
                            <input type="radio" name="q5" id="q5d" value="d">
                            <label for="q5d">__FUNCTION__</label>
                        </div>
                    </li>
                </ol>
                <br>
                <input type="submit" value="Submit">
            </form>
            
        </div>
    </div>
</main>
<footer>  <div class="container">
&copy; Masum Billah Zihadi 2022
</div></footer>
    <script src="script.js"></script>
</body>
</html>