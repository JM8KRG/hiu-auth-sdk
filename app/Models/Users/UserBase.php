<?php

namespace HiuAuthSDK\Models\Users;

abstract class UserBase implements UserInterface
{
    /**
     * @var string
     */
    protected $displayName;
    /**
     * @var string
     */
    protected $uid;
    /**
     * @var string
     */
    protected $employeeNumber;
    /**
     * @var string
     */
    protected $unscopedAffiliation;
    /**
     * @var string
     */
    protected $mail;
    /**
     * @var array
     */
    protected $roles;

    /**
     * 氏名を取得する
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * UIDを取得する
     * @return string
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * 学籍・教職員番号を取得する
     * @return string
     */
    public function getEmployeeNumber(): string
    {
        return $this->employeeNumber;
    }

    /**
     * 所属を取得する
     * @return string
     */
    public function getUnscopedAffiliation(): string
    {
        return $this->unscopedAffiliation;
    }

    /**
     * メールアドレスを取得する
     * @return string
     */
    public function getMailAddress(): string
    {
        return $this->mail;
    }

    /**
     * ロール一覧を取得する
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * 指定のロールを持っているか
     * @return bool
     */
    public function hasRole(string $role): bool
    {
        return in_array($role, $this->roles);
    }
}
