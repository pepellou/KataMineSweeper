# Kata MineSweeper

## Problem Description

The goal of the minesweeper game is to find all the mines within an MxN field. 
To help you, the game shows a number in a square which tells you how many mines there are adjacent to that square. 
For instance, take the following 4x4 field with 2 mines (which are represented by a "*" character):

    *...
    ....
    .*..
    ....

The same field including the hint numbers described above would look like this:

    *100
    2210
    1*10
    1110

The goal of the kata is to write a program that computes these hint numbers.

This kata is nice to practice both parsing strings and deciding on data structure to perform neighbourhood calculations.


## Data input

The input will consist of an arbitrary number of fields. For each field, the first line will contain two integers n and m (0 < n <= 100, 0 < m <= 100) which stands for the number of lines and columns of the field respectively. The next n lines contains exactly m characters each one and represent the field. Each safe square is represented by a "." character and each mine square is represented by a "*" character. The first field line where n = m = 0 represents the end of input and should not be processed.


## Data output

For each field, you must print the following message in a line alone:

    Field #x:

Where x stands for the number of the field (starting from 1). 

The next n lines should contain the field with the "." characters replaced by the number of adjacent mines to that square. 
There must be an empty line between field outputs.


## Suggested Test Case

Acceptance test input:

    4 4
    *...
    ....
    .*..
    ....
    3 5
    **...
    .....
    .*...
    0 0

Acceptance test output:

    Field #1:
    *100
    2210
    1*10
    1110

    Field #2:
    **100
    33200
    1*100
