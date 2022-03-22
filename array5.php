<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h2>Multidimensional Array</h2>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>Tahun</th>
                <th>Rating</th>
            </tr>
            <?php
                $movie = array(
                                array("Avengers: Infinity War", 2018, 8.7),
                                array("The Avengers", 2012, 8.1),
                                array("Guardians of the Galaxy", 2014, 8.1),
                                array("Iron Man", 2008, 7.9)
                                );
                echo "<tr>";
                    for($i=0; $i<3; $i++){
                        echo "<td>" . $movie[0][$i] . "</td>";
                    }
                echo "</tr>";
                echo "<tr>";
                    for($i=0; $i<3; $i++){
                        echo "<td>" . $movie[1][$i] . "</td>";
                    }
                echo "</tr>";
                echo "<tr>";
                    for($i=0; $i<3; $i++){
                        echo "<td>" . $movie[2][$i] . "</td>";
                    }
                echo "</tr>";
                echo "<tr>";
                    for($i=0; $i<3; $i++){
                        echo "<td>" . $movie[3][$i] . "</td>";
                    }
                echo "</tr>";
            ?>
        </table>
    </body>
</html>