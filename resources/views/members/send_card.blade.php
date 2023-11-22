@if(session()->has('mess'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess') }}</p>
@endif


 <form class="form-horizontal" method="post" action="{{ url('members/send_card') }}">
      @csrf
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Send</button>
    </div>
  </div>
</form>