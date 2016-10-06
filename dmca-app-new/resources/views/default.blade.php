<!DOCTYPE html>
<html>
    <head>
        <title>DMCA APP</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>

        {!! Html::style('css/bootstrap.min.css') !!} 
      {!! Html::style('css/mystyle.css') !!} 
 

      {!! Html::style('font-awesome/css/font-awesome.min.css') !!} 

      {!! HTML::script('js/jquery-1.11.1.min.js') !!}
        {!! HTML::script('js/bootstrap.min.js') !!}
        {!! HTML::script('js/common.js') !!}

    </head>
    <body>

        @include('flash::message')
       
        @include('partials.nav')

        <div class="container">

                @yield('content')
    
        </div>

        <div class="flash">
            Updated!
        </div>
    
    </body>
</html>
