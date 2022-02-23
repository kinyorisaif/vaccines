<?php

namespace App\Http\Controllers;

use App\Models\Immunize;
use Illuminate\Http\Request;

/**
 * Class ImmunizeController
 * @package App\Http\Controllers
 */
class ImmunizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $immunizes = Immunize::paginate();

        return view('immunize.index', compact('immunizes'))
            ->with('i', (request()->input('page', 1) - 1) * $immunizes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $immunize = new Immunize();
        return view('immunize.create', compact('immunize'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Immunize::$rules);

        $immunize = Immunize::create($request->all());

        return redirect()->route('immunizes.index')
            ->with('success', 'Immunize created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $immunize = Immunize::find($id);

        return view('immunize.show', compact('immunize'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $immunize = Immunize::find($id);

        return view('immunize.edit', compact('immunize'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Immunize $immunize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Immunize $immunize)
    {
        request()->validate(Immunize::$rules);

        $immunize->update($request->all());

        return redirect()->route('immunizes.index')
            ->with('success', 'Immunize updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $immunize = Immunize::find($id)->delete();

        return redirect()->route('immunizes.index')
            ->with('success', 'Immunize deleted successfully');
    }
}
