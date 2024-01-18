    <?php

    $z = [7, 9, 12, 5, 'name', "surname", true];

    $f = [0    => 7.7,
        11   => 95,
        20   => 1200,
        3000 => 50000,
        'name'    => 'Dias',
        'surname' => 'Zhabatov',
        'its'     => true,
        11 => 100               ];

    foreach ($f as $key => $value) {
        echo $key. " => " . $value. ";" ."\n" ;

    }
    echo $z[4] . ' => ' . $f['name'];


    ?>
