<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
         {{--<h1>All users:</h1>--}}
         {{--@foreach($users as $user)--}}
         {{--<li>{{link_to("users/{$user->username}",$user->username)}}</li>--}}
         {{--<li>{{$user->username}}</li>--}}
         {{--@endforeach--}}

         @yield('content')

         @yield('something')
    </body>
</html>