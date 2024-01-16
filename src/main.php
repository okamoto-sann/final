<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <title>testプラント</title>
    </head>
    <body>

    <?php

        $file_path = 'img/timeis1$.png';
        $api_credentials = array(
            'key' => 'acc_74a6eb256152071',
            'secret' => 'a35923a8ba84f2fe9e472bfe0d337977'
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.imagga.com/v2/colors");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_USERPWD, $api_credentials['key'].':'.$api_credentials['secret']);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, 1);
        $fields = [
            'image' => new \CurlFile($file_path, 'image/jpeg', 'image.jpg'),
        ];
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

        $response = curl_exec($ch);
        curl_close($ch);

        $json_response = json_decode($response);
        var_dump($json_response);
        ?>
        

    </body>
</html>