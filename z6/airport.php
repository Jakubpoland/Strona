<!DOCTYPE html>
<html lang="PL-pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styl6.css">
        <title>Odloty samolotów</title>
    </head>

    <body>
        <?php
        $baza=mysqli_connect("localhost","root","","egzamin")
        ?>
        <section class="baner1">
            <h2>Odloty z lotniska</h2>
        </section>
    
        <section class="baner2">
            <img src="zad6.png" alt="logotyp">
        </section>

        <section class="glowny">
            <h4>tabela odlotów</h4>
            <table>
                <tr>
                <th>Ip</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>Kierunek</th>
                <th>Status</th>
                <tr>
                <?php
                $baza=mysqli_connect("localhost","root","","egzamin");
                $zapytanie = "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC;";
                $zap1 = mysqli_query($baza,$zapytanie);
                while($linia = mysqli_fetch_row($zap1)){
                    echo "<tr>";
                    echo "<td>".$linia[0]."</td>";
                    echo "<td>".$linia[1]."</td>";
                    echo "<td>".$linia[2]."</td>";
                    echo "<td>".$linia[3]."</td>";
                    echo "<td>".$linia[4]."</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </section>

        <footer class="stopka1">
        zdjecie
        </footer>

        <footer class="stopka2">
            <?php
                if(!isset($_COOKIE['ciastko'])){
                    setcookie('ciastko',1,time()+3600);
                    echo "<p>"."Dzień dobry! Sprawdź regulamin naszej strony"."</p>";
                } else{
                    echo "<p>"."Miło nam, że nas znowu odwiedziłeś"."</p>";
                
                }
            ?>
        </footer>

        <footer class="stopka3">
        <p>Autor</p>
        </footer>
        <?php
        mysqli_close($baza)
        ?>
    </body>
</html>