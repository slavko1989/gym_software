@extends('gym_template/head')
@section('title','GYM SOFTWARE')
@section('links')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />




@props(['cat','comp','t','l'])

@if(session()->has('message'))

  <p style="font: !important;font-size: 20px;font-weight: bolder;">
    {{ session()->get('message') }}
  </p>

@endif

@if(session()->has('danger_message'))

  <p style="font: !important;font-size: 20px;font-weight: bolder;">
    {{ session()->get('danger_message') }}
  </p>


@endif

@if(Auth::check())
    {{ "welcome: " . Auth::user()->name }}



<a href="{{ url('members/member_web_card/'.


auth::user()->id) }}">View your card</a></p> 
@endif

    <br>


<div style="background-color: violet;border-radius:20px;margin: 10px;padding: 10px;width: 100%;  display: flex; justify-content: center; align-items: center;">



<p style='color: black;font-weight: bolder;
margin: 30px;
'>CREATE YOUR CARD<br> 
BEFORE YOU GO TO THE GYM!
PAY IN THE GYM.<br>
OR PAY WITH YOU CREDICT CARD<br>

<form action="{{ url('online_payment/online_members_payment') }}" method="post" 
enctype="multipart/form-data">
    @csrf
  <div class="row">
    <div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
    @error('name')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

   </div>

  <div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Email:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter email" name="email" value="{{ old('email') }}">
    @error('email')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>
</div>


  <div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Phone:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter phone" name="phone" value="{{ old('phone') }}">
    @error('phone')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>

<div class="row">
  <div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Country:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter contry" name="country" value="{{ old('country') }}">
    @error('country')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>

  <div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">City:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter city" name="city" value="{{ old('city') }}">
    @error('city')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>

  <div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Address:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter address" name="address" value="{{ old('address') }}">
    @error('address')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>
</div>
<div class="row">
  <div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Profile:</label>
    <input type="file" class="form-control" id="name" placeholder="Enter profile" name="profile" value="{{ old('profile') }}">
    @error('profile')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>

  <div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Date begin:</label>
    <input type="date" class="form-control" id="name" placeholder="Enter date begin" name="date_begin" value="{{ old('date_begin') }}">
    @error('date_begin')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>

  <div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Date expired:</label>
    <input type="date" class="form-control" id="name" placeholder="Enter date expirion" name="date_ex" value="{{ old('date_ex') }}">
    @error('date_ex')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>
</div>

<div class="row">
 <div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Category:</label>
    <select type="text" class="form-control" name="cat_id" value="{{ old('cat_id') }}">
      @foreach($cat as $cat)
      <option value="{{ $cat->id }}">{{ $cat->name }}/{{ $cat->price }}$</option>
      @endforeach
    </select>
    @error('cat_id')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>

<div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Company:</label>
    <select type="text" class="form-control" name="comp_id" value="{{ old('comp_id') }}">
      
      <option value="0">No company</option>
      @foreach($comp as $comp)
      <option value="{{ $comp->id }}">{{ $comp->name }}</option>
      @endforeach
    </select>
    @error('comp_id')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>



<input type="hidden" name="status" value="0">
<input type="hidden" name="payment" value="0">

  <div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Payment:</label>
    <select type="text" class="form-control" name="web_card" value="{{ old('web_card') }}">
      
      <option value="0">Must choose</option>
      <option value="1">Create card/Pay in the gym</option>
      <option value="2">Credict Card</option>

    </select>
    @error('web_card')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>





<div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Location:</label>
    <select type="text" class="form-control" name="location_id" value="{{ old('location_id') }}">
      
      <option>Must Choose!</option>
      @foreach($l as $l)
      <option value="{{ $l->id }}">{{ $l->city }} {{ $l->street }}</option>
      @endforeach
    </select>
    @error('location_id')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>

<div class="col">
  <div class="form-outline">
    <label for="name" class="form-label">Trainer:</label>
    <select type="text" class="form-control" name="trainer_id" value="{{ old('trainer_id') }}">
      
      <option value="0">No trainer</option>
      @foreach($t as $t)
      <option value="{{ $t->id }}">
        {{ $t->name }}   
        {{ $t->program->name }} 
        {{ $t->program->price }}$ 
      </option>
      @endforeach
    </select>
    @error('trainer_id')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
</div>

<div>
  <button type="submit" class="btn btn-primary" style="width: 49%;font-size: 20px;font-weight: bolder;margin-top: 4px;">CREATE CARD/PAY IN THE GYM</button>

  <a href="{{ route('stripe') }}" class="btn btn-primary" style="width: 49%;font-size: 20px;font-weight: bolder;margin-top: 4px;">PAY WITH CREDICT CAARD</a>

  
</div>
</form>
</div>


