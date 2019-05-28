@extends('layouts.app')

@section('content')

<div class="agileinfo-grap" >
<div class="agileits-box" style="width:1009px; margin-left:230px; margin-right:20px">
<header class="agileits-box-header clearfix">
{{-- <form action="" method="post" > --}}
<h4> Donated List</h4>

<table class=table table-bordered table-hover  >
    
    
    
    <div class=col-xs-5>
        
    </div>
                        <thead class="thead-dark">
                            <tr  >
                                <th scope="col"><b> <b>Donation_id</b></th>
                                <th scope="col"><b>Donation_Type</b></th>
                                <th scope="col"><b>Donated-Image</b></th>                                
                                <th scope="col"><b>Description</b></th>
                                <th scope="col"><b>Quantity</b></th>
                                <th scope="col"><b>Donation_Date</b></th>
                               {{-- <th style="color:black;"><b>Request Now if you need it</b></th> --}}
                               

                            </tr>
                        </thead>
                        @foreach($Donations as $donation)

                        <tbody>
                            

                          <tr>

                         
                          <td style="color:black;">{{ $donation->id }} </td>


                          <td style="color:black;"> {{ $donation->donationType }}</td>
                           <td style="color:black;"><img src="{{asset('uploads/donation/'.$donation->image  ) }}" width="100px;" height="100px;" alt="image;"> </td>
                          <td style="color:black;"> {{ $donation->description }} </td>
                          <td style="color:black;">{{ $donation->quantity }}</td>
                          <td style="color:black;">{{ $donation->created_at->diffForHumans() }}</td>
                          {{-- <td style="color:black;"> </td> --}}
                       
                         
                         </tr>
                        
                       
                        </tbody>
                            @endforeach

                    </table>
                    {{-- </form> --}}
 </header>
 </div> 
</div>
	
		
@endsection