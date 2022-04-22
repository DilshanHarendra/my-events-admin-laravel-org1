<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <meta name="csrf-tocken" content="{{csrf_token()}}">
    <script>window.Laravel = {csrfTocken:'{{csrf_token()}}' } </script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        body{
            background-color: #f8f8f8;
        }

    </style>

</head>
<body>
    <div class=" grid place-items-center h-screen  p-5 pt-0">
        <div class="card bg-white shadow md:w-2/5 w-full mx-auto   py-4  text-gray-500 " style="max-width: 400px">
            <h1 class="text-3xl text-center">Welcome <span class="text-myprimary">O2O Client Login</span></h1>
            <h6 class="text-center ">Please login to your account</h6>
            <form class="flex flex-col px-5 mx-5 mt-4" action="">
                <label class="mt-2" for="">Email Address</label>
                <input class="bg-blue-100 py-1 mt-1" type="email" name="email" >
                <label class="mt-2" for="">Password</label>
                <input class="bg-blue-100 py-1 mt-1" type="password" autocomplete="true" name="passowrd" >

                <a href="" class="block ml-auto mt-4 ">Forgot Password</a>
                <button class="bg-myprimary py-1 text-white mt-5 mb-2">Login</button>
            </form>


        </div>
    </div>
</body>
</html>
