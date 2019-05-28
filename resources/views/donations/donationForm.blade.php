@extends('layouts.app')

@section('content')

<form action="{{ route('donations.store') }}" method="post" enctype="multipart/form-data" style="width:1009px; margin-left:230px; margin-right:20px" >
 <h3>Please fill up the form</h3>
  <div class="form-group" >
   @csrf
    <label for="exampleFormControlSelect1">Donation Type</label>
    <select class="form-control" id="exampleFormControlSelect1" name="donationType">
      <option>**Select**</option>
      <option>Education Fee</option>
      <option>Job</option>
      <option>Clothes</option>
      <option>Book</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Donation Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description</label>
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Quantity</label>
	   <input type="text" class="form-control" id="exampleFormControlInput1" name="quantity" placeholder="20">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Donor Name</label>
	   <input type="text" class="form-control" id="exampleFormControlInput1"name="donorName" placeholder="name">
  </div>
	<input style="align_center" class="btn btn-primary" type="submit" value="Donate">
</form>
	
 </header>
 </div> 
</div>

@stop