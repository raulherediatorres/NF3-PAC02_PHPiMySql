<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'SELECT m.movie_name AS Pelicula, p1.people_fullname AS Director, p2.people_fullname AS ActorPrincipal
        FROM movie AS m
        LEFT JOIN people AS p1 ON m.movie_director = p1.people_id
    	LEFT JOIN people AS p2 ON m.movie_leadactor = p2.people_id';
 
$result = mysqli_query($db, $query) or die(mysqli_error($db));

echo '<h1>Lista de peliculas, actores y directores: </h1>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<p><strong>Pelicula:</strong> ' . $row['Pelicula'] . '</p>';
    echo '<p><strong>Director:</strong> ' . $row['Director'] . '</p>';
    echo '<p><strong>Actor:</strong> ' . $row['ActorPrincipal'] . '</p>';
    echo '<hr>';
}

mysqli_close($db);
?>
