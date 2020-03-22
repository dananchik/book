@section('menu')
    <nav role='navigation'>
        <ul>
            <li><a href="{{ route('newUser') }}"> добавить пользователя</a></li>
            <li><a href="{{ route('newGroupForm') }}"> добавить группу пользователей</a></li>
            <li><a href="{{ route('users') }}">список пользователей</a></li>
            <li><a href="{{ route('logout') }}">выйти</a></li>
        </ul>
    </nav>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato);

        *, *:before, *:after{
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'Lato', sans-serif;
        }

        /*| Navigation |*/

        nav{
            background: #fff;
            box-shadow: 0 3px 10px -2px rgba(0,0,0,.1);
            border: 1px solid rgba(0,0,0,.1);
            width: 100vw;
            height: 90px;
        }
        nav ul{
            width: 100vw;
            list-style: none;
            position: relative;
            margin-right: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        nav ul li{
            float: left;
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        nav ul li:hover{background: rgba(0,0,0,.15);}
        nav ul li:hover > ul{display: block;}
        nav ul li{
            float: left;
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }
        nav ul li a{
            display: block;
            padding: 30px 20px;
            color: #222;
            font-size: .9em;
            letter-spacing: 1px;
            text-decoration: none;
            text-transform: uppercase;
        }
        nav ul ul{
            display: none;
            background: #fff;
            position: absolute;
            top: 100%;
            box-shadow: -3px 3px 10px -2px rgba(0,0,0,.1);
            border: 1px solid rgba(0,0,0,.1);
        }
        nav ul ul li{float: none; position: relative;}
        nav ul ul li a {
            padding: 15px 30px;
            border-bottom: 1px solid rgba(0,0,0,.05);
        }
        nav ul ul ul {
            position: absolute;
            left: 100%;
            top:0;
        }
    </style>
