
<?php




// A prime number is a natural number greater than 1 that has no positive divisors other than 1 and itself.
// The isPrime function checks if a number is prime.
// The findPrimeNumbers function iterates through the range, checks if each number is prime, and displays it if it is.


function findPrimeNumbers($start, $end)
{

    echo "Prime numbers between $start and $end are: ";

    for ($num = $start; $num <= $end; $num++) {
        if (isPrime($num)) {
            echo $num . " ";
        }
    }
}


// Helper function to check if a number is prime.
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


?>