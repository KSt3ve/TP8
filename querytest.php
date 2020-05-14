<html>
<body>
<head>
    <title>AYAYA Ayoub</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php

include 'connexpdo.php';

$dsn = 'pgsql:host=localhost;port=5432;dbname=citations;';
$user = 'postgres';
$password = 'Slender44';
$idcon = connexpdo($dsn, $user, $password);

echo "<h1>"."Auteur de la BD"."</h1>";
echo "<table>";
echo "<tr>";
echo "<td>"."Nom"."</td>>";
echo "<td>"."Prenom"."</td>";
echo "</tr>";
$query1 = "SELECT * FROM auteur";
$result1 = $idcon->query($query1);
foreach($result1 as $data) {
    echo "<tr>";
    echo "<td>".$data['nom']."</td>>";
    echo "<td>".$data['prenom']."</td>";
    echo "</tr>";
}
echo "</table>";

echo "<br>";
echo "<h1>Citations de la BD</h1>";

$query2 = "SELECT * FROM citation";
$result2 = $idcon->query($query2);
foreach ($result2 as $data){
    echo $data['phrase']."<br>";
}

echo "<br>";
echo "<h1>Siecles de la BD</h1>";

$query3 = "SELECT * FROM siecle";
$result3 = $idcon->query($query3);
foreach ($result3 as $data){
    echo $data['numero']."<br>";
}

?>
</body>
</html>