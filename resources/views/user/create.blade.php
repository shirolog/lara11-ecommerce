@extends('loginlayout')
@section('content')
  
    <div class="card">
        <div class="card-header">Register Form</div>
        <div class="card-body"> 
        
            <form action= "{{route('user.register')}}" method="post">
                @csrf
                <label>First Name</label>
                <input type="text" name="name" id="name" class ="form-control"> </br>
        
                <label>Email</label>
                <input type="email" name="email" id="email" class ="form-control"> </br>
                <label>Password</label>
                <input type="password" name="password" id="password" class ="form-control"> </br>
                <input type="submit" value="Save" class="btn btn-success"> 
                <p class="mt-3 mb-0">already have an account?</p>
                <a href="{{url('login')}}">Login now</a>
            </form>
        </div>
    </div>
@endsection