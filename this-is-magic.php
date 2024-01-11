<?php
    class Magic
    {

        public string $card = 'As';
        
        function __construct(){
            echo ("Attribue les valeurs données aux propriétés de l'objet");
        }

        function __destruct()
        {
            echo ("Détruit l'objet");
        }

        function __get($name)
        {
            echo ("Renvoie le nom de l'objet");
        }

        function __set($name, $value)
        {
            echo ("Modifie les propriétés");
        }

        function __isset($name)
        {
            echo ("Vérifie si une propriété est set");
        }

        function __toString()
        {
            echo ("Renvoie les propriétés sous forme de string");
        }


    }
?>