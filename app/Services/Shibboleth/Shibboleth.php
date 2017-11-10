<?php

namespace HiuAuthSDK\Services\Shibboleth;

use HiuAuthSDK\Exceptions\UserAuthException;
use HiuAuthSDK\Models\Users\Faculty;
use HiuAuthSDK\Models\Users\Staff;
use HiuAuthSDK\Models\Users\Student;
use HiuAuthSDK\Models\Users\UserInterface;
use HiuAuthSDK\Services\Role\RoleService;

class Shibboleth
{
    /**
     * ユーザーインスタンスを取得する
     * @return mixed
     * @throws UserAuthException
     */
    public static function getUserInstance()
    {
        if (env('sso')) {
            // サーバー環境変数の存在を確認
            if (
                !isset($_SERVER['displayName']) ||
                !isset($_SERVER['uid']) ||
                !isset($_SERVER['employeeNumber']) ||
                !isset($_SERVER['unscoped-affiliation']) ||
                !isset($_SERVER['mail'])
            ) {
                throw new UserAuthException('環境変数から値を取得できませんでした');
            } else {
                // 値をセット
                $displayName = $_SERVER['displayName'];
                $uid = $_SERVER['uid'];
                $employeeNumber = $_SERVER['employeeNumber'];
                $unscopedAffiliation = $_SERVER['unscoped-affiliation'];
                $mail = $_SERVER['mail'];
            }
        } else {
            // テスト用
            $displayName = env('TEST_DISPLAY_NAME', 'JM8KRG');
            $uid = env('TEST_UID', 's1512073');
            $employeeNumber = env('TEST_EMP', '1512073');
            $unscopedAffiliation = env('TEST_UNS', 'staff');
            $mail = env('TEST_MAIL', 's1512073@s.do-johodai.ac.jp');
        }
        return self::makeUserInstance($displayName, $uid, $employeeNumber, $unscopedAffiliation, $mail);
    }

    /**
     * ユーザーインスタンスを生成する
     * @param string $displayName
     * @param string $uid
     * @param string $employeeNumber
     * @param string $unscopedAffiliation
     * @param string $mail
     * @return mixed
     * @throws UserAuthException
     */
    public static function makeUserInstance(
        string $displayName,
        string $uid,
        string $employeeNumber,
        string $unscopedAffiliation,
        string $mail
    ) {
        // ロールを取得
        $roles = RoleService::getRolesFromDatabaseByUID($uid, $unscopedAffiliation);

        // 所属からユーザーインスタンスを決定する
        switch ($unscopedAffiliation) {
            case 'student':
                return new Student($displayName, $uid, $employeeNumber, $unscopedAffiliation, $mail, $roles);
                break;
            case 'faculty':
                return new Faculty($displayName, $uid, $employeeNumber, $unscopedAffiliation, $mail, $roles);
                break;
            case 'staff':
                return new Staff($displayName, $uid, $employeeNumber, $unscopedAffiliation, $mail, $roles);
                break;
            default:
                throw new UserAuthException($employeeNumber . 'は所属を確認できないため、システムを利用できません');
        }
    }

    public static function getUser(): UserInterface
    {
        return \Session::get('access_user');
    }
}
