/**
 * Fibonacci performance test
 * 
 * @author Stoyan Rangelov (devsoul) <stoyan.rangelov@gmail.com>
 */

#include <stdio.h>

int fibonacci(int n) {
    if (n < 2) {
        return n;
    }
    return fibonacci(n - 2) + fibonacci(n - 1);
}

int main() {
    printf("%d\n", fibonacci(30));
    return 0;
}


