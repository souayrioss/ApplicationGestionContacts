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
    <nav class="flex items-center justify-between flex-wrap  p-6 py-4">
        <div class="flex items-center flex-shrink-0 text-blue-500  mr-6">
            <span class="text-2xl tracking-tight font-black">Contact List</span>
        </div>
        <div>
            <a href="login.php" class="inline-block text-base font-bold px-6 py-3 leading-none border rounded-lg bg-blue-400 text-white border-white hover:border-blue-400 hover:text-blue-500 hover:bg-white mr-10 mt-4 lg:mt-0">Sign In</a>
        </div>
    </nav>
    <main>
        <div class="bg-cover bg-center px-16 py-48" style="background-image: url(assets/img/image-bg.jpg)">
            <h1 class="text-6xl text-white font-bold text-center ">Vos Contacts, sont le moteur de votre réussite !</h1></br>
            <p class=" text-3xl text-white  text-center ">Ajouter facilement des contacts, organisez-les sans effort. Mettez leurs données à jour, visualisez les actions quotidiennes à réaliser par les commerciaux.</p>
            <p class=" text-xl text-white  text-center "><a class="text-black font-semibold" href="signup.php">sign up</a> pour creer voter contacts list.</p>
            <p class=" text-xl text-white  text-center ">vous etes deja un compte!!<a class="text-black font-semibold" href="login.php"> login ici</a></p>
        </div>
        <article class="bg-gray-200 pb-10">
            <section class="p-16 " >
                <h1 class="text-5xl  font-bold text-center ">Etablissez une relation durable avec vos clients</h1></br>
                <p class=" text-md text-gray-600 text-center ">Les bons prospects sont envoyés aux bons commerciaux pour un suivi efficace. Ceci est un aspect essentiel pour toute équipe de vente qui souhaite développer sa clientèle !</p>
            </section>
            <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-10 mx-10 ">
                <div class="p-24 md:p-12 shadow-inner bg-white rounded-2xl">
                    <h2 class="text-3xl font-bold text-center mb-6">Ajoutez, organisez, suivez vos clients et prospects sans effort</h2>
                    <p><b>Contacts List Manager</b>  vous permet de centraliser tous vos contacts : clients, prospects et fournisseurs. Retrouvez les informations essentielles de chaque contact : le chiffre d’affaire réalisé, l’historique du suivi commercial, les devis, les factures et les autres documents de ventes émis par mail ou imprimés etc. Classez vos clients en fonction de leur activité ou de leur région pour des statistiques de vente précises.</p>
                </div>
                <div class="p-24 md:p-12 shadow-inner bg-white rounded-2xl">
                    <h2 class="text-3xl  font-bold text-center mb-6">Comment fidélisez vos clients</h2>
                    <p>Renforcez le lien de confiance. Offrez un service de qualité irréprochable. Avec la gestion d'affaires, <b>Contacts List Manager</b> vous donne accès à un CRM simplifié qui vous donne une visibilité inédite sur le travail de vos commerciaux. Suivez les affaires initiées par vos commerciaux, prévisualisez votre CA probable, assignez des actions à réaliser et partagez les informations essentielles à la réussite de vos actions commerciales. Gagnez en productivité en améliorant le fonctionnement interne de votre entreprise !</p>
                </div>
                <div class="p-24 md:p-12 shadow-inner bg-white rounded-2xl">
                    <h2 class="text-3xl  font-bold text-center mb-6">N'ignorez rien des actions qui pourraient vous amener de nouveaux clients</h2>
                    <p>Le module de gestion des contacts intègre un suivi des actions à réaliser vis-à-vis des prospects, mais aussi des clients. Une liste documentée est créée dès qu'une nouvelle action est enregistrée, la date, l'heure, le détail de l'action a faire, le nom du commercial en charge ainsi que le délai maximal d'exécution. Pour chaque commercial et chaque directeur, la liste des actions est un indicateur de l'efficacité des actions commerciales.</p>
                </div>
            </section>
        </article>
    </main>
    <footer class=" p-0 m-0">
        <div class="w-full bg-blue-400 py-3 mb-0 "></div>
        <div class=" flex justify-center  my-10"><a href="index.php" class="text-3xl font-extrabold ">Contacts List</a></div>
        <div class=" flex  justify-around items-center mb-10">
            <div class=" text-center mr-2">
                <h4 class=" text-blue-400 text-xl font-bold mb-3">Contacts utiles</h4>
                <p class=" text-black font-bold mb-1">Pour plus d'iformation</p>
                <p class=" text-green-400 font-bold fs-5 mb-1">089 130 77 55</p>
                <p class=" text-black font-bold mb-1">la plateforme téléphonique</p>
                <p class=" text-green-400 font-bold text-lg mb-1">123 45 67 89</p>
            </div>
            <div class=" ms-2 ">
                <ul class=" list-unstyled ">
                    <li class="mb-2">
                        <a class="text-xl text-gray-600 font-semibold underline decoration-2 hover:uppercase" href="login.php">Login</a>
                    </li>
                    <li >
                        <a class="text-xl text-gray-600 font-semibold underline decoration-2 hover:uppercase" href="signup.php">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-blue-400 py-3 mb-0 w-full"></div>
    </footer>
</body>
</html>