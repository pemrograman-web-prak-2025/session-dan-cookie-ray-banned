<?php
namespace App\Http\Controllers;

use App\Models\Poison as ModelPoison;
use Illuminate\Http\Request;

class Poison extends Controller {
    
    public function index() {
        $poisons = ModelPoison::all();
        return view('index', ['poisons' => $poisons]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $validated_data = $request->validate([
            'poison_name' => 'required|string|max:255',
            'poison_img' => 'required|string|max:1023',
            'poison_desc' => 'required|string|max:8191'
            ]
        );

        $poison = ModelPoison::create($validated_data);
        return redirect()->route('poison.index', $poison->poison_id);
    }

    public function edit($poison_id) {
        $poison = ModelPoison::findOrFail($poison_id);
        return view('edit', ['poison' => $poison]);
    }

    public function update(Request $request, $poison_id) {
        $poison = ModelPoison::findOrFail($poison_id);

        $validated_data = $request->validate([
            'poison_name' => 'required|string|max:255',
            'poison_img' => 'required|string|max:1023',
            'poison_desc' => 'required|string|max:8191'
        ]);

        $poison->update($validated_data); 

        return redirect()->route('poison.index');
    }

    public function delete($poison_id) {
        $poison = ModelPoison::findOrFail($poison_id);
        $poison->delete();
        return redirect()->route('poison.index');
    }

}

?>