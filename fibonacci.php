<?php

/**
 * Fibonacci performance test
 * 
 * @author Stoyan Rangelov (devsoul) <stoyan.rangelov@gmail.com>
 */

/**
 * @param int $n
 *
 * @return mixed
 */
function fibonacci($n) {
    if ($n < 2) {
        return $n;
    }
    return fibonacci($n - 2) + fibonacci($n - 1);
}

echo fibonacci(30) . "\n";


