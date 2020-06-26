<?php 

define("ROOT", "http://localhost/mvc-php");
define("SITE","FORM CAD");

function url(string $uri = null) : string{
    if($uri){
        return ROOT."{$uri}";
    }

    return ROOT;
}