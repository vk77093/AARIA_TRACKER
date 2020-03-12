<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\VisitUpdate;
use App\Trackermaster;
use Illuminate\Support\Facades\Session;

class SecondTrackerMaster extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $id = Auth::id();
      // $trackerData=Trackermaster::where('user_id','=',$id)->orderBy('id','desc')->get();
      // $secondTrackerData=VisitUpdate::orderBy('id','desc')->get();
      $secondTrackerData=VisitUpdate::orderBy('id','desc')->get();
      return view('AariaData.secondView',compact('secondTrackerData'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('AariaData.VisitUpdate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $input=$request->all();
      //   $user=Auth::user();
      //   $user->visit_updates();
      //   $user->visit_updates()->create($input);

      // $trackerData=new Tracker();
      // $trackerData=$request['user_id'];
      // $trackerData=$request['comp_name'];
      // $input=$request->all();
      // $visitData=new Trackermaster();
      // $visitData->visit_updates();
      // $visitData->visit_updates()->create($visitData);
      //VisitUpdate::create($request->all());
      // $data=$request->input('trackermasters_id');
      // $data1=$request->input('comp_name');
      // $data2->$request->input('address');
      // $input['trackermasters_id']=$data;
      // $input['comp_name']=$data1;
      // $input['address']=$data2;

// $input=$request->all();
//       $user=new trackermasters();
//        $user->visit_updates();
//        $user->visit_updates()->create($input);

VisitUpdate::create($request->all());
Session::flash('Data_Submit','A new User data Got Is Submitted');
        return redirect('/trackerSecond');

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
