<html>
<head>
    <tiitle>this is main page</tiitle>
</head>
<body>
    @section('header')
        <div class="header">
            <h2>this is header part</h2>
        </div>
       @show
        <div class="content">
            @yield('content')

        </div>
       @section('footer')
           <div class="footer">
               <h2>this is footer part</h2>
           </div>
           @show
</body>
<style>
    .header{
        background-color: aqua;
        padding: 20px;
        text-align: center;
    }
    .footer{
        background-color: bisque;
        padding: 20px;
        text-align: center;
        bottom: 0;
        position: center;
    }
    .content{
        height: 200px;
        background-color: orange;
        padding: 20px;
    }
    body{
        margin: 0;
    }
</style>
</html>
