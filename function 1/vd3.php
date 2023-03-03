<?php
function isPrime($srr)
{
    if ($srr <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($srr); $i++) {
        if ($srr % $i == 0) {
            return false;
        }
    }
    return true;
}
echo isPrime(7)."<br>";
echo isPrime(9)."<br>";
echo isPrime(11)."<br>";