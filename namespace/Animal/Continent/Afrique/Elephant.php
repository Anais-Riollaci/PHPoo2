<?php


namespace Animal\Continent\Afrique;


use Animal\Elephant as ElephantInterface;

/**
 * Class Elephant
 * @package Animal\Continent\Afrique
 */
class Elephant implements ElephantInterface
{

    /**
     * @inheritDoc
     */
    public function getTailleOreilles(): string
    {
        return 'grandes';
    }
}
