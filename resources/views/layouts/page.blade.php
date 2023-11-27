<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-color: rgb(255, 234, 222);
        }

        body * {
            margin: 0px;
            padding: 0px;
        }

        .right {
            display: flex;
            justify-content: right;
        }

        header,
        footer {
            background-color: rgb(199, 154, 82);
        }

        form input {
            width: 250px;
            margin: 3px;
            padding: 3px 5px;
            color: white;
            background-color: rgb(228, 157, 110);
        }

        header {
            display: flex;
            justify-content: space-between;
            padding: 30px;
            margin-bottom: 100px;
        }

        #nav_list {
            display: flex;
            padding: 0px;
            width: min-content;
            list-style-type: none;
            border: 1px solid white;
        }

        #nav_list li {
            width: 100px;
            padding: 10px 20px;
            border: 1px solid white;
            color: white;
            background-color: rgb(209, 114, 30);
            text-align: center
        }

        main {
            display: flex;
            justify-content: space-around;
        }

        table {
            border: 3px solid black;
            color: white;
            width: 400px;
            margin-top: 40px;
            background-color: rgb(180, 92, 33);
        }

        th,
        td {
            border: 1px dotted white;
        }

        td {
            text-align: center;
            width: 250px;
        }

        footer {
            margin-top: 100px;
            padding: 50px 100px;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <header>
        <h1>HOTEL:SAKURAI</h1>
        @if (Auth::check())
            <a href="/hotel/logout">ログアウト</a>
        @else
            <a href="/hotel/register">新規登録</a>
            <a href="/hotel/login">ログイン</a>
        @endif
        <nav>
            <ul id="nav_list">
                <li><a href="/hotel/index">ホーム</a></li>
                {{-- <li><a href="/hotel/booking">ご予約</a></li> --}}
                <li><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            @yield('content')
        </div>
    </main>
    <footer>
        @yield('footer')
        <div>
            <h2>案内</h2>
            <ul>
                <li><a href="/hotel/index">ホーム</a></li>
                {{-- <li><a href="/hotel/booking">ご予約</a></li>
                <li><a href="/hotel/login">新規登録・ログイン</a></li> --}}
                <li><a href="#">お問い合わせ</a></li>
            </ul>
        </div>
        <h1>HOTEL:SAKURAI</h1>
    </footer>
</body>

</html>
