<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
$chambre3 = new Chambre(1, 1, 37, false, true, $regent);
$chambre4 = new Chambre(3, 1, 37, false, true, $hilton);

//Clients
$carole = new Client("Carole", "Dupoise");
$jean = new Client("Jean", "Casset");


//Réservations
$reservation1 = new Reservation("2023-06-04", "2023-06-08", $chambre1, $carole);
$reservation2 = new Reservation("2023-12-11", "2023-12-15", $chambre2, $jean);
$reservation2 = new Reservation("2022-10-10", "2022-10-11", $chambre3, $carole);

echo($hilton);
echo($hilton->displayInfo());

echo($hilton->displayReservations());
echo("<br />");
echo($regent->displayReservations());

//Réservation de Micka
echo("<br />");
echo($carole->displayInformations());
echo("<br />");
echo("<br />");
echo($hilton->displayChambresStatus());

?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    body{
        margin-left: 10px;
        margin-top: 10px;
    }
    .primary_info{
        background-color: #5fd793;
        color: white;
        padding: 5px 10px;
        width: fit-content;
        border-radius: 3px; 
    }
    .danger_info{
        background-color: red;
        color: white;
        padding: 5px 10px;
        width: fit-content;
        border-radius: 3px; 
    }
    .title{
        font-weight: bold;
        font-size: 1.2em;
        margin-bottom: 10px;

    }
    .bold{
        font-weight: bold;
    }
    p{
        margin:  0;
    }

</style>