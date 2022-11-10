<html>

<head>
	<meta charset=UTF-8" />

	<title>Quiz results</title>

</head>

<body>
        <?php

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];


            $totalCorrect = 0;

            if ($answer1 == "A") { $userAnswer1 = "maximal wealth for owners"; }
            if ($answer1 == "B") { $userAnswer1 = "maximal profits"; }
            if ($answer1 == "C") { $userAnswer1 = "high revenue growth"; }
            if ($answer1 == "D") { $userAnswer1 = "all of the above"; $totalCorrect++; }

            if ($answer2 == "A") { $userAnswer2 = "uses a short-term view"; }
            if ($answer2 == "B") { $userAnswer2 = "fails to consider the time value of money"; }
            if ($answer2 == "C") { $userAnswer2 = "takes risk into consideration"; $totalCorrect++; }
            if ($answer2 == "D") { $userAnswer2 = "relies on accounting numbers";}

            if ($answer3 == "A") { $userAnswer3 = "large market share"; }
            if ($answer3 == "B") { $userAnswer3 = "wealth maximisation"; $totalCorrect++; }
            if ($answer3 == "C") { $userAnswer3 = "maximise profits"; }
            if ($answer3 == "D") { $userAnswer3 = "high revenue growth";  }

            if ($answer4 == "A") { $userAnswer4 = "accounting and reporting function"; }
            if ($answer4 == "B") { $userAnswer4 = "raising funds"; }
            if ($answer4 == "C") { $userAnswer4 = "audit management"; }
            if ($answer4 == "D") { $userAnswer4 = "all of the above"; $totalCorrect++; }

            if ($answer5 == "A") { $userAnswer5 = "rules of conduct"; }
            if ($answer5 == "B") { $userAnswer5 = "moral principles"; }
            if ($answer5 == "C") { $userAnswer5 = "codes of behaviour"; }
            if ($answer5 == "D") { $userAnswer5 = "all of the above"; $totalCorrect++; }

            $score = $totalCorrect * 20;

            echo "<h3>Question 1: The range of primary business goals includes:</h3> ";
            echo "You answered: $userAnswer1<br>\n";
            echo "Correct answered: all of the above";

            echo "<h3>Question 2: Maximisation of owners’ wealth:</h3> <br>\n";
            echo "You answered: $userAnswer2<br>\n";
            echo "Correct answered: takes risk into consideration";

            echo "<h3>Question 3 : The chief financial goal of the firm is:</h3> ";
            echo "You answered: $userAnswer3<br>\n";
            echo "Correct answered: wealth maximisation";

            echo "<h3>Question 4: Financial managers undertake the following roles:</h3> ";
            echo "You answered: $userAnswer4<br>\n";
            echo "Correct answered: all of the above";

            echo "<h3>Question 5: Ethics are:</h3> ";
            echo "You answered: $userAnswer5<br>\n";
            echo "Correct answered: all of the above<br>\n<br>\n<br>\n";

            echo "The result: $totalCorrect / 5 correct <br>\n";
            echo "The score: $score%";

        ?>

</body>

</html>
