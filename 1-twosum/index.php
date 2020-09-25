<?php
$array = [2, 5, 9, 1, 3, 7, 2];

function twosum($array, $sum = 0 ) {

    $new_array = [];

    for( $i = 0 ; $i < count($array); $i++ ) {

        for( $j = $i + 1; $j < count($array); $j++ ) {

            if( $array[$i] + $array[$j] == $sum )  {
                return [ $i, $j ];
                break;
            }
        }
    }
}

echo '<pre>';
print_r( twosum($array, 4) );
echo '</pre>';