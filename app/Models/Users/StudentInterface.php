<?php

namespace HiuAuthSDK\Models\Users;

interface StudentInterface
{
    /**
     * 個人IDを取得する
     * @return string
     */
    public function getKojinId(): string;

    /**
     * 入学年度を取得する
     * @return int
     */
    public function getEntranceYear(): int;

    /**
     * カリキュラム年度を取得する
     * @return int
     */
    public function getCurriculumYear(): int;

    /**
     * 学年を取得する
     * @return int
     */
    public function getGrade(): int;

    /**
     * クラスを取得する
     * @return int
     */
    public function getClass(): int;

    /**
     * 学籍コードを取得する
     * @return string
     */
    public function getGakusekiCode(): string;

    /**
     * 在籍コードを取得する
     * @return string
     */
    public function getZaisekiCode(): string;

    /**
     * 組織コードを取得する
     * @return string
     */
    public function getOrganizationCode(): string;

    /**
     * 所属組織名を取得する
     * @return string
     */
    public function getOrganizationName(): string;
}
