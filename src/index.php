<?php
echo  'a';

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
            }elseif( $i == 4)
            {
                ;
            } elseif ($i == 56) {
                ;
            } elseif ($i == 'six') {
                ;
            }
        }

        var_dump('');
    }

    public function c() {
        $this->b(1);
    }
}
