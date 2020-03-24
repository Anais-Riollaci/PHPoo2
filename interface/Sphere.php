<?php
require_once 'Volume.php';

/**
 * Class Sphere
 */
class Sphere implements Volume
{

    /**
     * @inheritDoc
     */
    public function getForme(): string
    {
        return 'sphère';
    }
}
