<?php


namespace Animal\Continent\Asie;

use Animal\Elephant as ElephantInterface;

/**
 * Class Elephant
 * @package Animal\Continent\Asie
 */
class Elephant implements ElephantInterface
{

    /**
     * @inheritDoc
     */
    public function getTailleOreilles(): string
    {
        return 'petites';
    }
}
