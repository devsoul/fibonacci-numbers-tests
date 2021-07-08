<?php
declare(strict_types=1);

function fibonacci(int $n): int
{
    if ($n < 2) {
        return $n;
    }
    return fibonacci($n - 2) + fibonacci($n - 1);
}

echo fibonacci(30) . "\n";
