  <?php
  /*  $fruits = array("apple","banana","orange");
     //echo $fruits [0];
     echo $fruits [2];
                                   */
  /*
        $age = array ('Peter' => '35',
                      'Ben'   => '37',
                      'Joe'   => '43'  );
        echo "Ben is ".$age ['Ben']." years old";
        */

  //      $colors = array( 'red', 'green', 'blue', 'yellow');
  //              sort($colors);        // sort($..); - сортирует информацию с 'А' до 'Я'.   rsort($..); - сортирует с 'Я' до 'А'
  //              var_dump($colors);    //var_dump - выводит информацию о переменной.
  //            rsort($colors);
  //            var_dump($colors);


  // .

  $age = array("Peter" => "65", "Ben" => "37", "Joe" => "43");
  sort($age);
  var_dump($age);
  rsort($age);
  var_dump($age);
?>
