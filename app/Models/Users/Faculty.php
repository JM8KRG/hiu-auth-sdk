<?php

namespace HiuAuthSDK\Models\Users;

class Faculty extends UserBase implements FacultyInterface
{
    /**
     * Faculty constructor.
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
        $this->displayName = $displayName;
        $this->uid = $uid;
        $this->employeeNumber = $employeeNumber;
        $this->unscopedAffiliation = $unscopedAffiliation;
        $this->mail = $mail;
        $this->roles = $roles;
        $this->revertFlag = $revertFlag;
    }
}
