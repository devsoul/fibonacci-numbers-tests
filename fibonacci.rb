# Fibonacci performance test
# Author Stoyan Rangelov (devsoul) <stoyan.rangelov@gmail.com>

def fibonacci(n)
    return n if n < 2
    fibonacci(n - 1) + fibonacci(n - 2)
end

puts fibonacci( 30 )

