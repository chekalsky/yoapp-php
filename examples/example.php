<?php
    require './../che/Yo.php';

    $token = '{API_TOKEN}';

    try {
        $yo = new \che\Yo($token);

        $yo->sendAll('http://the.tj/'); // or you can yo without link

        $yo->sendUser('COMPMAN', 'http://the.tj/'); // or you can yo without link

        $count = $yo->subscribersCount();
        echo 'Count: ' . $count;
    } catch (\che\YoException $e) {
        echo "Error #" . $e->getCode() . ": " . $e->getMessage();
    }
