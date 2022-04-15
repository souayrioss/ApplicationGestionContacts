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
                <li class="mr-7">
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
        <figure class="md:flex justify-start  p-8 md:p-0 mt-20">
            <img class="w-24 h-24 md:w-48 md:h-auto  rounded-full mx-20" src="assets/img/avatar.png"" width="384" height="512">
            <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                <blockquote>
                    <p class="text-2xl font-bold">
                    Welcome “Jone Doe”
                    </p>
                </blockquote>
                <figcaption class="font-medium">
                    <p class="text-sky-500 text-lg font-bold mb-2">
                    Sign Up date :: “<span class="text-gray-500 text-lg font-semibold ">dd/mm/yyyy</span>”
                    </p>
                    <p class="text-sky-500 text-lg font-bold">
                    Last login :: “ <span>dd/mm/yyyy</span>”
                    </p>
                </figcaption>
                </div>
            </figure>
    </main>
</body>
</html>