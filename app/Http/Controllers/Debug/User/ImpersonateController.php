<?php

namespace HiuAuthSDK\Http\Controllers\Debug\User;

use HiuAuthSDK\Services\Shibboleth\ShibbolethService;
use Illuminate\Http\Request;
use HiuAuthSDK\Http\Controllers\Controller;

class ImpersonateController extends Controller
{
    /**
     * ユーザー切り替え
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('debug.impersonate');
    }

    /**
     * ユーザー手動切り替え
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function manualUpdate(Request $request)
    {
        $validate = \Validator::make($request->all(), [
            'display_name' => 'required',
            'uid' => 'required',
            'employee_number' => 'required|numeric',
            'unscoped_affiliation' => 'required',
            'mail' => 'required|email',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $displayName = $request->get('display_name');
        $uid = $request->get('uid');
        $employeeNumber = $request->get('employee_number');
        $unscopedAffiliation = $request->get('unscoped_affiliation');
        $mail = $request->get('mail');

        // ユーザーインスタンスを生成する
        $accessUser = ShibbolethService::makeUserInstance($displayName, $uid, $employeeNumber, $unscopedAffiliation, $mail, true);
        // 既存のセッションを更新する
        $request->session()->put('access_user', $accessUser);

        \Session::flash('success', 'ユーザー切り替えを有効にしました');
        return redirect()->action('Debug\User\ImpersonateController@index');
    }

    /**
     * ユーザー切り替えを無効にする
     */
    public function revertUser()
    {
        // ユーザーインスタンスを取得する
        $accessUser = ShibbolethService::getUserInstance();
        // 既存のセッションを更新する
        \Session::put('access_user', $accessUser);

        \Session::flash('success', 'ユーザー切り替えを無効にしました');
        return redirect()->action('Debug\User\ImpersonateController@index');
    }
}
