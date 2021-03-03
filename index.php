<?php
session_start();
$title = "Gites";
ob_start();

?>

<div style=" background-image: url('images/topnav2.jpg')" class="w-full h-screen bg-center bg-no-repeat bg-cover">
   
   <div class="flex flex-col md:flex-row justify-center pt-40">

   <div class="flex flex-col m-5">
        <label class="font-bold text-white" for="Adresse">Adresse</label>
        <input class="border-black rounded" type="text">
    </div>

    <button class="bg-blue-300 rounded p-2 px-5 m-5">Arrivé | Depart</button>

    <div class="flex flex-col m-5">
        <label class="font-bold text-white" for="people-select">Choix du nombre de personnes</label>
            <select name="numberPeople" id="people-select" class="rounded">
                <option value="">--Nombres de personnes--</option>
                <option value="un">1</option>
                <option value="un">2</option>
                <option value="un">3</option>
                <option value="un">4</option>
                <option value="un">5</option>
                <option value="un">6</option>
            </select>
    </div>

        
   </div>

</div>

<h2 class="font-bold text-5xl p-5">Ajouts récents</h2>

<?php
    require "Classes/Database.php";
    $gites = new Database();
    $gites->getLastGites();?>

<?php
$content = ob_get_clean();
require "Templates/template.php";