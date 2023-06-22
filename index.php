<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php

spl_autoload_register(function ($class) {
    require_once "Classes/$class.class.php";
});

require "utils/DisplayNote.php";

//Hotels
$hilton = new Hotel("Hilton", "10 route de la gare", 67000, "STRASBOURG", 4);
$regent = new Hotel("Regent", "9 rue du bois", 75000, "Paris", 2);

//Chambres
$chambre1 = new Chambre(1, 2, 57, true, true, $hilton);
$chambre2 = new Chambre(2, 4, 142, true, true, $hilton);
$chambre3 = new Chambre(3, 1, 37, false, true, $hilton);

//Clients
$carole = new Client("Carole", "Dupoise");
$jean = new Client("Jean", "Casset");


//Réservations
$reservation1 = new Reservation("2023-06-04", "2023-06-05", $chambre1, $carole);
$reservation1 = new Reservation("2023-12-11", "2023-12-15", $chambre3, $jean);

//Premier affichage
echo($hilton);
echo($hilton->displayInfo());

//Deuxieme affichage
echo($hilton->displayReservations());
echo("<br />");
echo($regent->displayReservations());

?>

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
</style>