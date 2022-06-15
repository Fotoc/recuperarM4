<?php
$conn = mysqli_connect("localhost", "root", "1234", "pelicules");


$affectedRow = 0;

$xml = simplexml_load_file("xml/pelicules.xml") or die("Error: Cannot create object");

foreach ($xml->children() as $row) {
    $titol = $row->titol;
    $any = $row->any;
    $genere = $row->genere;

    $sql = "INSERT INTO Pelis(titol,any,genere) VALUES ('" . $titol . "','" . $any . "','" . $genere . "')";

    $result = mysqli_query($conn, $sql);

    if (!empty($result)) {
        $affectedRow++;
    } else {
        $error_message = mysqli_error($conn) . "n";
    }
}
?>
<?php
if ($affectedRow > 0) {
    $message = $affectedRow . " records inserted";
} else {
    $message = "No records inserted";
}

?>