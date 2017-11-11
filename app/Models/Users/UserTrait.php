<?php

namespace HiuAuthSDK\Models\Users;

use HiuAuthSDK\Services\Shibboleth\Shibboleth;

trait UserTrait
{
    /**
     * @return StudentInterface|StaffInterface|FacultyInterface
     */
    public function user(): UserInterface
    {
        return Shibboleth::getUser();
    }
}
