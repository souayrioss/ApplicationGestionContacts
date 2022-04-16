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
        <article class=" bg-white rounded-2xl p-9 w-1/2 xl:w-1/3 h-1/2" >
                <div class="mb-6">
                    <h2 class="text-3xl font-bold text-center mb-2 text-sky-600">Sing in</h2>
                    <p class="text-gray-400 text-center">Enter your credentials to access your account</p>
                </div>
                <form class="" method="POST" >
                    <div class="form_input mb-2">
                        <label class="text-xl font-semibold" for="UserName">User Name</label>
                        <input type="text" class="mt-1 p-2 border-solid border-2 rounded-md outline-none  w-full "  name="userName" id="UserName" placeholder="Enter your UserName" value="" > 
                    </div>
                    <div class="form_input  mb-5">
                        <label class="text-xl font-semibold" >Password</label>
                        <input type="password" class="mt-1 p-2 border-solid border-2 rounded-md outline-none w-full" name="password" id="password"  placeholder="Enter your password" value="">
                    </div>
                    <div class="mb-4">
                        <button id="log" name="login" class="inline-block text-lg font-bold py-4 leading-none border rounded-lg bg-sky-400 text-white border-white hover:border-sky-400 hover:text-sky-500 hover:bg-white mr-10 mt-4 lg:mt-0 w-full" type="submit">Sign in</button>
                    </div>
                    <p class="text-lg text-center font-semibold">Créer un compte pour accéder <a class="text-sky-500 font-bold" href="signup.php"> Sing up</a></p>
                </form>
            </article>
    </main>
    <script src="assets/js/script.js">
    </script>
        <?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['login'])){
            require_once('./class/users.php');
            extract($_POST);
            $user = new User('',$userName,$password);
            $user->loginUser();
        }
    }
?>
</body>
</html>