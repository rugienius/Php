<?php

class a {
const aaa -'xxx';
    function __construct()
    {
        echo__CLASS_ . ' ' . self::aaa . 'construct<br>';
    }
        function__destruct(){
        echo_CLASS_ . ' ' . a::aaa  'destruct<br>';
    }
    }

echo '--pries new--<br>';
    $p = new a(); //egzempliorius sukuriamas: suveikia construct
    echo '-- po new--<br>';
    unset($p); // egzempliorius sunaikinamas: suveikia destruct
Echo '-- po unset --<br>';