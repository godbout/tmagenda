<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
                'tm_id' =>'807092', 
                'fullname' => 'Lena Chao',
                'title' => 'ACB, ALB',
                'phone' => '6663 0085',
                'email' => 'lenameileng@yahoo.com.hk',
                'pag' => true
            ],
            [
                'tm_id' =>'5076527', 
                'fullname' => 'Christy Cheang',
                'title' => '',
                'phone' => '6268 6223',
                'email' => 'heha53546907@msn.com',
                'pag' => true
            ],
            [
                'tm_id' =>'619469', 
                'fullname' => 'Alex Chong',
                'title' => 'CC',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'860432', 
                'fullname' => 'Fatima Dores',
                'title' => 'DTM',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'3463476', 
                'fullname' => 'Pamela Ieong',
                'title' => 'CC, CL',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'4282858', 
                'fullname' => 'Asuka Kurahashi',
                'title' => 'CC',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'4972215', 
                'fullname' => 'Guillaume Leclerc',
                'title' => 'CC',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'615015', 
                'fullname' => 'Herbert Lee',
                'title' => 'DTM',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'3974258', 
                'fullname' => 'Tony Lei',
                'title' => 'CC, CL',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'4824189', 
                'fullname' => 'Sandy Leong',
                'title' => '',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'5143116', 
                'fullname' => 'Yvonne Ma',
                'title' => '',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'4776476', 
                'fullname' => 'Chantelle Ng',
                'title' => '',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'4824216', 
                'fullname' => 'Kelvin U',
                'title' => 'CC',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'3899779', 
                'fullname' => 'Joao Vicente',
                'title' => 'CC',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'730904', 
                'fullname' => 'Tom Wilhelm',
                'title' => 'ACG, CL',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'3463480', 
                'fullname' => 'Judy Wong',
                'title' => 'ACS, ALB',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'5300413', 
                'fullname' => 'Gisele Wong',
                'title' => '',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
            [
                'tm_id' =>'4572320', 
                'fullname' => 'Ruby Tuan',
                'title' => '',
                'phone' => '',
                'email' => '',
                'pag' => true
            ],
        ];

        foreach ($members as $member) {
            DB::table('members')->insert([
                'tm_id' => $member['tm_id'],
                'fullname' => $member['fullname'],
                'title' => $member['title'],
                'phone' => $member['phone'],
                'email' => $member['email'],
                'pag' => $member['pag'],
            ]);
        }
    }
}
