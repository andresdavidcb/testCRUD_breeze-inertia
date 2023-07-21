<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use App\Models\Person;
use Illuminate\Http\Request;
use Inertia\Inertia;
use DB;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('It works');
        $people= Person::all();
        $Tpeople = [1,'Ana',14,'ana@mail.com'];
        
        return Inertia::render('People/Index',compact(['people','Tpeople']));
        /*
        return Inertia::render('Departments/Index',['people' => $people]);*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }

    public function graphics(){
        //dd('Gráficos');
        
        $data= Person::selectRaw('age, count(*) as Total')->groupBy('age')->get();

        return Inertia::render('People/Graphics',['data' => $data]);
    }
}
