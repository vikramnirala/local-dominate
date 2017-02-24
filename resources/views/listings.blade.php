<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        body, html {
            background: url('/img/spark-bg.png');
            background-repeat: repeat;
            background-size: 300px 200px;
            height: 100%;
            margin: 0;
        }

        .full-height {
            min-height: 100%;
        }

        .flex-column {
            display: flex;
            flex-direction: column;
        }

        .flex-fill {
            flex: 1;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }


        .text-center {
            text-align: center;
        }

        .links {
            padding: 1em;
            text-align: right;
        }

        .links a {
            text-decoration: none;
        }

        .links button {
            background-color: #3097D1;
            border: 0;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-family: 'Open Sans';
            font-size: 14px;
            font-weight: 600;
            padding: 15px;
            text-transform: uppercase;
            width: 100px;
        }
    </style>
</head>
<body>
<div class="full-height flex-column">
    <nav class="links">
        <a href="/login" style="margin-right: 15px;">
            <button>
                Login
            </button>
        </a>

        <a href="/register">
            <button>
                Register
            </button>
        </a>
    </nav>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="col-md-12">
            @foreach($sites as $site)
                <div class="row">
                    <div class="col-sm-1">
                        <p>{{ $site->id }}</p>
                    </div>
                    <div class="col-sm-5">
                        <p>{{ $site->url }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>{{ $site->hosted_server }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>{{ $site->state }}</p>
                    </div>

                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
