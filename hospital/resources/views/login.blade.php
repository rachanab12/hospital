  @extends('masters.master')
  @section('title')
  HOSPITAL   |Home Page| Login
  @endsection

  @section('container')
    <div class="col-md-6  col-md-offset-4">
      <h3> Login </h3>
      <form method="post" action="{{route('login')}}">
    <div class="form-group">
      <label for="email"> Email </label>
      <input type="email" class="form-control" placeholder="email" name="email" id="email">
    </div>
      </br>
    <div class="form-group">
      <label for="password"> Password </label>
      <input type="password" class="form-control" placeholder="password" name="password">
    </div>
    </br>
    <button type="submit" name="submit" class="btn btn-info"> submit </button>
    {{csrf_field()}}
    </form>
    @if(count($errors)>0)
    <div class="alert-alert-danger">

      @foreach($errors->all() as $er)
      {{$er}}
      @endforeach
    </div>
    @endif
    </div>
  @endsection
