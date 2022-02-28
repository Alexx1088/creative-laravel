<?php

namespace App\Http\Controllers;

use App\Models\Postik;
use Illuminate\Http\Request;

class PostikController extends Controller
{
    public function index()
    {
        $postic = Postik::all();
        return view('postic.index', compact('postic'));
    }

public function create(){

    return view('postic.create');

}

public function store() {

$data = request()->validate([
    'infa' => 'string',
    'face'=> 'string',
    'count'=> 'integer',
    'work'=>'string',
]);

Postik::create($data);

return redirect()->route('postic.index');

}

public function show(Postik $post) {

return view('postic.show', compact('post'));

    }

public function edit(Postik $postic) {

      //  return 'hi!';
   // dd($postic->infa);

    return view('postic.edit', compact('postic'));

}

public function update(Postik $postic){

    $data = request()->validate([
        'infa' => 'string',
        'face' => 'string',
        'work' =>'string',

    ]);

    $postic->update($data);
    return redirect()->route('postic.show', $postic->id);

}

public function destroy(Postik $postic) {

$postik->delete();

return redirect()->route('postic.index');



}




}