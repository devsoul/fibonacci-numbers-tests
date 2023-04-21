Fibonacci numbers performance test 
Tested on M1 pro and M2 pro Apple silicone
==================================

### Clone the repo
	git clone git@github.com:devsoul/fibonacci-numbers-tests.git fibonacci
	cd fibonacci
	
### PHP test
	time php fibonacci.php

### PERL test
	time perl fibonacci.pl
	
### Python test
	time python3 fibonacci.py

### Ruby test
	time ruby fibonacci.rb
	
### Java test
    javac Fibonacci.java 
    time java Fibonacci 

### C test
    gcc -o fibonacci fibonacci.c
    time ./fibonacci

### NodeJS test
    time node fibonacci.js

### Rust test
    rustc fibonacci.rs
    time ./fibonacci

### Results
    time php fibonacci.php # 8.2.5
    832040
    php fibonacci.php  0.10s user 0.01s system 96% cpu 0.114 total

    time perl fibonacci.pl # 5.30.3
    832040
    perl fibonacci.pl  0.29s user 0.01s system 98% cpu 0.301 total

    time python3 fibonacci.py # 3.11.3
    832040
    python3 fibonacci.py  0.10s user 0.01s system 80% cpu 0.134 total

    time ruby fibonacci.rb # 2.7.2p137
    832040
    ruby fibonacci.rb  0.11s user 0.00s system 99% cpu 0.110 total

    javac Fibonacci.java # openjdk 20
    time java Fibonacci
    832040
    java Fibonacci  0.04s user 0.02s system 34% cpu 0.194 total

    gcc -o fibonacci fibonacci.c # 10.3.0
    time ./fibonacci
    832040
    ./fibonacci  0.01s user 0.00s system 97% cpu 0.007 total

    time node fibonacci.js # 19.8.1
    832040
    node fibonacci.js  0.05s user 0.01s system 94% cpu 0.063 total

    rustc fibonacci.rs # 1.68.1
    time ./fibonacci
    832040
    ./fibonacci  0.01s user 0.00s system 88% cpu 0.019 total