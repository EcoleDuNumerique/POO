<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Profil </title>
</head>
<body>

    <h1> Page Profil </h1>

    <h2> Welcome <?= $user->id; ?> </h2>

    <form action="services/servicenote.php" method="POST">

        <label>Titre</label>       <input type="text" name="title" /><br>
        <label>Description</label> <textarea name="description"></textarea><br>
        <input type="submit" value="Créer">

    </form>

    -----------
    <ul>
    <?php
        $notes = $user->getNotes();    
        foreach( $notes as $note ){
    ?>
        <li>
            <h4> <?= $note->title ?> </h4>
            <p> <?= $note->description ?> </p>
            <a href='index.php?page=noteupdate&noteid=<?= $note->id ?>' > Editer </a>
            <a href='services/servicenote.php?supprimer=1&noteid=<?= $note->id ?>' > Supprimer </a>
        </li>
    <?php
        }
    ?>

    
</body>
</html>