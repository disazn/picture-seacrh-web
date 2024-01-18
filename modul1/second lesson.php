    <?php  // Conditional Statements

    //     $a = 50;
    //     $b = 10;
    //    if ( $a == $b) {
    //        echo '1';
    //    } else if ($a > $b ) {
    //        echo '2';
    //    } else {
    //        echo '3';

    $time = date("H ");
    echo $time;
    if ($time > 23 ) {
        echo "Good night, Dias!";
    } //else {
        else if ($time > 12) {
        echo "Good morning, Dias!";
    } else if($time < 17) {
            echo "Good afternoon, Dias!";
        }else {
            echo 'Good morning, Dias!';
        }

        echo ' Whats upp?!'

?>