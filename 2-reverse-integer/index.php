<?php
    # Method no 1
    function reverse( $number = 0) {
        $reverse = 0;
    
        while ( $number != 0 ) {
            $reminder = $number % 10;
            $reverse = ( $reverse * 10 ) + $reminder;
            $number = (int)( $number / 10 );
        };
        return $reverse;
    }

    echo reverse(72456);
    echo '<br />';
    
    echo reverse(-345);
    echo '<hr /><br />';



    # Method no 2
    function reverse_do( $number = 0) {
        $reverse = 0;

        do{
            $reminder = $number % 10;
            $reverse *= 10;
            $reverse += $reminder;
            $number /= 10;
            $number = (int) $number;
        }
        while ( $number != 0 );

        return $reverse;
    }

    echo reverse_do(45489);
    echo '<br />';
    
    echo reverse_do(-345);
    echo '<hr /><br />';



    # Method no 3
    function reverse_for( $number = 0) {
        $reverse = 0;

        for( $reverse; $number != 0; ) {
            $reminder = $number % 10;
            $reverse = ( $reverse * 10 ) + $reminder;
            $number = (int)( $number / 10 );
        }

        return $reverse;
    }

    echo reverse_for(85752);
    echo '<br />';
    
    echo reverse_for(-7897);
    echo '<hr /><br />';