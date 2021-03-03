<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chance = 0;

        $request->keturunan == 1 ? $chance += 2 : $chance += 0;
        $request->membaca == 1 ? $chance += 1 : $chance += 0;
        $request->menatap == 1 ? $chance += 1 : $chance += 0;
        $request->kedip == 1 ? $chance += 1 : $chance += 0;
        $request->gosok == 1 ? $chance += 1 : $chance += 0;
        $request->lelah == 1 ? $chance += 1 : $chance += 0;
        $request->sakit == 1 ? $chance += 1 : $chance += 0;
        $request->kabur == 1 ? $chance += 3 : $chance += 0;

        if ($chance > 5) {
            $status = 'Kena';
        } else if ($chance < 3) {
            $status = 'Tidak';
        } else {
            $status = 'Mungkin';
        }

        return redirect('cek-rabun-jauh')->with('status', $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
