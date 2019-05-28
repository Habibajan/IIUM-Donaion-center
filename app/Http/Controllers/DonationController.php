<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Validator;
use Illuminate\Http\Request;
use App\Donation;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function create()
    {
        return view('donations.donationForm');
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
            'donorName'=>'required',
            'donationType' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'image' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect('donations/donationForm')
                        ->withErrors($validator)
                        ->withInput();
        }
        $donation = new Donation;
        $donation->donorName = $request->get('donorName');
        $donation->donationType = $request->get('donationType');
        $donation->description = $request->get('description');
        $donation->quantity = $request->get('quantity');
        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename=time() . '.'.$extension;
            $file->move('uploads/donation/', $filename);
            $donation->image = $filename;
            
        }else{
            return $request;
            $donation->image ='';
        }
        $donation->user()->associate($request->user());

        $donation->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */public function index()
    {
        $Donations = Donation::get();

        if(auth::user()->admin==0){
            return view('donations.view-all-donation', compact('Donations'));

        }else{
            return view('donations.admin-view-donation', compact('Donations'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
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
        $donation = Donation::find($id);

        return view('donations.edit-donation', compact('donation'));
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
        $donation = Donation::find($id);
        $donation->donorName = $request->get('donorName');
        $donation->donationType = $request->get('donationType');
        $donation->description = $request->get('description');
        $donation->quantity = $request->get('quantity');
        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename=time() . '.'.$extension;
            $file->move('uploads/donation/', $filename);
            $donation->image = $filename;
            
        }else{
            return $request;
            $donation->image ='';
        }
      
        $donation->user()->associate($request->user());

        $donation->save();  
        return redirect('/donations')->with('success', 'project has been deleted Successfully');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();
    
         return redirect('/donations')->with('success', 'project has been deleted Successfully');
    }
}
