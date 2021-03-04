<?php
session_start();
$title = "";
ob_start();
$img_gite="img_gite";
?>
<div style="background-color: antiquewhite" class="w-full h-screen bg-center bg-no-repeat bg-cover">
<div class="container ml-20">
    <h1 class="mb-8">
        gites
    </h1>
    <form action="found.php" method="post">
    <table class="text-left w-full">
        <thead class="bg-black flex text-white w-full">
        <tr class="flex w-full mb-4">
            <th  class="p-4 w-1/4" >addresse</th>
            <th class="p-4 w-1/4" >date d'arrivée</th>
            <th class="p-4 w-1/4" >date de départ</th>
            <th class="p-4 w-1/4">choix du nombre de personne</th>
            <th  class="p-4 w-1/4" >gite</th>
        </tr>
        </thead>

        <tbody class="bg-grey-light flex flex-col items-center justify-between  w-full" style="height: auto;">
        <tr class="flex w-full mb-4">
            <td class="p-4 w-1/4" value="adresse" ><?=$_POST['addresse'] ?></td>
            <td class="p-4 w-1/4"value="date_arrivee"><?=$_POST['date_arrivee'] ?></td>
            <td class="p-4 w-1/4"value="date_depart"><?=$_POST['date_depart'] ?></td>
            <td class="p-4 w-1/4" value="nbr_personne"><?=$_POST['nbr_personne'] ?></td>
            <td class="p-4 w-1/4" value="img_gite"><img src="<?=$row=$img_gite?></td>

        </tr>
        </tbody>
    </table>
    </form>
</div>
</div>

<?php
require "Classes/Database.php";
$gites = new Database();
//$gites->getLastGites();?>

<?php
$content = ob_get_clean();
require "Templates/template.php";