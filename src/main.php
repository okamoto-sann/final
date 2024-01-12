<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <title>testプラント</title>
    </head>
    <body>

    <?php

            $image_url = 'img/timeis1$.png';
            $api_credentials = array(
            'key' => 'acc_74a6eb256152071',
            'secret' => 'a35923a8ba84f2fe9e472bfe0d337977'
            );

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://api.imagga.com/v2/tags?image_url='.$image_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_USERPWD, $api_credentials['key'].':'.$api_credentials['secret']);

            $response = curl_exec($ch);
            curl_close($ch);

            $json_response = json_decode($response);
            var_dump($json_response);


        ?>

    </body>
</html>