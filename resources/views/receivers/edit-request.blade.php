@extends('layouts.app')

@section('content')

<form action="{{ route('receivers.update',$receive->id) }}" method="post" enctype="multipart/form-data" style="width:1009px; margin-left:230px; margin-right:20px" >
 <h3>Please fill up the form</h3>
  <div class="form-group" >
   @csrf
    <label for="exampleFormControlSelect1">Request Type</label>
    <select class="form-control" value="{{$receive->requestType}}" id="" name="requestType">
      <option>**Select**</option>
      <option>Education Fee</option>
      <option>Job</option>
      <option>Clothes</option>
      <option>Book</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Image as evidence</label>
    <input type="file" class="form-control-file" value="{{$receive->image}}" id="exampleFormControlFile1" name="image">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description</label>
		<textarea class="form-control"  value="{{$receive->description}}" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Quantity</label>
	   <input type="text" class="form-control" value="{{$receive->quantity}}" id="exampleFormControlInput1" name="quantity" placeholder="20">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Receiver Name</label>
	   <input type="text" class="form-control" value="{{$receive->receiverName}}" id="exampleFormControlInput1"name="receiverName" placeholder="name">
  </div>
	<input style="align_center" class="btn btn-primary" type="submit" value="Update">
</form>
	
 </header>
 </div> 
</div>

@stop