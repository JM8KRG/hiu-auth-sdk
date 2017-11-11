<?php

namespace HiuAuthSDK\Services\Role;

class RoleService implements RoleServiceInterface
{
    /**
     * ロールを取得する
     * @param string $uid
     * @param string $unscopedAffiliation
     * @return array
     */
    public static function getRolesFromDataBaseByUID(string $uid, string $unscopedAffiliation): array
    {
        $roles = [$unscopedAffiliation];

        // UIDからロールグループを取得する
        $result = \DB::connection('mysql')->select('
            SELECT role_group
            FROM role_users
             INNER JOIN role_groups
              ON role_users.role_groups_id = role_groups.id
            WHERE uid = :uid', [
                'uid' => $uid
        ]);

        if ($result) {
            foreach ($result as $role) {
                $roles[] = $role->role_group;
            }
        }
        return $roles;
    }
}
