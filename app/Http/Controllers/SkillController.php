<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::orderByRaw("CASE
            WHEN category = 'front' THEN 1
            WHEN category = 'back' THEN 2
            WHEN category = 'others' THEN 3
            END")->get();
        return view('skills.index',['skills' => $skills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Skill $skill)
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Skill $skill)
    {
        $data = $request->only(['category','levels','name_en','name_jp']);
        $validator = Validator::make($data,[
            'category'  => ['required',Rule::in(['front','back','others'])],
            'levels'    => ['required','integer','between:1,5'],
            'name_en'   => ['required','string','max:50'],
            'name_jp'   => ['required','string','max:50']
        ]);
        $validator->validate();
        $skill->storeSkill($data);
        return redirect()->route('skills.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        return  $skill;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $data = $request->only(['category', 'levels', 'name_en', 'name_jp']);
        $validator = Validator::make($data, [
            'category'  => ['required', Rule::in(['front', 'back', 'others'])],
            'levels'    => ['required', 'integer', 'between:1,5'],
            'name_en'   => ['required', 'string', 'max:50'],
            'name_jp'   => ['required', 'string', 'max:50']
        ]);
        $validator->validate();
        $skill->updateSkill($skill->id,$data);
        return redirect()->route('skills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->destroy($skill->id);
        return redirect()->route('skills.index');
    }
}
