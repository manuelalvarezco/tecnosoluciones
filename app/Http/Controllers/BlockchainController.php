<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class BlockchainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        

    }

    public function blockchainStats(){
        $client = new Client([
            
            'base_uri' => 'https://api.blockchain.info',
            
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', 'stats');

        $stats =  json_decode($response->getBody()->getContents());

        

        return view('blockchain.getStats', compact('stats'));
    }

    public function graph(){

        $client = new Client([
            
            'base_uri' => 'https://blockchain.info',
            
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', 'charts/transactions-per-second?timespan=1d&rollingAverage=8hours&format=json');


        $data = json_decode($response->getBody()->getContents(), true);

        $charts = $data['values'];

        // dd($charts);

        return view('graph', compact('charts'));
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
