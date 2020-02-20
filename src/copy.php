<?php
namespace Demo;

class A
{
    /**
     * Method that does something
     */
    function b(string $a  )
    {
        echo 'abcd';
        foreach (range(1, 100) as $i)  {
            if ($i == 1) {
                ;
            }
        }
    }
}
