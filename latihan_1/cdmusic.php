<?php
require_once("product.php");

//CD Music Class
class Cdmusic extends Product
{
    public $artist;
    public $genre;

    function get_artist()
    {
        return $this->artist;
    }

    function set_artist($artist)
    {
        $this->artist = $artist;
    }

    function get_genre()
    {
        return $this->genre;
    }

    function set_genre($genre)
    {
        $this->genre = $genre;
    }
}
?>
