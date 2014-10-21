/**
 * Fibonacci performance test
 *
 * @author Stoyan Rangelov (devsoul) <stoyan.rangelov@gmail.com>
 */

public class Fibonacci {

    public static int fib(int n) {
        if (n < 2) {
            return n;
        }
        return fib(n - 1) + fib(n - 2);

    }

    public static void main(String[] args) {
        System.out.print(fib(30) + "\n");
    }
}