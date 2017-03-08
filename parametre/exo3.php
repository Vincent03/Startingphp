<?php 
 if (isset($_GET['datedebut'], $_GET['datefin'])){
                    echo $_GET['datedebut'] ." ". $_GET['datefin'];
                }else{
                    echo "le parametre n'existe pas";
                }
                