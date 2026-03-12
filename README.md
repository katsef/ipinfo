# webazon/ipinfo

#### We decided to create a **project fork**  [**https://github.com/ipinfo/php/**](https://github.com/ipinfo/php/) to explore new features independently.

### PHP Library for IPinfo (IP Geolocation and other IP Data Types)

##### Additionally, a feature has been integrated to set the language locale in accordance with the country determined by the user's IP address.

###### !!! To get your personal access token, visit https://ipinfo.io/

```php
use Webazon\Ipinfo\Ipinfo;
use Webazon\Ipinfo\Exception;
require './vendor/autoload.php';
$ipinfo = new Ipinfo('access_token',[IP-адрес]);	## If the IP address parameter is not provided, it returns the visitor's IP data.
$locale = $ipinfo -> locale;
```

------

##### Example of the returned `$ipinfo` object

```php
$ipinfo=json_encode($ipinfo,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
```

```json
{
    "ip": "77.91.69.93",
    "locale": "he_IL",
    "exception": false,
    "ipinfo": {
        "country": "IL",
        "country_name": "Israel",
        "country_flag": {
            "emoji": "🇮🇱",
            "unicode": "U+1F1EE U+1F1F1"
        },
        "country_code": null,
        "country_flag_url": "https:\/\/cdn.ipinfo.io\/static\/images\/countries-flags\/IL.svg",
        "country_currency": {
            "code": "ILS",
            "symbol": "₪"
        },
        "continent": {
            "code": "AS",
            "name": "Asia"
        },
        "latitude": "32.0809",
        "longitude": "34.7806",
        "loc": "32.0809,34.7806",
        "is_eu": false,
        "ip": "77.91.69.93",
        "hostname": "static.93.69.91.77.ip.webhost1.net",
        "anycast": null,
        "city": "Tel Aviv",
        "org": "AS206446 CLOUD LEASE Ltd",
        "postal": null,
        "region": "Tel Aviv",
        "timezone": "Asia\/Jerusalem",
        "asn": null,
        "company": null,
        "privacy": null,
        "abuse": null,
        "domains": null,
        "bogon": null,
        "all": {
            "ip": "77.91.69.93",
            "hostname": "static.93.69.91.77.ip.webhost1.net",
            "city": "Tel Aviv",
            "region": "Tel Aviv",
            "country": "IL",
            "loc": "32.0809,34.7806",
            "org": "AS206446 CLOUD LEASE Ltd",
            "timezone": "Asia\/Jerusalem",
            "country_name": "Israel",
            "is_eu": false,
            "country_flag": {
                "emoji": "🇮🇱",
                "unicode": "U+1F1EE U+1F1F1"
            },
            "country_flag_url": "https:\/\/cdn.ipinfo.io\/static\/images\/countries-flags\/IL.svg",
            "country_currency": {
                "code": "ILS",
                "symbol": "₪"
            },
            "continent": {
                "code": "AS",
                "name": "Asia"
            },
            "latitude": "32.0809",
            "longitude": "34.7806"
        }
    }
}
```