<?php


/**
 * Class Logger
 */
class Logger
{
    public static function log(Throwable $e)
    {
        file_put_contents(
            'log.txt',
            '[' . date('Y-m-d H:i:s') . '] '
                // fichier dans lequel l'exception a été jetée
                . $e->getFile()
                // la ligne dans le fichier
                . ' line ' . $e->getLine()
                // le message déclaré à l'instanciation de l'exception
                . ' ' . $e->getMessage()
                // ce qui s'est passé dans le code pour parvenir à l'exception jetée
                . PHP_EOL . $e->getTraceAsString() . PHP_EOL,
            FILE_APPEND
        );
    }
}
