<?php
$array =  [2, 1, 4, 5, 2, 7, 4];

function twosum($array, $sum = 0 ) {

    $new_array = [];

    for( $i = 0 ; $i < count($array); $i++ ) {

        for( $j = $i + 1; $j < count($array); $j++ ) {
            if( $array[$i] + $array[$j] == $sum )  {
                $array =  [ $i, $j ];
            }
        }
    }

   return $array;
}

echo '<pre>';
print_r( twosum($array, 4) );
echo '</pre>';