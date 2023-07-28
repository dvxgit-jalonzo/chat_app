<?php
$dirs = array_filter(glob(__DIR__."/*"), "is_dir");
foreach ($dirs as $dir){
    foreach (glob($dir."/*.php") as $filename){
        include $filename;
    }
}
