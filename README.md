# lreus/sub-matrix-puzzle

## A PHP implementation solving the Maximum size square sub-matrix with all 1s puzzle.

This is an implementation of the great article from [geeksforgeeks.org](https://www.geeksforgeeks.org/maximum-size-sub-matrix-with-all-1s-in-a-binary-matrix/)

After cloning the repository install dependencies with `composer install`.

Class `Test\BinaryMatrixTest` is a phpunit test confirming `App\BinaryMatrix::getMaxSubMatrixSize()` behavior.  
You can run it in a terminal with the command `./vendor/bin/phpunit ./test/ --color=auto`

Feel free to challenge the algorithm with new test data in the function `Test\BinaryMatrixTest::matrixAndResultExpectations()`.

