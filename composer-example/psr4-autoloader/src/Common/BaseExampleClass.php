<?php

namespace PALE\PSRFourExample\Common;

/**
 * @author Hamza Al Darawsheh <ihamzehald@gmail.com>
 * Class BaseExampleClass
 * @package PALE\PSRFourExample\Common
 */

class BaseExampleClass
{
    public function getExampleData()
    {
        return "This is example data from ( " . get_class($this) . " ) \n";
    }
}
