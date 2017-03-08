<?php
                if (isset($_GET['nom'], $_GET['prenom'], $_GET['age'])) {
                    echo $_GET['nom'] ." ". $_GET['prenom'] ." ". $_GET['age'];
                }else{
                    echo "Le paramètres 'age' n'existe pas.";
                }
            ?>