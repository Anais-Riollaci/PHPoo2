<?php


trait StringUtils
{
    /**
     * @param string $str
     * @param string $color
     * @return string
     */
    public function asParagraph(string $str, string $color = 'black'): string
    {
        return '<p style="color:' . $color . '">' . $str . '</p>';
    }
}
