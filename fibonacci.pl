# Fibonacci performance test
# Author Stoyan Rangelov (devsoul) <stoyan.rangelov@gmail.com>
sub fibonacci {
    my $n = shift;

    if ($n < 2) {
        return $n;
    }
    return fibonacci($n-1) + fibonacci($n-2);
}

print fibonacci(30)."\n";
