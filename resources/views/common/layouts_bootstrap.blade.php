<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
</head>

<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
            HIUAuthSDK
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto"></ul>
            <span class="navbar-text">
                {{ $middlewareDisplayName }}
            </span>
        </div>
    </nav>
</header>

@if ($errors->any())
    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <div class="alert alert-danger">
            <h4 class="alert-heading">エラー</h4>
            <p>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br/>
                @endforeach
            </p>
        </div>
    </main>
@endif

@if (\Session::has('success'))
    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <div class="alert alert-success" role="alert">
            {{ \Session::get('success') }}
        </div>
    </main>
@endif

<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-user-secret" aria-hidden="true"></i>
                        ユーザー切り替え
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bug" aria-hidden="true"></i>
                        例外エラーログ取得
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        キャッシュ削除
                    </a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
