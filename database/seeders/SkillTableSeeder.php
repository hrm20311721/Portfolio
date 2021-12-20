<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $skill =new Skill([
            'category'  => 'front',
            'name_en'   => 'HTML',
            'name_jp'   => 'HTML',
            'levels'    => 3
        ]);
        $skill->save();

        //2
        $skill = new Skill([
            'category'  => 'front',
            'name_en'   => 'CSS',
            'name_jp'   => 'CSS',
            'levels'    => 3
        ]);
        $skill->save();


        //3
        $skill = new Skill([
            'category'  => 'front',
            'name_en'   => 'JavaScript',
            'name_jp'   => 'JavaScript',
            'levels'    => 2
        ]);
        $skill->save();

        //4
        $skill = new Skill([
            'category'  => 'front',
            'name_en'   => 'jQuery',
            'name_jp'   => 'jQuery',
            'levels'    => 2
        ]);
        $skill->save();

        //5
        $skill = new Skill([
            'category'  => 'front',
            'name_en'   => 'Bootstrap',
            'name_jp'   => 'Bootstrap',
            'levels'    => 3
        ]);
        $skill->save();

        //6
        $skill = new Skill([
            'category'  => 'back',
            'name_en'   => 'PHP',
            'name_jp'   => 'PHP',
            'levels'    => 2
        ]);
        $skill->save();

        //7
        $skill = new Skill([
            'category'  => 'back',
            'name_en'   => 'Laravel',
            'name_jp'   => 'Laravel',
            'levels'    => 2
        ]);
        $skill->save();

        //8
        $skill = new Skill([
            'category'  => 'others',
            'name_en'   => 'Google Apps Script',
            'name_jp'   => 'Google Apps Script',
            'levels'    => 3
        ]);
        $skill->save();

        //9
        $skill = new Skill([
            'category'  => 'others',
            'name_en'   => 'VBA',
            'name_jp'   => 'VBA',
            'levels'    => 3
        ]);
        $skill->save();

        //10
        $skill = new Skill([
            'category'  => 'others',
            'name_en'   => 'TOEIC',
            'name_jp'   => 'TOEIC',
            'levels'    => 5
        ]);
        $skill->save();

        //11
        $skill = new Skill([
            'category'  => 'others',
            'name_en'   => 'Accounting',
            'name_jp'   => '日商簿記',
            'levels'    => 3
        ]);
        $skill->save();

        //12
        $skill = new Skill([
            'category'  => 'others',
            'name_en'   => 'Google Spread Sheets',
            'name_jp'   => 'Google Spread Sheets',
            'levels'    => 4
        ]);
        $skill->save();
    }
}
