<?php
  session_start();
  $server = "localhost";
  $username = "root";
  $password = "";
  $con = mysqli_connect($server, $username, $password);   //Connecting Mysql;

  // //Connection Checking
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
    <link rel="stylesheet" href="Css/quizResultStyle.css" />

    <!-- preloader css link  -->
    <link rel="stylesheet" href="Css/preloader.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Test - Clever Coder</title>
    <link rel="icon" href="Images/bnr-1.png">
  </head>

  <body>

     <!-- preloader  -->
     <div id="preloader"></div>
    <div class="quiz-container" id="quiz">
      <div class="quiz-header">
        <h2 id="question" name="question"><?php echo "Result" ?></h2>

        <?php
          global $results;  //Because of scope;
          $results = 0;

          if(isset($_POST["submit"])){   //if we click on submit;
              if(!empty($_POST["quizcheck"])){      //If we select atleast one option of any question;
                  $count = count($_POST["quizcheck"]);    //Count is attending number of question;
                  
                  ?>                  
                  <label id="a_text"><?php echo "Out of 5, You Have Select ".$count." Questions."; ?></label>
                  <?php

                  
                  $i = 1;

                  $selected = $_POST['quizcheck'];

                  //Mechanism For Counting Correct Answer;
                  $rightAnswers = "select * from question";
                  $applyingQuery = mysqli_query($con, $rightAnswers);
                  

                  //making try catch;
                  set_error_handler(function($errno, $errstr, $errfile, $errline) {
                    // error was suppressed with the @-operator
                    if (0 === error_reporting()) {
                        return false;
                    }
                    
                    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
                  });
                
                  try {
                    while($rows = mysqli_fetch_array($applyingQuery)){    
                      $checked = $rows["Right_Answer_Id"] == $selected[$i];   //Right_Answer_Id means all of the right answer number(As array);  and $selected[$i] means the our answered i'th item; [if they are same then we incress the number of correct answer or result];
                      //if $checked is true, that means it is matched;
                      if($checked){
                            $results++;   //This is result.
                      }
                      else{

                      }

                      $i++;
                    }
                  } catch (ErrorException $e) {
                      try {
                        while($rows = mysqli_fetch_array($applyingQuery)){    
                          $checked = $rows["Right_Answer_Id"] == $selected[$i+1];   //if we unselect first then it will be check from second;
                        
                          if($checked){
                                $results++;   //This is result.
                          }
                          else{
      
                          }
      
                          $i++;
                        }
                      } catch (ErrorException $e) {
                        try {
                          while($rows = mysqli_fetch_array($applyingQuery)){    
                            $checked = $rows["Right_Answer_Id"] == $selected[$i+2];
                          
                            if($checked){
                                  $results++;   //This is result.
                            }
                            else{
        
                            }
        
                            $i++;
                          }
                        } catch (ErrorException $e) {
                          try {
                            while($rows = mysqli_fetch_array($applyingQuery)){    
                              $checked = $rows["Right_Answer_Id"] == $selected[$i+3];
                            
                              if($checked){
                                    $results++;   //This is result.
                              }
                              else{
          
                              }
          
                              $i++;
                            }
                          } catch (ErrorException $e) {
                            try {
                              while($rows = mysqli_fetch_array($applyingQuery)){    
                                $checked = $rows["Right_Answer_Id"] == $selected[$i+4];
                              
                                if($checked){
                                      $results++;   //This is result.
                                }
                                else{
            
                                }
            
                                $i++;
                              }
                            } catch (ErrorException $e) {
                                // ...
                            }
                          }
                        }
                      }
                    }             


                  

                  //Printing Results;
                  if($results>=4){
                    ?>
                    <label id="a_text"><?php echo "Congratulation! You Scored $results Out Of 5 Question." ?></label>
                    <?php
                  }
                  elseif($results<4 && $results>0){
                    ?>
                    <label id="a_text"><?php echo "You Scored $results Out Of 5 Question." ?></label>
                    <?php
                  }
                  elseif($results==0){
                    ?>
                    <label id="a_text"><?php echo "Better Luck For Next Time! You Scored $results Out Of 5 Question." ?></label>
                    <?php
                  }
                  ?>  
                  </div>

                  <?php
                    // AfterLogin.php 
                  ?>


                  <form action="WhereWeGoAfterSubmitAnswerIsAdminOrGenerel.php" method="post">
                    <button type="submit"  name="submit" value = "submit" id="submit">Go Back To Home</button>
                  </form>


                  <?php
                  
                  //user data entry into database;
                  $name = $_SESSION["nameOfUser"];
                  $entryIntoUserDataToDatabase = "insert into user(User_Name,Total_Question,Answer_Correct) values ('$name','5','$results')";
                  mysqli_query($con,$entryIntoUserDataToDatabase);    //Applying query(Inserting).
          
                  // if(mysqli_query($con,$entryIntoUserDataToDatabase)){   
                  //   // echo "Success!"; 
                  // } 
              }
              else{
                ?>                
                <label id="a_text"><?php echo "Out of 5, you have select 0 questions.<br>Please select at least one of those question."; ?></label>
                
              </div>
                <form action ="InsideIndex.php" method="post">
                  <button type="submit"  name="submit" value = "submit" id="submit">Fill Again</button>
                </form>
                <?php
              }      
          }
        ?>
 
      
    </div>

        <!-- preloader  -->
        <script src="JS/preloader.js"></script>  
  </body>
</html>