<?php

use Illuminate\Database\Seeder;

class RoleTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = \DB::table('role_groups');

        $table->insert([
            'role_group' => 'admin',
            'role_group_ja' => '管理者',
        ]);
        $table->insert([
            'role_group' => 'kyoumu',
            'role_group_ja' => '教務課',
        ]);
        $table->insert([
            'role_group' => 'tsuushin',
            'role_group_ja' => '通信教育',
        ]);
        $table->insert([
            'role_group' => 'gakusapo',
            'role_group_ja' => '学生サポート',
        ]);
        $table->insert([
            'role_group' => 'daigakuin',
            'role_group_ja' => '大学院',
        ]);
        $table->insert([
            'role_group' => 'ITC',
            'role_group_ja' => '',
        ]);
        $table->insert([
            'role_group' => 'MEC',
            'role_group_ja' => '',
        ]);
    }
}
