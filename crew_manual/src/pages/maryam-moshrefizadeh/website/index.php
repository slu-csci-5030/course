<html>
    <head>
        <title>My First Docker</title>
    </head>

    <body>
        <h1>Welcome to Marmary!</h1>
        <ul>
            <?php

            $json = file_get_contents('http://helloworld-service/');
            $obj = json_decode($json);

            $text = $obj->text;

            echo "<li>$text</li>";
            
            ?>
        </ul>
    </body>
</html>
