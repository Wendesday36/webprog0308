<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berta Zoé Anna</title>
</head>

<body>
    <?php
    echo "<h1><center>hello</center></h1>";
    $tomb = [];
    $also = 1;
    $felso = 100;
    for ($index1 = 0; $index1 < 5; $index1++) {
        $randomSzam = rand($also, $felso);
        $tomb[$index1] = $randomSzam;
        echo ($tomb[$index1] . " ");
    }
    $osszeg = 0;
    foreach ($tomb as $ertek) {
        $osszeg += $ertek;
    }
    echo "összeg:" . $osszeg;


    //masodik
    echo "<br>";
    echo "<h3>-kettes</h3>";
    $tomb2 = [];
    for ($index1 = 0; $index1 < 5; $index1++) {
        $randomSzam = rand(1, 5);
        $tomb2[$index1] = $randomSzam;
        echo ($tomb2[$index1] . " ");
    }
    echo "<br>";
    for ($i = 0; $i < count($tomb); $i++) {
        switch ($tomb2[$i]) {
            case 1:
                echo $tomb2[$i] . "-egyes<br>";
                break;
            case 2:
                echo $tomb2[$i] . "-kettes<br>";
                break;
            case 3:
                echo $tomb2[$i] . "-hármas<br>";
                break;
            case 4:
                echo $tomb2[$i] . "-négyes<br>";
                break;
            case 5:
                echo $tomb2[$i] . "-ötös<br>";
                break;
        }
    }


    //harmadik





    function fug($darabSzam)
    {
        echo "<h3>-harmadik</h3>";
        echo "<br>";
        $fejIras = [];
        for ($index1 = 0; $index1 < $darabSzam; $index1++) {
            $randomSzam = rand(1, 2);
            echo "veletlen szam:" . $randomSzam . "<br>";
            if ($randomSzam == 1) {
                $fejIras[$index1] = true;
            } else {
                $fejIras[$index1] = false;
            }
            echo (boolval($fejIras[$index1]) ? "írás" : "fej") . " ";
        }
    }
    fug(10);
    ?>

</body>

</html>