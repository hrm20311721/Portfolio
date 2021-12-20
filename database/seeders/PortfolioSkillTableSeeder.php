<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio_skill;

class PortfolioSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Coding from XD
        $data = new Portfolio_skill([
            'portfolio_id'  => 1,
            'skill_id'      => 1
        ]);
        $data->save();

        $data = new Portfolio_skill([
            'portfolio_id'  => 1,
            'skill_id'      => 2
        ]);
        $data->save();

        $data = new Portfolio_skill([
            'portfolio_id'  => 1,
            'skill_id'      => 4
        ]);
        $data->save();

        //Attendance Record
        $data = new Portfolio_skill([
            'portfolio_id'  => 2,
            'skill_id'      => 1
        ]);
        $data->save();

        $data = new Portfolio_skill([
            'portfolio_id'  => 2,
            'skill_id'      => 2
        ]);
        $data->save();

        $data = new Portfolio_skill([
            'portfolio_id'  => 2,
            'skill_id'      => 4
        ]);
        $data->save();

        $data = new Portfolio_skill([
            'portfolio_id'  => 2,
            'skill_id'      => 5
        ]);
        $data->save();

        $data = new Portfolio_skill([
            'portfolio_id'  => 2,
            'skill_id'      => 7
        ]);
        $data->save();

        //Quotation Order Invoice management app
        $data = new Portfolio_skill([
            'portfolio_id'  => 3,
            'skill_id'      => 8
        ]);
        $data->save();

        $data = new Portfolio_skill([
            'portfolio_id'  => 3,
            'skill_id'      => 12
        ]);
        $data->save();

        //Portfolio Site
        $data = new Portfolio_skill([
            'portfolio_id'  => 4,
            'skill_id'      => 1
        ]);
        $data->save();

        $data = new Portfolio_skill([
            'portfolio_id'  => 4,
            'skill_id'      => 2
        ]);
        $data->save();

        $data = new Portfolio_skill([
            'portfolio_id'  => 4,
            'skill_id'      => 5
        ]);
        $data->save();

        $data = new Portfolio_skill([
            'portfolio_id'  => 4,
            'skill_id'      => 7
        ]);
        $data->save();

    }
}
