<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>PHP övningar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Azeret+Mono:wght@300&display=swap" rel="stylesheet"> 
</head>

<body>

    <div class="main">
        <h1 class="bHead">PHP Övningar</h1>
    </div>

    <div class="ovningar">
        <div class="ovning ov0">
            <h2 class="ovHead">
                Övning 0
            </h2>
            <p>phpinfo(); - visar info om php versionen.</p> <br>
            <p>die(); - avslutar scriptet</p> <br>
            <p>var_dump(); - visar vad det är för slags variabel och hur mycket som finns i den, som typ string(5) "test1"</p>
        </div>
        <div class="ovning ov1">
            <h2 class="ovHead">
                Övning 1
            </h2>
            <?php
            for ($i = 0; $i < 8; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    print("*");
                }
                echo "<br>";
            }
            ?>
        </div>
        <div class="ovning ov2">
            <h2 class="ovHead">
                Övning 2
            </h2>
            <table width="250px" cellspacing="0px" cellpadding="0px" border="1px">
                <?php
                for ($row = 1; $row <= 8; $row++) {
                    echo "<tr>";
                    for ($col = 1; $col <= 8; $col++) {
                        $total = $row + $col;
                        if ($total % 2 == 0) {
                            echo "<td style='background-color: #fff;'></td>";
                        } else {
                            echo "<td style='background-color: #000;'></td>";
                        }
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <div class="ovning ov2">
            <h2 class="ovHead">
                Övning 3
            </h2>

            <form method="post">
                <input type="number" name="lon" step="0.01" min="0" placeholder="Tid jobbat senaste vecka" class="input" />
                <input type="number" name="pert" step="0.01" min="0" placeholder="Lön/h" class="input" /><br>
                <input type="submit" name="rakna" value="Räkna" class="inputbtn" />
                <input type="submit" name="reset" value="Reset" class="inputbtn"/>
            </form>
            <?php
            if (!isset($_POST['lon']) && !isset($_POST['pert'])) {
                echo "Insert your salary above to calculate!";
                return;
            }
            $lon = $_POST['lon'];
            $pert = $_POST['pert'];
            if ($lon > 40) {
                echo  $lon * $pert * 1.4;
            } else {
                echo $lon * $pert;
            }
            if(isset($_POST['reset'])) {
                echo "Insert your salary above to calculate!";
                return;
            }
            ?>
        </div>
        <div class="ovning ov4">
            <h2 class="ovHead">
                Övning 4
            </h2>
            <h2>Miniräknare</h2>
            <form action="" method="post">
                <input type="number" name="tal" placeholder="Ett tal">
                <input type="number" name="atal" placeholder="Ett till tal">
                <input type="number" name="" id="" disabled> <br>
                <input type="button" name="addera" value="Addera">
                <input type="button" name="subtrahera" value="Subtrahera">
                <input type="button" name="multiplicera" value="Multiplicera">
                <input type="button" name="dividera" value="Dividera">
            </form>

            <?php 
            
            if (!isset($_POST['tal']) && !isset($_POST['atal'])) {
                return;
            }

            $tal = $_POST['tal'];
            $atal = $_POST['atal'];

            if (isset($_POST['addera'])) {
                echo $tal + $atal;
                return;
            }
            if (isset($_POST['subtrahera'])) {
                echo $tal - $atal;
                return;
            }
            if (isset($_POST['multiplicera'])) {
                echo $tal * $atal;
                return;
            }
            if (isset($_POST['dividera'])) {
                echo $tal / $atal;
                return;
            }
            ?>

        </div>
    </div>
</body>

</html>