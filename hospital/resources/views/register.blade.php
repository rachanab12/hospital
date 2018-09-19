  @extends('masters.master')
  @section('title')
    HOSPITAL   |Home Page| Register
  @endsection

  @section('container')
    <div class="col-md-6  col-md-offset-4">
      <h3> Register</h3>
      <form method="post" action="{{ route('userregister')}}">
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
    <div class="form-group">
      <label for="password2"> Password Confirmation </label>
    </br>
      <input type="password" class="form-control" placeholder="password2" name="password2">
    </div>

    <div class="form-group">
      <label> Who are you?</label>
      </br>
      <input type="radio" value="1" name="role"> i am doctor
      </br>
      <input type="radio" value="0" name="role"> i am patient
    </div>
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
