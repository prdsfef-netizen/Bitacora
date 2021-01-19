<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Reporte;
use Illuminate\Http\Request;

class ReportesController extends Controller
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
            $reportes = Reporte::where('tipo_reporte', 'LIKE', "%$keyword%")
                ->orWhere('Asunto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reportes = Reporte::latest()->paginate($perPage);
        }

        return view('reportes.index', compact('reportes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('reportes.create');
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
        
        Reporte::create($requestData);

        return redirect('reportes')->with('flash_message', 'Reporte added!');
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
        $reporte = Reporte::findOrFail($id);

        return view('reportes.show', compact('reporte'));
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
        $reporte = Reporte::findOrFail($id);

        return view('reportes.edit', compact('reporte'));
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
        
        $reporte = Reporte::findOrFail($id);
        $reporte->update($requestData);

        return redirect('reportes')->with('flash_message', 'Reporte updated!');
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
        Reporte::destroy($id);

        return redirect('reportes')->with('flash_message', 'Reporte deleted!');
    }
}
