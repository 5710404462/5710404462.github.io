<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return view('welcome', [
          'result' => "___",
      ]);
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
     public function cal($p,$m,$i){
      //  $p = $request->input('principle');
      //  $m = $request->input('month');
      //  $i =  $request->input('interest');

       $r1 = ($i/100)*$p;
       $r2 = $p/$m;
       $sum = $r1+$r2;
      //  $data =array(
      //    'result'=>$sum
      //  );
       return [
         'data' => $sum
       ];

     }
    public function store(Request $request)
    {
      $p = $request->input('principle');
      $m = $request->input('month');
      $i =  $request->input('interest');

      $r1 = ($i/100)*$p;
      $r2 = $p/$m;
      $sum = $r1+$r2;
      $data =array(
        'result'=>$sum
      );
      // return [
      //   'data' => $sum;
      // ];
            return view("welcome",$data
            );

        // (($i/100)*$p)+($p/$m)
        //

      // return view('welcome', [
      //     'name' => "AREEEEEEEE",
      // ]);
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


    // public function save(Request $request){
    //   $name = $request->input('principle');
    //   // $data =array(
    //   //   'name'=>$name
    //   // );
    //
    //         return view('welcome', [
    //             'name' => $name,
    //         ]);
    // }
}
