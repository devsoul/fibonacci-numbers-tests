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
	time python fibonacci.py
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
    time php fibonacci.php #7.2.10
    832040
    php fibonacci.php  1,20s user 0,02s system 99% cpu 1,220 total

    time perl fibonacci.pl #5.26.1
    832040
    perl fibonacci.pl  0,55s user 0,00s system 99% cpu 0,548 total

    time python fibonacci.py #2.7.15
    832040
    python fibonacci.py  0,25s user 0,00s system 99% cpu 0,258 total

    time python3 fibonacci.py #3.6.6
    832040
    python3 fibonacci.py  0,30s user 0,01s system 99% cpu 0,306 total

    time ruby fibonacci.rb #2.5.1p57
    832040
    ruby fibonacci.rb  0,18s user 0,01s system 84% cpu 0,217 total

    javac Fibonacci.java #1.8.0_181
    time java Fibonacci
    832040
    java Fibonacci  0,08s user 0,02s system 105% cpu 0,093 total

    gcc -o fibonacci fibonacci.c #7.3.0-27
    time ./fibonacci
    832040
    ./fibonacci  0,03s user 0,00s system 98% cpu 0,026 total
