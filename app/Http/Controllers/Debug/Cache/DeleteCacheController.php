<?php

namespace HiuAuthSDK\Http\Controllers\Debug\Cache;

use Illuminate\Http\Request;
use HiuAuthSDK\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class DeleteCacheController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('debug.delete_cache');
    }

    public function deleteCache()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');

        \Session::flash('success', 'キャッシュ削除コマンドを実行しました');
        return redirect()->back();
    }
}
