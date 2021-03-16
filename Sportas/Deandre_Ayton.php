<html>
    <head>
        <title>Žaidimo statistika</title>
        <link rel="stylesheet" href="style1.css">

        <style>
            body{

            }
            </style>
    </head>
    <body>


    <?php
        echo "<div class = 'Dvitaskiai'>";
        echo '<h1>Dvitaškių statistika:</h1>';

        if (!file_exists("Dvitaskiai/Dvitaskiai4.txt")) {
            exit ("No messages!");
        } else {
            $fp = fopen ("Dvitaskiai/Dvitaskiai4.txt", "r+");
            $n = file("Dvitaskiai/Dvitaskiai4.txt");
            fclose($fp);

            $miss = 0;
            $goal = 0;
        for ($i = 0; $i<count($n); $i++) {
            if ($n[$i] == 0) {
            $miss++;
        } else  if ($n[$i] == 2) {
            $goal++;
            }
        }
        $avg = ($goal/$i)*100;

        echo "<p> Žaidėjas metė dvitaškių: ".$i." kartus </p><br>";
        echo "<p> Pataikė: ".$goal." kartų. </p><br>";
        echo "<p> Nepataikė: ".$miss." kartų. </p> <br>";
        echo "<p> Žaidėjo pataikymo procentas: ".$avg." </p><br><br>";
       // exit;
    }
      echo "</div>";
        echo "<div class = 'Tritaskiai'>";
        if (!file_exists("Tritaskiai/Tritaskiai4.txt")) {
            exit ("No messages!");
        } else {
            $fp = fopen ("Tritaskiai/Tritaskiai4.txt", "r+");
            $n = file("Tritaskiai/Tritaskiai.txt");
            fclose($fp);

                $miss = 0;
                $goal = 0;
            for ($i = 0; $i<count($n); $i++) {
                if ($n[$i] == 0) {
                $miss++;
                } else  if ($n[$i] == 3) {
                $goal++;
                    }
            }
            $avg = ($goal/$i)*100;

              echo "<h1>Tritaškių statistika:</h1>";
            echo "<p> Žaidėjas metė tritaškių: ".$i." kartus </p> <br>";
            echo "<p> Pataikė: ".$goal." kartų. </p> <br>";
            echo "<p> Nepataikė: ".$miss." kartų. </p> <br>";
            echo "<p> Žaidėjo pataikymo procentas: ".$avg." </p> <br><br>";

            echo '<a href="index.php">Atgal į varžybų sąraša</a>';
            echo '<br><br>';
            echo "</div>";

                exit;
            }

                ?>

 </body>
</html>
