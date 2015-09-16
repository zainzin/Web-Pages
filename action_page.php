<html>
    <head>
        <title>PHP Action Page</title>
    </head>

    <body>
        <?php
            $myFile=fopen("newfile.txt", "a+") or die("Unable to store name");

            fwrite($myFile, $_POST["Name"]);
            fwrite($myFile, $_POST["Email"]);

            fclose($myFile);
        ?>
    </body>
</html>
