<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kpt;

class KptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kpts = Kpt::all();

        return view('kpts.index', [
            'kpts' => $kpts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kpt = new Kpt;

        return view('kpts.create', [
            'kpt' => $kpt,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'dates' => 'required|max:191',
            'writer' => 'required|max:191',
            'keep' => 'required|max:191',
            'problem' => 'required|max:191',
            'Try' => 'required|max:191',
            'MVP' => 'max:191',
            'reason' => 'max:191',
            'want' => 'max:191',
        ]);
        
        $kpt = new Kpt;
        $kpt->dates = $request->dates;
        $kpt->writer = $request->writer;
        $kpt->keep = $request->keep;
        $kpt->problem = $request->problem;
        $kpt->Try = $request->Try;
        $kpt->MVP = $request->MVP;
        $kpt->reason = $request->reason;
        $kpt->want = $request->want;
        $kpt->save();

        return redirect('/resources/views/kpts/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kpt = Kpt::find($id);

        return view('kpts.show', [
            'kpt' => $kpt,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kpt = Kpt::find($id);

        return view('kpts.edit', [
            'kpt' => $kpt,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'dates' => 'required|max:191',
            'writer' => 'required|max:191',
            'keep' => 'required|max:191',
            'problem' => 'required|max:191',
            'Try' => 'required|max:191',
            'MVP' => 'max:191',
            'reason' => 'max:191',
            'want' => 'max:191',
        ]);
        
        $kpt = Kpt::find($id);
        $kpt->dates = $request->dates;
        $kpt->writer = $request->writer;
        $kpt->keep = $request->keep;
        $kpt->problem = $request->problem;
        $kpt->Try = $request->Try;
        $kpt->MVP = $request->MVP;
        $kpt->reason = $request->reason;
        $kpt->want = $request->want;
        $kpt->save();

        return redirect('/resources/views/kpts/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kpt = Kpt::find($id);
        $kpt->delete();

        return redirect('/resources/views/kpts/index');
    }
}
