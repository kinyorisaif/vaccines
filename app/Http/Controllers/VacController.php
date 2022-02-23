<?php

namespace App\Http\Controllers;

use App\Models\Vac;
use Illuminate\Http\Request;

/**
 * Class VacController
 * @package App\Http\Controllers
 */
class VacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacs = Vac::paginate();

        return view('vac.index', compact('vacs'))
            ->with('i', (request()->input('page', 1) - 1) * $vacs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vac = new Vac();
        return view('vac.create', compact('vac'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vac::$rules);

        $vac = Vac::create($request->all());

        return redirect()->route('vacs.index')
            ->with('success', 'Vac created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vac = Vac::find($id);

        return view('vac.show', compact('vac'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vac = Vac::find($id);

        return view('vac.edit', compact('vac'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vac $vac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vac $vac)
    {
        request()->validate(Vac::$rules);

        $vac->update($request->all());

        return redirect()->route('vacs.index')
            ->with('success', 'Vac updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vac = Vac::find($id)->delete();

        return redirect()->route('vacs.index')
            ->with('success', 'Vac deleted successfully');
    }
}
