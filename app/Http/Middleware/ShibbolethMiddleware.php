<?php

namespace HiuAuthSDK\Http\Middleware;

use Closure;
use HiuAuthSDK\Models\Users\UserInterface;
use HiuAuthSDK\Services\Shibboleth\Shibboleth;

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
            $accessUser = Shibboleth::getUserInstance();
            $request->session()->put('access_user', $accessUser);
        }
        return $next($request);
    }
}
