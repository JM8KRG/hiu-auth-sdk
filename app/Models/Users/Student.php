<?php

namespace HiuAuthSDK\Models\Users;

class Student extends UserBase implements StudentInterface
{
    private $kojinId;
    private $entranceYear;
    private $curriculumYear;
    private $organizationCode;
    private $organizationName;
    private $grade;
    private $class;
    private $gakusekiCode;
    private $zaisekiCode;

    /**
     * Student constructor.
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
        array $roles,
        bool $revertFlag)
    {
        // TODO 在籍フラグのチェック、個人ID、学年、クラス、入学年度、カリキュラム年度、学籍、在籍CD、所属組織CD、所属組織名

        $this->displayName = $displayName;
        $this->uid = $uid;
        $this->employeeNumber = $employeeNumber;
        $this->unscopedAffiliation = $unscopedAffiliation;
        $this->mail = $mail;
        $this->roles = $roles;
        $this->revertFlag = $revertFlag;
    }

    /**
     * 個人IDを取得する
     * @return string
     */
    public function getKojinId(): string
    {
        // TODO: Implement getKojinId() method.
    }

    /**
     * 入学年度を取得する
     * @return int
     */
    public function getEntranceYear(): int
    {
        // TODO: Implement getEntranceYear() method.
    }

    /**
     * カリキュラム年度を取得する
     * @return int
     */
    public function getCurriculumYear(): int
    {
        // TODO: Implement getCurriculumYear() method.
    }

    /**
     * 学年を取得する
     * @return int
     */
    public function getGrade(): int
    {
        // TODO: Implement getGrade() method.
    }

    /**
     * クラスを取得する
     * @return int
     */
    public function getClass(): int
    {
        // TODO: Implement getClass() method.
    }

    /**
     * 学籍コードを取得する
     * @return string
     */
    public function getGakusekiCode(): string
    {
        // TODO: Implement getGakusekiCode() method.
    }

    /**
     * 在籍コードを取得する
     * @return string
     */
    public function getZaisekiCode(): string
    {
        // TODO: Implement getZaisekiCode() method.
    }

    /**
     * 組織コードを取得する
     * @return string
     */
    public function getOrganizationCode(): string
    {
        // TODO: Implement getOrgCode() method.
    }

    /**
     * 所属組織名を取得する
     * @return string
     */
    public function getOrganizationName(): string
    {
        // TODO: Implement getOrgName() method.
    }
}
