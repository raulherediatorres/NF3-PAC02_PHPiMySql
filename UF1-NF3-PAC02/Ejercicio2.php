<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'INSERT INTO movie (movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    	VALUES ("Pacific Rim", 1, 2014, 1, 2),
               ("Ocho apellidos catalanes", 2, 2019, 2, 1),
               ("Solo en casa", 3, 2022, 3, 3)';

mysqli_query($db,$query) or die(mysqli_error($db));

$query = 'INSERT INTO movietype (movietype_label)
    	VALUES ("Ficcion"),
	       ("Comedia"),
	       ("Terror")';
        
mysqli_query($db,$query) or die(mysqli_error($db));

$query  = 'INSERT INTO people (people_fullname, people_isactor, people_isdirector)
    VALUES ("Santiago Segura", 1, 0),
           ("Mario Casas", 1, 0),
           ("Apolonia Lapiedra", 0, 1)';
        
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Has añadido tres filas correctamente en cada tabla!';
?>
