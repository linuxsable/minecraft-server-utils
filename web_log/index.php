<html>
    <head>
        <style type="text/css" media="screen">
            body {font-family: courier; font-size: 12px;}</style>
        </style>
    </head>
    <body>
    <?
        echo '<p><strong>Server Uptime:';
        echo `uptime`;
        echo '</strong></p>';

        $file_contents = file('/home/dm/minecraft/server.log');
        $file_contents = array_reverse($file_contents);
        foreach ($file_contents as $line) {
                echo $line . '<br/>';
        }
    ?>
    </body>
</html>