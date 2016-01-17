<?php

    function db() {
        static $spot;
        if($spot === null) {
            $cfg = new \Spot\Config();
            $spot = new \Spot\Locator($cfg);

            $config = parse_ini_file('config/db.ini');

            if (!isset($config['connection'])) {
                throw new Exception("Missing db connection");
            }
            $conn = $spot->config()->addConnection('database', $config['connection']);
            $conn->connect();

        }
        return $spot;
    }

