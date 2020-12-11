<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Parti 1 Exercice 2</h1>
        <?php
            $lastName = 'Belgacem';
            $firstName = 'Mehdi' ;
            $age = 26;
            $identity = ' Bonjour, je m\'appelle ' . $lastName . ' ' . $firstName . ', j\'ai '. $age .' ans.';
        ?>
        <P><?php echo $identity ?></P>
</body>
</html>