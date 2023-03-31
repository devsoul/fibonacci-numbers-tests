fn fibonacci(n: i32) -> i32 {
    if n < 2 {
        n
    } else {
        fibonacci(n - 2) + fibonacci(n - 1)
    }
}

fn main() {
    println!("{}", fibonacci(30));
}
