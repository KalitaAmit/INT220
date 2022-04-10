<!DOCTYPE html>
<html lang = "e" dir = "ltr">
    <head>
    <style>
body {
  background-color: lightgreen;
}
p {
  color: black;
}
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
form{text-align: center;}
</style>

        <meta charset = "utf-8">
        <title></title>
    </head>
    <body>
    <p> <font color=red>Please Take The Mathemics Quiz.</font> </p>
        <?php

        if(!empty($_POST)){
        $ans1 = $_POST["ans1"];
        $ans2 = $_POST["ans2"];
        $ans3 = $_POST["ans3"];
        $ans4 = $_POST["ans4"];
        $ans5 = $_POST["ans5"];
        $correct = 0;
            if($ans1 == 5)
            {
                $correct++;
            }
            else
            {
                echo "<p> Ans1 is incorrect</p>";
            }

            if($ans2 == 0)
            {
                $correct++;
            }
            else
            {
                echo "<p> Ans2 is incorrect </p>";
            }

            if($ans3 == 15)
            {
                $correct++;
            }
            else
            {
                echo "<p> Ans3 is incorrect </p>";
            }

            if($ans4 == 25)
            {
                $correct++;
            }
            else
            {
                echo "<p> Ans4 is incorrect </p>";
            }

            if($ans5 == 7)
            {
                $correct++;
            }
            else
            {
                echo "<p> Ans5 is incorrect </p>";
            }

            echo "<p> You got $correct correct!</P>";
            $grade = ($correct / 5) * 100;

            echo "<p>remark :</p>";
            if($correct == 0){
                echo"<p> Bad Performance </p>";
            }
            else if($correct == 1){
                echo"<p> You are need to work hard </p>";
            }
            else if($correct == 2){
                echo"<p> You are need to work hard </p>";
            }
            else if($correct == 3){
                echo"<p>good</p>";
            }
            else{
                echo"<p>awesome</p>";
         }
        }
        
        ?>

        <form action = "index.php" method = "post">
            <p> What is 2 + 3?</p>
            <input type = "number" name = "ans1">
            <p> What is 3 - 3?</p>
            <input type = "number" name = "ans2">
            <p> What is 5 * 3?</p>
            <input type = "number" name = "ans3">
            <p> What is 22 + 3?</p>
            <input type = "number" name = "ans4">
            <p> What is 21 / 3?</p>
            <input type = "number" name = "ans5">

            <p>CLICK SUBMIT</P>
            <input type="SUBMIT">
            
    </body>
</html>