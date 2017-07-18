<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php

        $users = User::getAll();
        foreach ($users as $user) {
            echo "<h2>" . $user->username . "</h2>";
        }

    ?>
    
</body>
</html>