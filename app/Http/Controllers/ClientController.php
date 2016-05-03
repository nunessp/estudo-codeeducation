<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Entities\Client;
use CodeProject\Repositories\ClientRepository;
use Illuminate\Http\Request;
use CodeProject\Http\Requests;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ClientRepository $repository)
    {
        return $repository->all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ClientRepository $repository)
    {
        return $repository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, ClientRepository $repository)
    {
        return $repository->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, ClientRepository $repository)
    {
        $client = $repository->find($id);
        if(!$client){
            return response()->json(['response' => 'client not found']);
        }

        $client->name = $request->get('name');
        $client->responsible = $request->get('responsible');
        $client->email = $request->get('email');
        $client->phone = $request->get('phone');
        $client->address = $request->get('address');
        $client->obs = $request->get('obs');

        $client->save();
        return $client;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ClientRepository $repository)
    {
       $client = $repository->find($id);
       if(!$client){
           return response()->json(['response' => 'client not found']);
       }

       if(Client::find($id)->delete()){
           return response()->json(['response' => 'client deleted with sucess']);
       }
       else{
           return response()->json(['response' => 'an error occurred']);
       }
    }
}
