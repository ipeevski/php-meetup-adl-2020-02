<?php

namespace Demo;

class ASpecialClass
{
    /**
     * Method that does something
     */
    public function something(int $apple)
    {
        echo 'abcd';
        foreach (range(1, 100) as $i) {
            if ($i == 1) {
                return $apple;
            }
        }
    }

    public function somethingElse()
    {
        $this->something(1);
    }
}
