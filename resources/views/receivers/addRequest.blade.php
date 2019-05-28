@extends('layouts.app')

@section('content')

<form action="{{ route('receivers.store') }}" method="post" enctype="multipart/form-data" style="width:1000px; margin-left:230px; margin-right:20px">
 <h3>Please fill up the form</h3>
  <div class="form-group" >
     @csrf

    <label for="exampleFormControlSelect1">Request Type</label>
    <select class="form-control" id="exampleFormControlSelect1" name="requestType">
      <option>**Select**</option>
      <option>Education Fee</option>
      <option>Job</option>
      <option>Clothes</option>
      <option>Book</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Request's Image (as evidence)</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description</label>
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Quantity</label>
	   <input type="quantity" class="form-control" id="exampleFormControlInput1"  name="quantity" placeholder="20">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Receiver Name</label>
	   <input type="text" class="form-control" id="exampleFormControlInput1" name="receiverName" placeholder="name">
  </div>
	<input style="align_center" class="btn btn-primary" type="submit" value="Request">
</form>
	
 </header>
 </div> 
</div>

@stop