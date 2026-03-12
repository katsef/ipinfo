<?php

namespace Webazon\Ipinfo;
class Ipinfo extends Base
{
    public $ip = false;
    public $locale = "en_US";
    public $exception = false;
    public $ipinfo = false;
    
    function __construct($access_token=false,$ip = false)
    {
        Exception::set_error();
        try {
            if (!$access_token){throw new Exception('An access token is required but was not provided.', 0, __FILE__, __LINE__);}
            if (!$ip) {
                $ip = Base::GetIp($access_token);
            }
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                if (!Base::CheckIp($ip)) {
                    $client = new \ipinfo\ipinfo\IPinfo($access_token);
                    $this->ipinfo = $client->getDetails($ip);
                    $this->locale = Base::GetLocale($this->ipinfo->country);
                } else {
                    throw new Exception($ip . ' is not a valid IP address', 0, __FILE__, __LINE__);
                }
            } else {
                throw new Exception($ip . ' is not a valid IP address', 0, __FILE__, __LINE__);
            }
            $this->ip = $ip;
        } catch (\Throwable $e) {
            $this->exception = Exception::getException($e);
        }
    }
}

?>