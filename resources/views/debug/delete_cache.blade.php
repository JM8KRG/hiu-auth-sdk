@extends('common.layouts_bootstrap')
@section('content')
    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <div class="alert alert-warning">
            <h4 class="alert-heading">キャッシュを削除しますか？</h4>
            cache, config, route, viewのキャッシュを削除します
        </div>
        <a href="{{ action('Debug\Cache\DeleteCacheController@deleteCache') }}" class="btn btn-outline-danger btn-lg btn-block">キャッシュを削除する</a>
    </main>
@endsection
