<?php
if (isset($_GET["batiment"])) {
    echo $_GET["batiment"]."<br/>";
} else {
    echo "Ce parametre n'existe pas"."<br/>";
}
if (isset($_GET["salle"])){
    echo $_GET["salle"]."<br/>";
} else {
    echo "Ce parametre n'existe pas"."<br/>";
}
?>
