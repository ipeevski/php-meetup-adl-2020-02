<?php
namespace Demo;

class A
{
    /**
     * Method that does something
     */
    public function b()
    {
        echo 'abcd';
        foreach (range(1, 100) as $i) {
            if ($i == 1) {
                return;
            }
        }
    }
}
