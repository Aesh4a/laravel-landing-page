<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesha Agdy Putri Chika Mayvrilla XI PPLG 4</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-50 text-gray-800">
    <header class="flex justify-between items-center p-5 bg-green-50 shadow">
        <div class="logo">
            <h1 class="text-2xl font-bold text-green-800">FoodTime</h1>
        </div>
        <nav class="flex items-center space-x-4">
            <a href="#home" class="text-gray-800 hover:text-green-600">Home</a>
            <a href="#blog" class="text-gray-800 hover:text-green-600">Blog</a>
            <a href="#about" class="text-gray-800 hover:text-green-600">About us</a>
            <div class="lang-switch flex items-center space-x-1">
                <a href="#" class="text-green-800 hover:text-green-600">EN</a>
                <span>|</span>
                <a href="#" class="text-green-800 hover:text-green-600">FR</a>
            </div>
        </nav>
        <div class="login-cart flex items-center space-x-4">
            <button class="bg-green-800 text-white px-4 py-2 rounded">Login</button>
            <div class="cart">
                <img src="cart.png" alt="Cart" class="w-6 h-6">
            </div>
        </div>
    </header>

    <section id="home" class="flex flex-col md:flex-row items-center p-10 bg-green-50">
        <div class="hero-text md:w-1/2">
            <h2 class="text-3xl font-bold text-green-800">Order food online from your favourite local restaurants.</h2>
            <p class="mt-2 text-lg">Freshly made food delivered to your door.</p>
            <div class="location-search mt-4 flex">
                <input type="text" placeholder="Enter your location" class="border border-gray-300 p-2 rounded w-full">
                <button class="bg-green-800 text-white px-4 py-2 rounded ml-2">Search</button>
            </div>
        </div>
        <div class="hero-image md:w-1/2 mt-4 md:mt-0">
            <img src="food.png" alt="Food Image" class="w-full h-auto rounded-lg">
        </div>
        <div class="people-delivered text-center mt-4">
            <span class="text-4xl font-bold text-green-800">200k+</span>
            <p class="text-gray-600">People Delivered</p>
        </div>
    </section>

    <section id="blog" class="flex flex-col md:flex-row items-center p-10 bg-green-100">
        <div class="explore-text md:w-1/2">
            <h2 class="text-3xl font-bold text-green-800">Explore your favorite city food's</h2>
            <p class="mt-2 text-lg">Lorem ipsum dolor sit amet consectetur. Ornare massa nunc nibh tristique. Non ligula tristique ut ut libero sit convallis maecenas. At egestas auctor porta mattis.</p>
            <button class="bg-green-800 text-white px-4 py-2 rounded mt-4">Explore ➜</button>
        </div>
        <div class="explore-image md:w-1/2 mt-4 md:mt-0">
            <img src="explore.png" alt="Explore Image" class="w-full h-auto rounded-lg">
        </div>
    </section>

    <section class="features grid grid-cols-1 md:grid-cols-3 gap-4 p-10 bg-white">
        <div class="feature text-center p-4">
            <img src="wide.png" alt="Wide Selection" class="w-16 h-16 mx-auto">
            <h4 class="text-xl font-bold mt-2">Wide selection of restaurants</h4>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur.</p>
        </div>