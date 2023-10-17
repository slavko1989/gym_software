@props(['formMembers'])
<p style='color: darkblue;'>Add new  members</p>  
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
<form action="{{ url('members/create') }}" method="post" 
enctype="multipart/form-data">
    @csrf
  
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
    @error('name')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

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
    <label for="name" class="form-label">Address:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter address" name="address" value="{{ old('address') }}">
    @error('address')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Profile:</label>
    <input type="file" class="form-control" id="name" placeholder="Enter profile" name="profile" value="{{ old('profile') }}">
    @error('profile')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Date begin:</label>
    <input type="date" class="form-control" id="name" placeholder="Enter date begin" name="date_begin" value="{{ old('date_begin') }}">
    @error('date_begin')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Date expired:</label>
    <input type="date" class="form-control" id="name" placeholder="Enter date expirion" name="date_ex" value="{{ old('date_ex') }}">
    @error('date_ex')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Category:</label>
    <select type="text" class="form-control" name="cat_id" value="{{ old('cat_id') }}">
      <option value="">CAT</option>
    </select>
    @error('cat_id')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>


  <button type="submit" class="btn btn-primary">ADD</button>
</form>
</div>