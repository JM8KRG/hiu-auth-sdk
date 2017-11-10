<?php

namespace HiuAuthSDK\Models\Users;

use HiuAuthSDK\Services\Shibboleth\Shibboleth;

trait UserTrait
{
    public function user(): UserInterface
    {
        return Shibboleth::getUser();
    }
}
