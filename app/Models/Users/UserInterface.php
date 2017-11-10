<?php

namespace HiuAuthSDK\Models\Users;

interface UserInterface
{
    /**
     * 氏名を取得する
     * @return string
     */
    public function getDisplayName(): string;

    /**
     * UIDを取得する
     * @return string
     */
    public function getUID(): string;

    /**
     * 学籍・教職員番号を取得する
     * @return string
     */
    public function getEmployeeNumber(): string;

    /**
     * 所属を取得する
     * @return string
     */
    public function getUnscopedAffiliation(): string;

    /**
     * メールアドレスを取得する
     * @return string
     */
    public function getMailAddress(): string;

    /**
     * ロールリストを取得する
     * @return array
     */
    public function getRoles(): array;

    /**
     * ユーザー切り替え前の教職員番号を取得する
     * @return string|null
     */
    public function getBeforeEmployeeNumber(): ?string;

    /**
     * 学籍・教員番号からユーザーを生成する
     * @param int $employeeNumber
     * @return UserInterface|null
     */
    public static function findByEmployeeNumber(int $employeeNumber): ?UserInterface;
}
