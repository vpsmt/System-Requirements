<?php

    function prerequisites_check() {
        $results = array(
        'php' => 'ok',
        'ioncube' => 'ok',
        'mysql' => 'ok',
        'pdo' => 'ok',
        'fsockopen' => 'ok',
        'mcrypt' => 'ok',
        'curl' => 'ok'
        );

        if ( version_compare(PHP_VERSION, '5.5', '<') ) {
            $results['php'] = 'Please make sure PHP is 5.5 or newer';
        }

        if ( !extension_loaded('mysql')) {
            $results['mysql'] = 'Please make sure mySQL is installed and it is 4.1.x or newer';
        }

        if (!defined('PDO::ATTR_DRIVER_NAME')) {
            $results['pdo'] = 'Please make sure the PDO (PHP Data Objects) extension is installed on your server';
        }

        if (!function_exists('fsockopen')) {
            $results['fsockopen'] = 'Please make sure PHP function fsockopen() is not disabled';
        }

        if ( !extension_loaded('ionCube Loader') || (function_exists('ioncube_loader_version') && version_compare(ioncube_loader_version(), '4.4', '<'))) {
             $results['ioncube'] = 'Please make sure the ionCube Loader is installed and it is 4.4 or newer';
        }

        if ( !extension_loaded('mcrypt') || (extension_loaded('mcrypt') && quick_decrypt( quick_encrypt('toronto', 'raptors') , 'raptors')) != 'toronto' ) {
            $results['mcrypt'] = 'mcrypt extension not installed/not configured properly';
        }

        if ( !function_exists('curl_version')) {
            $results['curl'] = 'cURL extension not installed';
        }
        
        if ( function_exists('curl_version')) {
            $version = curl_version();
            if (!($version['features'] & CURL_VERSION_SSL))
                $results['curl'] = 'cURL SSL not installed';
        }
        return $results;
    }

    function quick_encrypt($text, $salt) { 
        return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $salt, $text, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)))); 
    } 

    function quick_decrypt($text, $salt) { 
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $salt, base64_decode($text), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))); 
    }
