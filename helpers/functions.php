<?php

function debug($var)
{
    echo"<pre>";
    var_dump($var);
    echo"</pre>";
    exit;
}
function printdata($var)
{
    echo"<pre>";
    print_r($var);
    echo"</pre>";
    exit;
}



