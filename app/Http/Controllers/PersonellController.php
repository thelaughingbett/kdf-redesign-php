<?php

namespace App\Http\Controllers;

use App\Models\personell;
use App\Http\Requests\StorepersonellRequest;
use App\Http\Requests\UpdatepersonellRequest;
use Illuminate\Http\Request;

class PersonellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('support.addpersonell',[]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        // dd($request->all());
        $formfield = $request->validate(['rank' => 'required',
                                                 'FirstName'=> 'required',
                                                'LastName' => 'required',
                                                'division' => 'required',
                                                'title' => 'required' ]);
        
        if($request->hasFile(('image'))){
            $formfield['image'] = $request->file('image')->store('uploaded/personell','public');
        }
        // dd($formfield);
        personell::create($formfield);

        return to_route('support.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepersonellRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(personell $personell)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(personell $personell)
    {
        //
        // dd($personell);
        return view('support.show',['personell' => $personell]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepersonellRequest $request, personell $personell)
    {
        //
        // dd($request->file('image'));
        
        $formfield = $request->validate(['rank' => 'required',
                                                 'FirstName'=> 'required',
                                                'LastName' => 'required',
                                                'division' => 'required',
                                                'title' => 'required' ]);
        
        if($request->hasFile(('image'))){
            $formfield['image'] = $request->file('image')->store('uploaded/personell','public');
        }
        // dd($formfield);
        $personell->update($formfield);

        return to_route('support.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(personell $personell)
    {
        //
    }
}
