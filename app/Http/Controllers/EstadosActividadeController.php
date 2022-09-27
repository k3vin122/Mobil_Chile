<?php

namespace App\Http\Controllers;

use App\Models\EstadosActividade;
use Illuminate\Http\Request;

/**
 * Class EstadosActividadeController
 * @package App\Http\Controllers
 */
class EstadosActividadeController extends Controller
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
        $estadosActividades = EstadosActividade::paginate();

        return view('estados-actividade.index', compact('estadosActividades'))
            ->with('i', (request()->input('page', 1) - 1) * $estadosActividades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadosActividade = new EstadosActividade();
        return view('estados-actividade.create', compact('estadosActividade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EstadosActividade::$rules);

        $estadosActividade = EstadosActividade::create($request->all());

        return redirect()->route('estados-actividades.index')
            ->with('success', 'EstadosActividade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadosActividade = EstadosActividade::find($id);

        return view('estados-actividade.show', compact('estadosActividade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadosActividade = EstadosActividade::find($id);

        return view('estados-actividade.edit', compact('estadosActividade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EstadosActividade $estadosActividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstadosActividade $estadosActividade)
    {
        request()->validate(EstadosActividade::$rules);

        $estadosActividade->update($request->all());

        return redirect()->route('estados-actividades.index')
            ->with('success', 'EstadosActividade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadosActividade = EstadosActividade::find($id)->delete();

        return redirect()->route('estados-actividades.index')
            ->with('success', 'EstadosActividade deleted successfully');
    }
}
