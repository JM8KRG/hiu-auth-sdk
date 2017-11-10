<?php

namespace HiuAuthSDK\Models\Users;

class Faculty extends UserBase implements FacultyInterface
{
    /**
     * ユーザー切り替え前の教職員番号を取得する
     * @return string|null
     */
    public function getBeforeEmployeeNumber(): ?string
    {
        // TODO: Implement getBeforeEmployeeNumber() method.
    }

    /**
     * 学籍・教員番号からユーザーを生成する
     * @param int $employeeNumber
     * @return UserInterface|null
     */
    public static function findByEmployeeNumber(int $employeeNumber): ?UserInterface
    {
        // TODO: Implement findByEmployeeNumber() method.
    }
}
