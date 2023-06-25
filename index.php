<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 2</title>
</head>
<body>
    <?php
    //1.
    $x = 2;
    echo $x ** 2 . '<br>';

    //2.
    $y = 2023;
    if ($y % 4 == 0){
        echo 'nice<br>';
    }else {
        echo 'vice versa<br>';
    }

    //3.
    $a = 10;
    $b = 20;
    $c = 30;
    if ($a == $b && $a == $c && $b == $c){
        echo 'nice';
    }else {
        echo 'vice versa<br>';
    }

    //4.
    $x = 10;
    if ($x % 2 == 0){
        echo $x / 2 .'<br>';
    }else {
        echo 'vice versa<br>';
    }
    //5.
    $x = 10;
    echo  $x % 2 == 0 ?  $x / 2 . '<br>' : 'vice versa<br>';
    //6.
    ///1.Switch-Case(Option)
    $status = 'BONJOUR, UN CAFE, SIL VOUS PLAIT';
    switch ($status){
        case 'UN CAFE':
            echo 7 .' euro<br>';
            break;
        case 'UN CAFE, SIL VOUS PLAIT':
            echo 4.25 . ' euro<br>';
            break;
        case 'BONJOUR, UN CAFE, SIL VOUS PLAIT':
            echo 1.40 . ' euro<br>';
            break;
    default:
        echo 'empty';
        break;
    }
    ///2.Match(Option)
    $status = 'UN CAFE, SIL VOUS PLAIT';
    $message = match ($status) {
        'UN CAFE' => 7 . 'euro<br>',
        'UN CAFE, SIL VOUS PLAIT' => 4.25 . 'euro<br>',
        'BONJOUR, UN CAFE, SIL VOUS PLAIT' => 1.40 . 'euro<br>',
        default => 'empty',
    };
    echo '<br>' .  $message;
    //7.
    $x = 0;
    while ($x <= 100) {
        echo 'even number ' . $x . '<br>';
        $x += 2;
    }
    //8.
    $total = 0;
    for ($i = 1; $i <= 100; $i += 2) {
        $total += $i;
    }
    echo '<br>' . 'final ' . $total . '<br>';
    //9.
    ////1.option
    // $x = [[4],[7],[8]];
    // $y = [[5],[5]];
    // $e = [[4],[7],[1],[2],[2]];
    // $first = count ($x);
    // $second = count ($y);
    // $third = count ($e);
    // echo $first . 'first ', $second . 'second ', $third . 'third ';

    ////2.option
        $number = 478;
        $count = 0;
        while ($number != 0){
            $number = intval($number / 10);
            $count++;
        }
       echo 'equal = ' . $count;
    //10.
    function intCube ($x) {
      echo '<br> Cube-Equal ' . $some = $x * $x * $x;
    };
    intCube(7);
    ?>
</body>
</html>