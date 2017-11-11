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
     * 指定のロールを持っているか
     * @return bool
     */
    public function hasRole(string $role): bool;
}
