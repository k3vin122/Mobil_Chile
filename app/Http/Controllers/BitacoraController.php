<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;

/**
 * Class BitacoraController
 * @package App\Http\Controllers
 */
class BitacoraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bitacoras = Bitacora::paginate();

        return view('bitacora.index', compact('bitacoras'))
            ->with('i', (request()->input('page', 1) - 1) * $bitacoras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bitacora = new Bitacora();
        return view('bitacora.create', compact('bitacora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bitacora::$rules);

        $bitacora = Bitacora::create($request->all());

        return redirect()->route('bitacoras.index')
            ->with('success', 'Bitacora created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bitacora = Bitacora::find($id);

        return view('bitacora.show', compact('bitacora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bitacora = Bitacora::find($id);

        return view('bitacora.edit', compact('bitacora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bitacora $bitacora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bitacora $bitacora)
    {
        request()->validate(Bitacora::$rules);

        $bitacora->update($request->all());

        return redirect()->route('bitacoras.index')
            ->with('success', 'Bitacora updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bitacora = Bitacora::find($id)->delete();

        return redirect()->route('bitacoras.index')
            ->with('success', 'Bitacora deleted successfully');
    }
}
