<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 4.6 fonction</title>
    </head>
    <body >
        <p>
            <?php
            function function3param( $nom, $prenom, $age)
            {
                return 'Bonjour '.$nom.' '.$prenom.', tu as '.$age.' ans';
            }
            echo function3param( 'Bros', 'Tweety', 21);
            ?>
       </p>
    </body>
</html>