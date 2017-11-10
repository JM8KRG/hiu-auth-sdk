<?php

namespace HiuAuthSDK\Models\Users;

class Staff extends UserBase implements StaffInterface
{
    /**
     * ユーザー切り替え前の教職員番号を取得する
     * @return string|null
     */
    public function getBeforeEmployeeNumber(): ?string
    {
        return null;
    }

    /**
     * 割当番号からユーザーを生成する
     * @param int $employeeNumber
     * @return UserInterface|null
     */
    public static function findByEmployeeNumber(int $employeeNumber): ?UserInterface
    {
        return null;
    }
}
