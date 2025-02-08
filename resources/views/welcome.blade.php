<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Job Board</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <!-- Navbar -->
  <nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between">
        <div class="flex space-x-7">
          <!-- Logo -->
          <div>
            <a href="#" class="flex items-center py-4 px-2">
              <span class="font-semibold text-gray-500 text-2xl">Job Board</span>
            </a>
          </div>
          <!-- Primary Navbar items -->
          <div class="hidden md:flex items-center space-x-1">
            <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Home</a>
            <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Jobs</a>
            <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Companies</a>
            <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Career Tips</a>
          </div>
        </div>
        <!-- Secondary Navbar items -->
        <div class="hidden md:flex items-center space-x-3">
          <a href="#" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-blue-500 hover:text-white transition duration-300">Log In</a>
          <a href="{{ route('register') }}" class="py-2 px-2 font-medium text-white bg-blue-500 rounded hover:bg-blue-400 transition duration-300">Sign Up</a>
        </div>
        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button class="outline-none mobile-menu-button">
            <svg class="w-6 h-6 text-gray-500 hover:text-blue-500" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- Mobile Menu -->
    <div class="hidden mobile-menu">
      <ul class="">
        <li><a href="#" class="block text-sm px-2 py-4 text-white bg-blue-500 font-semibold">Home</a></li>
        <li><a href="#" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Jobs</a></li>
        <li><a href="#" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Companies</a></li>
        <li><a href="#" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Career Tips</a></li>
      </ul>
    </div>
  </nav>

  <script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });
  </script>


<main>
  {{ $slot }}
</main>


</body>
</html>