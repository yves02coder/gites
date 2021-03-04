<?php
session_start();
$title = "Gites";
ob_start();

?>

<div style=" background-image: url('images/topnav2.jpg')" class="w-full h-screen bg-center bg-no-repeat bg-cover">
    <form action="found.php" method="post">
   <div class="flex flex-col md:flex-row justify-center pt-40">

   <div class="flex flex-col my-5">
        <label class="font-bold text-white"  for="addresse" >addresse</label>
        <input class="border-black rounded" name="addresse" type="text">
    </div>

    <!--<button class="bg-blue-300 rounded p-2 px-5 m-5">Arrivé | Depart</button>-->
       <!-- component -->

       <div class="group inline-block">

           <button name="arrivée" class="outline-none focus:outline-none border px-3 py-1 bg-white rounded-sm flex items-center  min-w-32 mx-10 mt-10">
               <span class="pr-1 font-semibold flex-1 " >Arrivé | Depart</span>
               <span>
      <svg
              class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20">
        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
      </svg>
    </span>
           </button>

           <ul
                   class="bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute
  transition duration-150 ease-in-out origin-top min-w-32">
              <li  class="rounded-sm px-3 py-1 hover:bg-gray-100"> <label label for="start" name="date_arrivee">date d'arrivée</label>
            <input type="date" id="start" name="date_arrivee"
                        value="2020-07-22"
                        min="2020-01-01" max="2025-12-31">
              </li>
               <li class="rounded-sm px-3 py-1 hover:bg-gray-100"><label for="start" name="date_depart">date de départ</label>
                   <input type="date" id="start" name="date_depart"
                          value="2018-07-22"
                          min="2018-01-01" max="2018-12-31">
               </li>

           </ul>
       </div>

       <style>


           }

           li>ul                 { transform: translatex(100%) scale(0) }
           li:hover>ul           { transform: translatex(101%) scale(1) }
           li > button svg       { transform: rotate(-90deg) }
           li:hover > button svg { transform: rotate(-270deg) }


           .group:hover .group-hover\:scale-100 { transform: scale(1) }
           .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
           .scale-0 { transform: scale(0) }
           .min-w-32 { min-width: 8rem }
       </style>
   <!----------------------        -------------------------------------------------->
    <div class="flex flex-col my-5">
        <label class="font-bold text-white" for="people-select" name="nbr_personne">Choix du nombre de personnes</label>
            <select name="nbr_personne" id="nbr_personne" class="rounded">
                <option value="">--Nombres de personnes--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
    </div>

        
   </div>
<div class="flex h-screen">
    <div class="m-auto mt-20">
            <button type="submit" value="valider" name="arrivee" class=" bg-blue-300 rounded p-10">valider </button>
    </div>
</div>

</div>

    </form>

<h2 class="font-bold text-5xl p-5">Ajouts récents</h2>

<?php
    require "Classes/Database.php";
    $gites = new Database();
    $gites->getLastGites();?>

<?php
$content = ob_get_clean();
require "Templates/template.php";