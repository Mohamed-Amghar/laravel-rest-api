<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\SkillCollectionResource;
use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;

class Skillcontroller extends Controller
{
    public function index() {
       return new SkillCollectionResource(Skill::all());
    }
    
    public function store(StoreSkillRequest $request) {
        Skill::create($request->validated());
        return response()->json("Skill created");

    }
    public function update(StoreSkillRequest $request, Skill $skill) {
        $skill->update($request->validated());
        return response()->json("Skill updated");

    }
    public function show(Skill $skill){
        return new SkillResource($skill);
    }

    public function destroy(Skill $skill){
        $skill->delete();
        return response()->json("Skill deleted ");
    }

}
