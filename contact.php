<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Gestion contacts</title>
</head>
<body>
    <nav class="flex items-center justify-between flex-wrap bg-blue-500  p-6 py-4">
        <div class="flex items-center flex-shrink-0 text-white   mr-6">
            <span class="text-2xl tracking-tight font-black">Contact List</span>
        </div>
        <div  >
            <ul class="flex  items-center ">
                <li class="mr-3">
                    <a href="contact.php" class=" text-white text-lg font-semibold">Home</a>
                </li>
                <li>
                    <a href="profil.php" class="flex mr-3 text-sm rounded-full ">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-10 h-10 rounded-full" src="assets/img/avatar.png" alt="user photo">
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <a href="login.php" class="inline-block text-base font-bold px-6 py-3 leading-none border rounded-lg border-blue-400 text-blue-500 bg-white hover:bg-blue-400 hover:text-white hover:border-white  mr-10 mt-4 lg:mt-0">Log out</a>
        </div>
    </nav>
    <main>
        <div class="flex  justify-between items-center  m-5 mx-10">
            <div > 
                <h3 class="text-2xl font-bold ">Contact List</h3>
            </div>
            <div >
                <button id="openModelAdd" type="button" class="inline-block text-base font-bold px-6 py-3 leading-none border rounded-lg bg-blue-500 text-white border-white hover:border-blue-700 hover:text-blue-500 hover:bg-white "  >ADD NEW CONTACT</button>
            </div>
        </div>
        <div class="flex justify-center items-center overflow-x-auto  sm:rounded-lg">
        <table class="w-full overflow-x-auto shadow-xl text-gray-500  m-10">
            <thead class="text-lg font-semibold text-gray-700 uppercase bg-gray-50 border">
                <tr>
                    <th scope="col" class="px-6 py-3 border" >Full Name</th>
                    <th scope="col" class="px-6 py-3 border" >Email</th>
                    <th scope="col" class="px-6 py-3 border" >Phone</th>
                    <th scope="col" class="px-6 py-3 border" >Adresse</th>
                    <th scope="col" colspan="2" class="px-6 py-3 border" ><span class="sr-only">Edit</span></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('./class/contact.php');
                    $contact = new Contact();
                    $contact->getConatctsByIdUser($_SESSION['id']);
                ?>
            </tbody>
        </table>
        </div>
        <div id="modelAdd" class="bg-gray-400/60  fixed top-0 left-0 w-full h-full  hidden" >
            <div class="flex  justify-center absolute top-44 left-1/3 bg-white  py-8 rounded-xl w-1/2 md:w-1/3">
                <form id="addContactForm" class="" method="POST" >
                    <h2 class="text-3xl font-bold text-center mb-3 text-sky-500 border-y-4 py-2 border-y-sky-700">Creer Contact</h2>
                    <div class=" mb-2 flex">
                        <div class="form_input flex flex-col mr-5">
                        <label class="text-xl font-semibold" for="firstName">Prénom</label>
                        <input class="mt-1 p-2 border-solid border-2 rounded-md focus:shadow-none outline-none w-full"type="text"  name="firstName" id="firstName" placeholder="Entrer le prénom" value="" >
                        </div>
                        <div class="form_input flex flex-col">
                        <label class="text-xl font-semibold" for="lastName">Nom</label>
                        <input class="mt-1 p-2 border-solid border-2 rounded-md focus:shadow-none outline-none w-full"type="text"  name="lastName" id="lastName" placeholder="Entrer le nom" value="" >  
                    </div>
                    </div>
                    <div class="form_input mb-2">
                        <label class="text-xl font-semibold" for="email">Phone</label>
                        <input class="mt-1 p-2 border-solid border-2 rounded-md focus:shadow-none outline-none w-full"type="text"  name="phone" id="phone" placeholder="Entrer E-mail" value="" > 
                    </div>
                    <div class="form_input mb-2">
                        <label class="text-xl font-semibold" for="email" >E-mail</label>
                        <input type="text" class="mt-1 p-2 border-solid border-2 rounded-md outline-none w-full" name="email" id="email"  placeholder="Entrer password" value="">
                    </div>
                    <div class="form_input mb-5">
                        <label class="text-xl font-semibold" for="address">Address</label>
                        <input type="text" class="mt-1 p-2 border-solid border-2 rounded-md outline-none w-full" name="address" id="address"  placeholder="Verifier password" value="">
                    </div>
                    <div class="mb-4 mt-4 lg:mt-0 ">
                        <input id="addContact" class=" text-lg font-bold py-1 px-5 float-right border rounded-lg bg-sky-400 text-white border-white hover:border-sky-400 hover:text-sky-500 hover:bg-white  " type="submit" value="Save" name="addContact">
                        <input id="closeModelAdd" class=" text-lg font-bold py-1 px-5 float-right border rounded-lg bg-gray-600 text-white border-white hover:border-gray-800 hover:text-gray-500 hover:bg-white mr-5 " type="submit" value="Close">
                    </div>
                    <?php 
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){   
                            if(isset($_POST['addContact'])){
                                extract($_POST);
                                $contact = new Contact();
                                $contact->setInfoContacts($firstName,$lastName,$phone,$email,$address,$_SESSION['id']);
                                $contact->addContact();
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
    </main>
    <script src="./assets/js/script.js"></script>

</body>
</html>