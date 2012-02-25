<?php

global $project;
$project = 'mysite';

global $database;
$database = 'SS_techniki_ss_2012-02-26';

require_once('conf/ConfigureFromEnv.php');

global $databaseConfig;
$databaseConfig['type'] = 'MySQLDatabase';
$databaseConfig['server'] = SS_DATABASE_SERVER;
$databaseConfig['username'] = SS_DATABASE_USERNAME;
$databaseConfig['password'] = SS_DATABASE_PASSWORD;
