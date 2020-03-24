<?php

require_once 'Volume.php';
require_once 'Texture.php';

/**
 * Une classe peut implémenter plusieurs interfaces
 */
class Brique implements Volume, Texture
{

    /**
     * @inheritDoc
     */
    public function getMatiere(): string
    {
        return 'terre';
    }

    /**
     * @inheritDoc
     */
    public function getCouleur(): string
    {
        return 'rouge';
    }

    /**
     * @inheritDoc
     */
    public function getForme(): string
    {
        return 'parallélèpipède rectangle';
    }
}
