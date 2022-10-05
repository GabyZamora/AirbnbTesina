<?php

namespace App\Http\Controllers;

use App\Models\Lugare;
use Illuminate\Http\Request;

/**
 * Class LugareController
 * @package App\Http\Controllers
 */
class LugareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugares = Lugare::paginate();

        return view('lugare.index', compact('lugares'))
            ->with('i', (request()->input('page', 1) - 1) * $lugares->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lugare = new Lugare();
        return view('lugare.create', compact('lugare'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Lugare::$rules);

        $lugare = Lugare::create($request->all());

        return redirect()->route('lugares.index')
            ->with('success', 'Lugare created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lugare = Lugare::find($id);

        return view('lugare.show', compact('lugare'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lugare = Lugare::find($id);

        return view('lugare.edit', compact('lugare'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lugare $lugare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lugare $lugare)
    {
        request()->validate(Lugare::$rules);

        $lugare->update($request->all());

        return redirect()->route('lugares.index')
            ->with('success', 'Lugare updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lugare = Lugare::find($id)->delete();

        return redirect()->route('lugares.index')
            ->with('success', 'Lugare deleted successfully');
    }
}
