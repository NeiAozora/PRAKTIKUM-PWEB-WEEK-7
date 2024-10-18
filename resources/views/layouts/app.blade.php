<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
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
<body>
    @include('partials.navbar')
    @include('partials.sidebar')
    <div id="content" class="p-4">
        @yield('content')
    </div>
    @include('partials.footer')
</body>
<script>
    const sidebar = document.getElementById('sidebar');
    const hamburgerNavbar = document.getElementById('hamburger-navbar');
    const hamburgerSidebar = document.getElementById('hamburger-sidebar');
    const content = document.getElementById('content');

    // Function to toggle sidebar and content margin
    function toggleSidebar() {
      sidebar.classList.toggle('hidden');
      if (sidebar.classList.contains('hidden')) {
        content.style.marginLeft = '0';
      } else {
        content.style.marginLeft = '16rem'; // 64px * 4 = 256px = 16rem (sidebar width)
      }
    }

    // Toggle sidebar on navbar hamburger click
    hamburgerNavbar.addEventListener('click', toggleSidebar);

    // Close sidebar on sidebar's hamburger click
    hamburgerSidebar.addEventListener('click', () => {
      sidebar.classList.add('hidden');
      content.style.marginLeft = '0'; // Reset content position
    });
  </script>


</html>
