<?php
    session_start();    //new add
  
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);   //Connecting Mysql;

    ////Connection Checking
    // if($con){
    //     echo "Connection Successful!";
    // }else{
    //     echo "No Connection Build!";
    // }

    //Database select(apply);
    mysqli_select_db($con, "quiztestfirst");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Css/quizQuestionStyle.css" />
    <!-- preloader css link  -->
    <link rel="stylesheet" href="Css/preloader.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Test</title>
    <link rel="icon" href="Images/bnr-1.png">
  </head>
  <body>
    <!-- preloader  -->
    <div id="preloader"></div>

    <div class="quiz-container" id="quiz">
      <div class="quiz-header">
      <form action ="Test.php" method="post">

        <?php
        for($i = 1 ; $i<=5; $i++){
          $questions = "select * from question where Question_Id = $i";
          $queryApplyingForQuestions = mysqli_query($con, $questions);
          while($rows = mysqli_fetch_array($queryApplyingForQuestions)){          

        ?>
        <h2 id="question" name="question"><?php echo $i.". ".$rows["Question"]; ?></h2>
          <?php
            $answers = "select * from answer where Question_Id = $i";
            $queryApplyingForAnswers = mysqli_query($con, $answers);
            while($rows = mysqli_fetch_array($queryApplyingForAnswers)){
          ?>
            <ul>          
              <li>
                <input type="radio" name="quizcheck[<?php echo $rows["Question_Id"]; ?>]" id="a" value="<?php echo $rows["Right_Answer_Id"]; ?>" class="answer">
                <label for="a" id="a_text"><?php echo $rows["Answer"]; ?></label>
              </li>
            </ul>

          <?php
            }  //End of while loop(Answers);
          }  //End of while loop(Questions);
        } //End of for loop;
        ?>

      </div>
      <button type="submit" name="submit" value = "submit" id="submit">Submit</button>
      </form>
    </div>

    
    <!-- preloader  -->
    <script src="JS/preloader.js"></script>  
  </body>
</html>