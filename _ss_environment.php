<?php
define('SS_ENVIRONMENT_TYPE', 'dev');

throw new Exception("Proszę, wypełnij poniższe dane i usuń tą linię.");

define('SS_DATABASE_SERVER', '');
define('SS_DATABASE_USERNAME', '');
define('SS_DATABASE_PASSWORD', '');

// Przekierowanie email - żeby przypadkiem nie wysłać maila w Internet
define('SS_SEND_ALL_EMAILS_TO', 'twoj@email');

// Ścieżka serwera -> URL serwera - dla poprawnego działania sake
global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['/sciezka/do/twojego/katalogu/www'] = 'http://url.twojego.serwera';
