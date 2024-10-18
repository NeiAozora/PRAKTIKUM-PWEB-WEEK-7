<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tailwind Page with Navbar, Sidebar, and Card</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Sidebar transition */
    #sidebar {
      transition: transform 0.3s ease-in-out;
    }
    #sidebar.hidden {
      transform: translateX(-100%);
    }
    /* Content transition */
    #content {
      transition: margin-left 0.3s ease-in-out;
    }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Hamburger Icon (Navbar) -->
      <button id="hamburger-navbar" class="text-white focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
      <!-- Logo/Title -->
      <div class="text-xl">My Website</div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div id="sidebar" class="bg-blue-800 text-white w-64 h-screen fixed top-0 left-0 z-10 hidden lg:block">
    <!-- Close Hamburger Icon (Sidebar) -->
    <div class="p-4">
      <button id="hamburger-sidebar" class="text-white focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <ul class="p-4 space-y-4">

      <li><a href="#" class="hover:text-gray-300">Logout</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div id="content" class="p-4">
    <div class="container mx-auto">
      <!-- Card -->
      <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Table Data</h2>
        <!-- Table -->
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="py-2 px-4 bg-gray-200">ID</th>
              <th class="py-2 px-4 bg-gray-200">Name</th>
              <th class="py-2 px-4 bg-gray-200">Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-2 px-4">1</td>
              <td class="py-2 px-4">John Doe</td>
              <td class="py-2 px-4">john@example.com</td>
            </tr>
            <tr>
              <td class="py-2 px-4">2</td>
              <td class="py-2 px-4">Jane Smith</td>
              <td class="py-2 px-4">jane@example.com</td>
            </tr>
            <tr>
              <td class="py-2 px-4">3</td>
              <td class="py-2 px-4">Alice Johnson</td>
              <td class="py-2 px-4">alice@example.com</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>



</body>
</html>
