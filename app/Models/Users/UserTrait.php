<?php

namespace HiuAuthSDK\Models\Users;

use HiuAuthSDK\Services\Shibboleth\ShibbolethService;

trait UserTrait
{
    /**
     * @return StudentInterface|StaffInterface|FacultyInterface
     */
    public function user(): UserInterface
    {
        return ShibbolethService::getUser();
    }
}
