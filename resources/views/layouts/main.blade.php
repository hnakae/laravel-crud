<html>
    <head>
      <!-- yield: find and replace -->
        <title>App Name - @yield('title')</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      <header>
        <div class="container">
          <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Search</a>
            <a href="#">Contact</a>
          </nav>
        </div>
      </header>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
