<!doctype html>
<html>
    <head>
        <title>Sportas</title>
            <link rel="stylesheet" href="tables.css">
    </head>
    <body>
        <h1>Žaidėjai </h1>

       <?php
echo "<div class=''>";
            echo '<br><br>';
            $mysqli = mysqli_connect("localhost", "root", "", "krepsinis");
                if(mysqli_connect_errno()){
                   printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }else{
                $res = mysqli_query($mysqli,"SELECT * FROM persons");
                    echo "<table border='3' align='center' width='10%'>
                    <tr>
                    <th>Vardas-Pavardė</th>
                    <th>Nuotraukos</th>
                    </tr>";

                while($row = mysqli_fetch_array($res))
                {
                   echo "<tr>";
                   echo "<td>";
                   $name = $row['FirstName_LastName'];
                   echo "<a href =\"$name.php\">".$name."</a>"."</td>";
                   $image = $row['images'];
                   echo "<td>";
                   echo "<img src =".$image.">"."</td>";
                   echo "</tr>";
                }
                echo "</table>";
            }
            mysqli_free_result($res);
            mysqli_close($mysqli);

            echo '<br><br>';
          echo '<a href="index.php">Atgal į varžybų sąraša</a>';
            echo '<br><br>';
            echo "</div>";
                  ?>
    </body>
    </html>
