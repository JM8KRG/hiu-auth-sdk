<?php

namespace HiuAuthSDK\Services\Role;

interface RoleServiceInterface
{
    /**
     * ロールを取得する
     * @param string $uid
     * @param string $unscopedAffiliation
     * @return array
     */
    public static function getRolesFromDataBaseByUID(string $uid, string $unscopedAffiliation): array;
}
