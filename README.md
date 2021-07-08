Fibonacci numbers performance test
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

### Results
    time php fibonacci.php # 8.0.8
    832040
    php fibonacci.php  0.50s user 0.00s system 99% cpu 0.506 total

    time perl fibonacci.pl # 5.32.1
    832040
    perl fibonacci.pl  0.39s user 0.00s system 99% cpu 0.385 total

    time python fibonacci.py # 3.9.5
    832040
    python3.9 fibonacci.py  0.17s user 0.00s system 99% cpu 0.168 total

    time ruby fibonacci.rb # 2.7.2p137
    832040
    ruby fibonacci.rb  0.11s user 0.00s system 99% cpu 0.110 total

    javac Fibonacci.java # 11.0.11
    time java Fibonacci
    832040
    java Fibonacci  0.06s user 0.01s system 82% cpu 0.083 total

    gcc -o fibonacci fibonacci.c # 10.3.0
    time ./fibonacci
    832040
    ./fibonacci  0.01s user 0.00s system 97% cpu 0.007 total
