<!DOCTYPE html>
<html>
    <head>
        <title>Setting up database</title>
    </head>
    <body>
        <h3>Setting!!!</h3>
        <?php
            require_once "db.php";
            createTable('register_data',
                        'username VARCHAR(16),
                        password VARCHAR(16),
                        index user_id(username(16))');
        ?>
        <br>Finish
    </body>
</html>