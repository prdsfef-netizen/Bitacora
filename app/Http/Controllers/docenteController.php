<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\docente;
use Illuminate\Http\Request;

class docenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $docente = docente::where('rfid', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellido', 'LIKE', "%$keyword%")
                ->orWhere('no_empleado', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $docente = docente::latest()->paginate($perPage);
        }

        return view('docente.index', compact('docente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        docente::create($requestData);

        return redirect('docente')->with('flash_message', 'docente added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $docente = docente::findOrFail($id);

        return view('docente.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $docente = docente::findOrFail($id);

        return view('docente.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $docente = docente::findOrFail($id);
        $docente->update($requestData);

        return redirect('docente')->with('flash_message', 'docente updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        docente::destroy($id);

        return redirect('docente')->with('flash_message', 'docente deleted!');
    }
}
