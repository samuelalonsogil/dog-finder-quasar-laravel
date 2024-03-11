<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreDogRequest;
use App\Http\Resources\V1\DogResource;
use App\Models\Dog;

class DogController extends Controller
{
    public function index(){
        return DogResource::collection(Dog::all() );
    }

    /* by id*/
    public function show(Dog $dog){
        return new DogResource($dog);
    }

    public function store(StoreDogRequest $request){
        Dog::create( $request->validated() );
        return response()->json('Dog stored!');
    }

    /* by id*/
    public function update(StoreDogRequest $request, Dog $dog){
        $dog->update( $request->validated() );
        return response()->json('Dog updated! ');
    }

    /* by id*/
    public function destroy(Dog $dog){
        $dog->delete();
        return response()->json('Dog deleted! ');
    }
}
