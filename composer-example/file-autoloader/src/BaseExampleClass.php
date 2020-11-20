<?php

/**
 * @author Hamza Al Darawsheh <ihamzehald@gmail.com>
 * Class BaseExampleClass
 */

class BaseExampleClass
{
    public function getExampleData()
    {
        return "This is example data from ( " . get_class($this) . " ) \n";
    }
}
