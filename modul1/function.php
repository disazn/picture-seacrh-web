     <?php

     function writeFIO(string $surname, string $age ){

         echo 'Age: ' . $surname." --> ". $age;
     }

//     writeFIO('Zhabatov', '22');

     function sum(int $a, int $b = 70) : string
     {
         return $a + $b;

     }

//     echo sum(7) . "\n";
//     echo sum(12,21);


     function add_five(&$x) {

         $x = $x + 5;
     }

     $value = 4;

     add_five($value);
     echo $value;




