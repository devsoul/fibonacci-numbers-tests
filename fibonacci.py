# Fibonacci performance test
# Author Stoyan Rangelov (devsoul) <stoyan.rangelov@gmail.com>

def fib(n):
    if n < 2:
        return n
    else:
        return fib(n-1) + fib(n-2)

print(fib(30))
