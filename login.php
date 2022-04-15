<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">

    <title>Document</title>
</head>
<body class="bg-gradient-to-r from-cyan-400 via-sky-600 to-blue-800">
    <main class=" flex flex-col justify-center items-center mt-36" >
        <article class=" bg-white rounded-2xl p-9 1/2 lg:w-1/3 h-1/2" >
                <div class="border-l-8 px-2 border-l-sky-500 mb-8 ">
                    <h1 class="text-3xl font-extrabold  ">Contacts List</h1>
                </div>
                <div class="mb-6">
                    <h2 class="text-3xl font-bold text-center mb-2 text-sky-600">Sing in</h2>
                    <p class="text-gray-400 text-center">Enter your credentials to access your account</p>
                </div>
                <form class="" method="POST" >
                    <div class="form_input mb-2">
                        <label class="text-xl font-semibold" for="UserName">User Name</label>
                        <input type="text" class="mt-1 p-2 border-solid border-2 rounded-md outline-none  w-full "  name="UserName" id="UserName" placeholder="Enter your UserName" value="" > 
                        <!-- <p class="text-red-500 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                    </div>
                    <div class="form_input  mb-5">
                        <label class="text-xl font-semibold" >Password</label>
                        <input type="password" class="mt-1 p-2 border-solid border-2 rounded-md outline-none w-full" name="password" id="password"  placeholder="Enter your password" value="">
                    </div>
                    <div class="mb-4">
                        <button id="log" class="inline-block text-lg font-bold py-4 leading-none border rounded-lg bg-sky-400 text-white border-white hover:border-sky-400 hover:text-sky-500 hover:bg-white mr-10 mt-4 lg:mt-0 w-full" type="submit">Sign in</button>
                    </div>
                    <p class="text-lg text-center font-semibold">Créer un compte pour accéder <a class="text-sky-500 font-bold" href="signup.php"> Sing up</a></p>
                </form>
            </article>
    </main>
    <script src="./assets/js/script.js"></script>
</body>
</html>