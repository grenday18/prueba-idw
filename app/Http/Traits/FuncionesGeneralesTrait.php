<?php

namespace App\Http\Traits;

trait FuncionesGeneralesTrait {

    public function obtenerIP() {
        if (!isset($_SERVER['REMOTE_ADDR'])) {
            return NULL;
        }
        $proxy_header = "HTTP_X_FORWARDED_FOR";
        $trusted_proxies = array("2001:db8::1", "192.168.50.1");
        if (in_array($_SERVER['REMOTE_ADDR'], $trusted_proxies)) {
            if (array_key_exists($proxy_header, $_SERVER)) {
                $client_ip = trim(end(explode(",", $_SERVER[$proxy_header])));
                if (filter_var($client_ip, FILTER_VALIDATE_IP)) {
                    return $client_ip;
                } else {
                    return null;
                }
            }
        }

        // In all other cases, REMOTE_ADDR is the ONLY IP we can trust.
        return $_SERVER['REMOTE_ADDR'];
    }

}
