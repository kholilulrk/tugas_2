<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.css')
    @include('components.js')
    @include('components.meta')
    <title>Document</title>
</head>
<body id="page-top">
    <div id="wrapper">

        @include('partials.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
          <!-- Main Content -->
          <div id="content">
            @include('partials.topbar')
                @yield('pages')
            @include('partials.footer')
          </div>  
        </div>
      </div>
</body>
</html>