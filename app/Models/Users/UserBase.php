<?php

namespace HiuAuthSDK\Models\Users;

abstract class UserBase implements UserInterface
{
    /**
     * @var string
     */
    private $displayName;
    /**
     * @var string
     */
    private $uid;
    /**
     * @var string
     */
    private $employeeNumber;
    /**
     * @var string
     */
    private $unscopedAffiliation;
    /**
     * @var string
     */
    private $mail;
    /**
     * @var array
     */
    private $roles;

    /**
     * UserBase constructor.
     * @param string $displayName
     * @param string $uid
     * @param string $employeeNumber
     * @param string $unscopedAffiliation
     * @param string $mail
     * @param array $roles
     */
    public function __construct(
        string $displayName,
        string $uid,
        string $employeeNumber,
        string $unscopedAffiliation,
        string $mail,
        array $roles
    ) {
        $this->displayName = $displayName;
        $this->uid = $uid;
        $this->employeeNumber = $employeeNumber;
        $this->unscopedAffiliation = $unscopedAffiliation;
        $this->mail = $mail;
        $this->roles = $roles;
    }

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
}
