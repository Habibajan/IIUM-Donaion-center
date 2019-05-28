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
                        <thead  class="thead-dark">
                            <tr  >
                                <th scope="col"><b> <b>request_id</b></th>
                                <th scope="col"><b>request_Type</b></th>
                                <th scope="col"><b>Image</b></th>
                                <th scope="col"><b>Description</b></th>
                                <th scope="col"><b>Quantity</b></th>
                                <th scope="col"><b>request_Date</b></th>
                                {{-- <th scope="col"><b>Approve</b></th> --}}
                                <th scope="col"><b>Edit</b></th>
                                <th scope="col"><b>Delete</b></th>                               

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
                          {{-- <td style="color:black;"></td> --}}
                          <td style="color:black;">{{ $receive->created_at->diffForHumans() }}</td>
                          <td style="color:black;"><a href="{{action('RequestController@edit',  $receive->id)}}" class="btn btn-warning"><i class="fa fa-pencil" style="font-size:24px color:red;"></i></a></td>
                          <th style="color:black;"><b><form action="{{ route('receivers.destroy',  $receive->id)}}" method="post">
                            @csrf
                            
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                            </form> 
                            </b></th>
                       
                         
                         </tr>
                        
                       
                        </tbody>
                            @endforeach

                    </table>
                    {{-- </form> --}}
 </header>
 </div> 
</div>
	
		
@endsection