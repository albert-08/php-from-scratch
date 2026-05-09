<?php

class Request
{
    public static function url()
    {
        $uri = $_SERVER['REQUEST_URI'];

        $url = trim($uri, '/');

        return $url;
    }
}