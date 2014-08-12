# YO APP PHP #
PHP wrapper for Yo App API (http://justyo.co)

[Yo API documentation](http://dev.justyo.co/yo/documents.html)

## Example ##
You can find example code in `examples/` directory.

First of all you need to register your own personal Yo account using your mobile phone. Then [create new api account](http://dev.justyo.co/yo/dashboard.html) with any other username.

Then replace `{API_TOKEN}` in `example.php` with your own token.


Basically you can use library like that:

```
try {
    $yo = new \che\Yo({API_TOKEN});

    // send a yo to all subscribers
    $yo->sendAll();
} catch (\che\YoException $e) {
    echo "Error #" . $e->getCode() . ": " . $e->getMessage();
}
```

## Installation ##
You can install `yoapp-php` by using [Composer](http://getcomposer.org/)
```
"require": {
    "chekalskiy/yoapp-php": "dev-master"
}
```
  
or by using simple `include`.

## Support ##
email: <ilya@chekalskiy.ru>  
vk: [chekalskiy](https://vk.com/chekalskiy)  
twitter: [@i_compman](https://twitter.com/i_compman)