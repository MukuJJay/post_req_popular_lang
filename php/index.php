<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        $postData = array(
            'name' =>'mukul',
            'code' => 'ba5e3f51a592e97df7ad94b2c1cd68fd'
        );
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, 'https://dev.29kreativ.com/recruitment/levels/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ba5e3f51a592e97df7ad94b2c1cd68fd' 
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);

        echo 'Response: ' . $response;
        
        curl_close($ch);
    ?>
</body>
</html>