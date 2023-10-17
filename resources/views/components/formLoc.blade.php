@props(['formLoc'])
<p style='color: darkblue;'>Add new  location</p>  
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
<div style="background-color: violet;border-radius:20px;margin: 10px;padding: 10px;width: 500px;">
<form action="{{ url('locations/create') }}" method="post">
    @csrf
  
 

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Email:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter email" name="email" value="{{ old('email') }}">
    @error('email')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>


  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Phone:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter phone" name="phone" value="{{ old('phone') }}">
    @error('phone')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Country:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter contry" name="country" value="{{ old('country') }}">
    @error('country')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">City:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter city" name="city" value="{{ old('city') }}">
    @error('city')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Street:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter address" name="street" value="{{ old('street') }}">
    @error('street')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">ADD</button>
</form>
</div>
