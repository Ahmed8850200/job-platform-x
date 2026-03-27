<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>job-platform</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black text-white font-hanken-gortesk pb-10 ">
<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
            logo
        </div>

        <div class="space-x-6 font-bold">
            <a href="/">jobs</a>
            <a href="#">carer</a>
            <a href="#">salaries</a>
            <a href="#">company</a>
        </div>
        @auth
            <div class="space-x-3 font-bold flex">
                <a href="/jobs/create">Post a job</a>
                <form method="post" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Log Out</button>
                </form>
            </div>
        @endauth
        @guest()
            <div class="space-x-6 font-bold">
                <a href="/register">Sign up</a>
                <a href="/login">Sign in</a>
            </div>
        @endguest

    </nav>
    <main class="mt-10 max-w-[986px] mx-auto" >{{$slot}}</main>
</div>


</body>
</html>
