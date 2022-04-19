<?php 
    require_once('./class/contact.php');
    $contact = new Contact();
    $cnt = $contact->getConatctById($_POST['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Document</title>
</head>
<body>
<div class="flex  justify-center absolute top-44 left-1/3 bg-white  py-8 rounded-xl w-1/2 md:w-1/3">
                <form id="addContactForm" class="" method="POST" >
                    <h2 class="text-3xl font-bold text-center mb-3 text-sky-500 border-y-4 py-2 border-y-sky-700">Edit Contact</h2>
                    <div class=" mb-2 flex">
                    <input type="hidden"  name="id" value="<?= $cnt['id'] ?? '' ?>" >
                        
                        <div class="form_input flex flex-col mr-5">
                        <label class="text-xl font-semibold" for="firstName">Prénom</label>
                        <input class="mt-1 p-2 border-solid border-2 rounded-md focus:shadow-none outline-none w-full"type="text"  name="firstName" id="firstName" placeholder="Entrer le prénom" value="<?= $cnt['firstName'] ?? '' ?>" >
                        </div>
                        <div class="form_input flex flex-col">
                        <label class="text-xl font-semibold" for="lastName">Nom</label>
                        <input class="mt-1 p-2 border-solid border-2 rounded-md focus:shadow-none outline-none w-full"type="text"  name="lastName" id="lastName" placeholder="Entrer le nom" value="<?= $cnt['lastName'] ?? '' ?>" >  
                    </div>
                    </div>
                    <div class="form_input mb-2">
                        <label class="text-xl font-semibold" for="email">Phone</label>
                        <input class="mt-1 p-2 border-solid border-2 rounded-md focus:shadow-none outline-none w-full"type="text"  name="phone" id="phone" placeholder="Entrer E-mail" value="<?= $cnt['phone'] ?? '' ?>" > 
                    </div>
                    <div class="form_input mb-2">
                        <label class="text-xl font-semibold" for="email" >E-mail</label>
                        <input type="text" class="mt-1 p-2 border-solid border-2 rounded-md outline-none w-full" name="email" id="email"  placeholder="Entrer password" value="<?= $cnt['email'] ?? '' ?>">
                    </div>
                    <div class="form_input mb-5">
                        <label class="text-xl font-semibold" for="address">Address</label>
                        <input type="text" class="mt-1 p-2 border-solid border-2 rounded-md outline-none w-full" name="address" id="address"  placeholder="Verifier password" value="<?= $cnt['address'] ?? '' ?>">
                    </div>
                    <div class="mb-4 mt-4 lg:mt-0 ">
                        <input id="addContact" class=" text-lg font-bold py-1 px-5 float-right border rounded-lg bg-sky-400 text-white border-white hover:border-sky-400 hover:text-sky-500 hover:bg-white  " type="submit" value="Save" name="editContact">
                    </div>
                    <?php 
                    
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){   
                            if(isset($_POST['editContact'])){
                                extract($_POST);
                                $contact = new Contact();
                                $contact->editContact($_POST['id'],$firstName,$lastName,$phone,$email,$address);
                                    echo '<script>window.location="contact.php"</script>';
                                

                            }
                        }
                    ?>
                </form>
            </div>
</body>
</html>