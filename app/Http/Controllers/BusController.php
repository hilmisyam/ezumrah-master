<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusRequest;
use App\Models\Bus;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses = Bus::all();

        $data = [
            'breadcrumb' => [
                ['Bus', '#'],
                ['List', '#'],
            ],
            'buses'      => $buses,
        ];

        return view('bus.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'breadcrumb' => [
                ['Bus', route('bus.index')],
                ['New', '#'],
            ],
            'action'     => route('bus.store'),
        ];

        return view('bus.form')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request['start_time'] = Carbon::createFromFormat('h:iA', $request['start_time'])->format('H:i:s');
        $request['end_time']   = Carbon::createFromFormat('h:iA', $request['end_time'])->format('H:i:s');

        // dd($request->all());

        Bus::create($request->except(['_method', '_token']));

        \Session::flash('alert-success', 'Bus successfully added');
        return redirect()->route('bus.index');
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
        $data = [
            'breadcrumb' => [
                ['Bus', route('bus.index')],
                ['Update', '#'],
            ],
            'action'     => route('bus.update', $id),
            'method'     => 'PUT',
            'bus'        => Bus::find($id),
        ];

        return view('bus.form')->with($data);
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
        $request['start_time'] = Carbon::createFromFormat('h:iA', $request['start_time'])->format('H:i:s');
        $request['end_time']   = Carbon::createFromFormat('h:iA', $request['end_time'])->format('H:i:s');

        Bus::find($id)->update($request->except(['_method', '_token']));

        \Session::flash('alert-success', 'Bus successfully updated');
        return redirect()->route('bus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bus::find($id)->delete();

        return response()->json([
            'success' => 'Delete successful',
        ]);
    }
}
