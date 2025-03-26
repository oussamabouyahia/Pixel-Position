<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="bg-black text-white">
<nav class="flex justify-between items-center py-4 border-white/10 border-b-2 ml-3 mr-5">
    <div><a href="">
    <img src={{ Vite::asset('resources/images/logo.svg') }} alt="">
    </a></div>
    <div class="flex space-x-6">

    <a href="" class="hover:text-green-600 hover:font-bold hover:underline">jobs</a>
    <a href="" class="hover:text-green-600 hover:font-bold hover:underline">Careers</a>
    <a href="" class="hover:text-green-600 hover:font-bold hover:underline">Salaries</a>
    <a href="" class="hover:text-green-600 hover:font-bold hover:underline">Companies</a>
</div>
    <div><a href="" class="hover:text-green-600 hover:font-bold hover:underline">Post a Job</a></div>
</nav>
<main class="mt-10 max-w-[986px] mx-auto">{{ $slot }}</main>
</body>
</html>
