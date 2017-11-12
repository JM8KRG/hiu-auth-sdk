<?php

namespace HiuAuthSDK\Http\Middleware;

use Closure;
use HiuAuthSDK\Models\Users\UserInterface;
use HiuAuthSDK\Services\Shibboleth\ShibbolethService;
use Illuminate\Support\Facades\View;

class ShibbolethMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $session = $request->session();
        $accessUser = $session->get('access_user');

        if (!$accessUser instanceof UserInterface) {
            $accessUser = ShibbolethService::getUserInstance();
            $request->session()->put('access_user', $accessUser);
        }

        // すべてのページで使いたい情報をセットする
        View::share('middlewareDisplayName', $accessUser->getDisplayName());
        View::share('middlewareUID', $accessUser->getUID());
        View::share('middlewareEmployeeNumber', $accessUser->getEmployeeNumber());
        View::share('middlewareUnscopedAffiliation', $accessUser->getUnscopedAffiliation());
        View::share('middlewareMail', $accessUser->getMailAddress());
        View::share('middlewareRevertFlag', $accessUser->hasRevertFlag());

        return $next($request);
    }
}
