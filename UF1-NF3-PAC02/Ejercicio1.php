<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'ALTER TABLE movie
        ADD CONSTRAINT fk_leadactor
        FOREIGN KEY (movie_leadactor)
        REFERENCES people (people_id)';

mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Foreign key constraint se ha añadido correctamente';
?>
