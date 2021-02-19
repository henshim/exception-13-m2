<?php


class DiviveByZeroException extends Exception
{
    public function __toString()
    {
        return "can't divide by zero";
    }
}

function divide($numerator, $denominator)
{
    if ($denominator === 0) {
        throw new DiviveByZeroException();
    }
    return $numerator / $denominator;
}
//
//$result=divide(100,5);
//echo $result;
//$answer=divide(100,0);
//echo $answer;

try {
    $result=divide(100,5);
    echo $result;
    $answer=divide(100,0);
    echo $answer;
}catch (DiviveByZeroException $e){
    echo 'error error error';
}