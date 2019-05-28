<?php

namespace App\Http\Controllers;


use DB;
use Auth;
use Validator;
use Illuminate\Http\Request;

use App\Receiver;


class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Receivers = Receiver::get();

        if(auth::user()->admin==0){
            return view('receivers.view-all-request' , compact('Receivers'));

        }else{
            return view('receivers.admin-view-request' , compact('Receivers'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receivers.addRequest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'receiverName'=>'required',
            'requestType' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'image' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect('receivers/addRequests')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $receive = new Receiver;
        $receive->receiverName = $request->get('receiverName');
        $receive->requestType = $request->get('requestType');
        $receive->description = $request->get('description');
        $receive->quantity = $request->get('quantity');
        // $receive->image = $request->get('image');

        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename=time() . '.'.$extension;
            $file->move('uploads/receive/', $filename);
            $receive->image = $filename;
            
        }else{
            return $request;
            $receive->image ='';
        }
        $receive->user()->associate($request->user());

        $receive->save();

        return $this->index();
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
        $receive= Receiver::find($id);

        return view('receivers.edit-request', compact('receive'));
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
        $receive = Receiver::find($id);
        $receive->receiverName = $request->get('receiverName');
        $receive->requestType = $request->get('requestType');
        $receive->description = $request->get('description');
        $receive->quantity = $request->get('quantity');
        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename=time() . '.'.$extension;
            $file->move('uploads/receive/', $filename);
            $receive->image = $filename;
            
        }else{
            return $request;
            $receive->image ='';
        }        $receive->user()->associate($request->user());

        $receive->save();  
        return redirect('receivers')->with('success', 'project has been deleted Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receive = Receiver::findOrFail($id);
        $receive->delete();
    
         return redirect('receivers')->with('success', 'project has been deleted Successfully');
    }
}
