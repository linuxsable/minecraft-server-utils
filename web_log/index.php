<html>
<head>
    <style type="text/css" media="screen">
        body {font-family: "Courier new"; font-size: 12px;}
    </style>
</head>
<body>
    <?php
    
    echo '<p><strong>Server Uptime:';
    echo `uptime`;
    echo '</strong></p>';

    $file_contents = file('/home/dm/minecraft/server.log');
    $file_contents = array_reverse($file_contents);
    $file_contents = array_slice($file_contents, 0, 500);
    foreach ($file_contents as $line) {
        $line = preg_replace('/([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})/', 'PRIVATE-IP', $line);
        $line = str_replace('[INFO]', '', $line);
        echo htmlspecialchars($line) . '<br/>';
    }
    
    ?>
</body>
</html>
