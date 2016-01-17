<?php
/**
 * Created by PhpStorm.
 * User: jjuzna
 * Date: 16.1.2016
 * Time: 18:23
 */
    require __DIR__ . '/vendor/autoload.php';
    require __DIR__ .'/src/db.php';

    $spot = db();
    echo 'Hello';