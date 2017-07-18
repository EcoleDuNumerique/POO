<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
     <form action="services/servicenote.php?noteid=<?= $note->id ?>" method="POST">

        <label>Titre</label>       <input type="text" name="title" value="<?= $note->title ?>"/><br>
        <label>Description</label> <textarea name="description"><?= $note->description ?></textarea><br>
        <input type="submit" value="Mettre a jour">

    </form>

</body>
</html>