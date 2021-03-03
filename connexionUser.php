<?php
session_start();
$title = "Gites";
ob_start();
?>



<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">Création d'un compte sur Gites</h1>
      <p class="leading-relaxed mt-4">En vous connectant vous acceder à la location de gites et à l'ajout de votre gites sur la plateforme.</p>
    </div>


    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Se connecter</h2>
      <form action="" method="post">
        <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Nom d'utilisateur</label>
                <input type="text" id="name" name="name_user" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
                <label for="password" class="leading-7 text-sm text-gray-600">Mot de passe</label>
                <input type="password" id="password" name="password_user" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
            <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Connexion</button>
        </div>
    </form>
  </div>

</section>


<?php
if(isset($_POST["validUser"])){
  $user = new Database;
  $user->userConnexion();


  ?>

<div class="bg-green-50 border-t-4 border-green-200 rounded-b text-teal-darkest px-4 py-3 shadow-md my-2" role="alert">
  <div class="flex">
    <svg class="h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
    <div>
      <p class="font-bold">Vous etes connecté.</p>
      <p class="text-sm">Make sure you know how these changes affect you.</p>
    </div>
  </div>
</div>

<?php
}
$content = ob_get_clean();
require "Templates/template.php";