<html>
    <head>
        <title>Žaidimo statistika</title>
        <link rel="stylesheet" href="CSS/Rez_style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <style>
            body{

            }
            </style>
    </head>
    <body>


    <?php
        echo "<div class = 'info'>";
        echo '<h1>Dvitaškių statistika:</h1>';

        if (!file_exists("Dvitaskiai/Dvitaskiai.txt")) { // patikrina, ar egzistuoja failas
            exit ("No messages!");
        } else { // jei failas yra, jis yra skaitomas, t.y. atidaromas (fopen) ir tekstas is failo nuskaitomas ir perkeliamas i masyva, ir uzdaromas (fclose) "file"
            $fp = fopen ("Dvitaskiai/Dvitaskiai.txt", "r+");
            $n = file("Dvitaskiai/Dvitaskiai.txt");
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

        if (!file_exists("Tritaskiai/Tritaskiai.txt")) { // patikrina, ar egzistuoja failas
            exit ("No messages!");
        } else { // jei failas yra, jis yra skaitomas, t.y. atidaromas (fopen) ir tekstas is failo nuskaitomas ir perkeliamas i masyva, ir uzdaromas (fclose) "file"
            $fp = fopen ("Tritaskiai/Tritaskiai.txt", "r+");
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
