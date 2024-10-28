@extends('loginlayout')
@section('content')
    
    <div class="container">

        <div class="card">
            <div class="card-header">Register Form</div>
            <div class="card-body"> 
            
                <form action= "{{route('admin.store')}}" method="post">
                    @csrf 
                    <label>First Name</label>
                    <input type="text" name="name" id="name" class ="form-control"> </br>
            
                    <label>Email</label>
                    <input type="email" name="email" id="email" class ="form-control"> </br>
                    
                    <label>Password</label>
                    <input type="password" name="password" id="password" class ="form-control"> </br>

                    <input type="submit" value="Save" class="btn btn-success"> 
                </form>
            </div>
        </div>
    </div>
@endsection