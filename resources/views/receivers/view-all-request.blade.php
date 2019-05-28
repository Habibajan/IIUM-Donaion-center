@extends('layouts.app')

@section('content')

<div class="agileinfo-grap" >
<div class="agileits-box" style="width:1009px; margin-left:230px; margin-right:20px">
<header class="agileits-box-header clearfix">
{{-- <form action="" method="post" > --}}
<h4> Requested List</h4>

<table class=table table-bordered table-hover  >
    
    
    
    <div class=col-xs-5>
        
    </div>
                        <thead class="thead-dark">
                            <tr  >
                                <th  scope="col"><b> <b>request_id</b></th>
                                <th  scope="col"><b>request_Type</b></th>
                                <th  scope="col"><b>Image</b></th>
                                <th  scope="col"><b>Description</b></th>
                                <th  scope="col"><b>Quantity</b></th>
                                <th  scope="col"><b>request_Date</b></th>
                               {{-- <th  scope="col"><b>Request Now if you need it</b></th> --}}
                               

                            </tr>
                        </thead>
                        @foreach($Receivers as $receive)

                        <tbody>
                            

                          <tr>

                         
                          <td style="color:black;">{{ $receive->id }} </td>


                          <td style="color:black;"> {{ $receive->requestType }}</td>
                          <td style="color:black;"><img src="{{asset('uploads/receive/'.$receive->image ) }}" width="100px;" height="100px;" alt="image;"> </td>
                          <td style="color:black;"> {{ $receive->description }} </td>
                          <td style="color:black;">{{ $receive->quantity }}</td>
                          <td style="color:black;">{{ $receive->created_at->diffForHumans() }}</td>
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