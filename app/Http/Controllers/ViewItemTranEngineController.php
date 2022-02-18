<?php

namespace App\Http\Controllers;

use App\Models\ViewItemTranEngine;
use Illuminate\Http\Request;
use DB;

class ViewItemTranEngineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $viewItemTranEngine=\DB::table('VIEW_ITEMTRAN_ENGINE')
            ->select('entity_code','tcode','vrno','amt_of_duty','trantype','acc_code','fiscal_year','max_vrdate','ladv_acc_code'
                ,'truckno','lastupdate','flag','slno','vrdate','div_code','item_code','cost_code','qty4','partyrte','aqtyissued','dept_code','item_nature','item_name','item_class')
            ->paginate(10);
        return  response()->json($viewItemTranEngine);

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
        //
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
