# Cyrius - PHP Assessment

This is a simple test to show us how you code.

There are 2 classes which are breaking the tests.
Your job is about to make the tests pass successfully.


### Running the tests

clone the repo

```
git clone https://github.com/pnicorelli/php-assessment.git
```

initialize project

```
cd php-assessment
composer install
```

first run

```
composer run-script test
```

this command should end up with

>ERRORS!

>Tests: 9, Assertions: 5, Errors: 4, Failures: 5.

then you can open your $favoriteEditor and fix those tests :)

### Algorithms

[Caesar](https://en.wikipedia.org/wiki/Caesar_cipher) and [Vigenere](https://en.wikipedia.org/wiki/Vigen%C3%A8re_cipher) are encryption techniques based on alphabet substitution ciphers.

You must implements those algorithms in the class located in `./src/Cypher/`. The files already exists but are empty.

### Submit the work

Once tests says:

```
> ./vendor/bin/phpunit --bootstrap vendor/autoload.php --testdox tests
PHPUnit 7.4.3 by Sebastian Bergmann and contributors.

Caesar
 ✔ Caesar is cypher interface
 ✔ Caesar throw exception on bad construction
 ✔ Caesar should encrypt
 ✔ Caesar should decrypt

Vigenere
 ✔ Vigenere is cypher interface
 ✔ Vigenere throw exception on empty construction
 ✔ Vigenere throw exception on bad construction
 ✔ Vigenere should encrypt
 ✔ Vigenere should decrypt

Time: 19 ms, Memory: 4.00MB

OK (9 tests, 9 assertions)
```

you're done!

Because *pull request* are not an option the best way to send us your work is by mail.

You can pack the code running `composer run-script pack`: a *$yourname.tar.gz* file will be created in the project directory. Or you can just zip the whole project, it's the same.

Then send to us the file.
