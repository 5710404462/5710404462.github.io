<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterestController extends Controller
{
  private $api = "http://lab10.dev/api/";
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
      // $client = new \GuzzleHttp\Client();
      // $call = "welcome";
      // $response = $client->request('GET', "{$this->api}{$call}", [
      //     'form_params' => []
      // ]);
      // $resBody = $response->getBody();
      //   $res = json_decode($resBody);
      //   return view('welcome.index', [
      //       'statusCode' => $response->getStatusCode(),
      //       'responseHeader' => $response->getHeader('content-type')[0],
      //       'success' => $res->success,
      //       'data' => $res->data,
      //       'resBody' => $response->getBody()
      //   ]);
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
