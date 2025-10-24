<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "HelloWorld";

        $name = "Kiki";
        echo $name;

        // MATH OPERATIONS
        $a = 15;
        $b = 5;
        echo "a+b =" . ($a + $b) . "<br>";
        echo "a-b =" . ($a - $b) . "<br>";
        echo "a*b =" . ($a * $b) . "<br>";
        echo "a/b =" . ($a / $b) . "<br>";
        echo "a%b =" . ($a % $b) . "<br>";

        $score = 88;
        if($score >= 80){
            echo "kamu lolos";
        }
        else if($score > 60){
            echo "biasa aja";
        }
        else if($score > 40){
            echo "remedia!!!!!!!!!";
        }
        else{
            echo "coba lagi tahun depan >:)";
        }

        // LOOPING
        for($i = 0; i < 10; i++){
            echo $i . "<br>";
        }

        $counter = 0;
        while($counter < 10){
            $counter++;
        }

        echo "<br>";

        echo "<ul>";
        $fruits = ["apple", "banana", "pear", "orange"];
        foreach($fruits as $f){
            echo "<li></li>";
        }
        echo "</ul>"
        
    ?>
</body>
</html>