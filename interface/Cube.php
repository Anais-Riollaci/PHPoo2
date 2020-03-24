<?php
require_once 'Volume.php';

/**
 * Class Cube
 */
class Cube implements Volume
{

    /**
     * @inheritDoc
     */
    public function getForme(): string
    {
        return 'cube';
    }
}
