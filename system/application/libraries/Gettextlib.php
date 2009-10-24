<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gettextlib {

    public function Gettextlib()
    {
        $locale = "en_EN";
        if ( isset( $_GET["locale"]))
            $locale = $_GET["locale"];

        putenv( "LC_ALL=$locale" );
        setlocale(LC_ALL, $locale);
        bindtextdomain("messages", "./locale");
        textdomain("messages");
    }
}

?>