<?php

class BaseExampleClass
{
    public function getExampleData()
    {
        return "This is example data from ( " . get_class($this) . " ) \n";
    }
}
