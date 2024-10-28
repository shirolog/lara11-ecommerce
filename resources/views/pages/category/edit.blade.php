@extends('layout')

@section('content')

<div class="container">
    <h3 align="center">Category</h3>
    <br>

    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <div class="form-area">
                <form action="{{route('category.update', $category->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" value="{{$category->name}}" class="form-control" id="name">
                        </div>

                        <div class="col-md-6">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                            
                                <option value="1" {{$category->status == 1 ? 'selected' : ''}}>True</option>
                            
                                <option value="0" {{$category->status == 0 ? 'selected' : ''}}>False</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
            </div>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Category Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                        <tr>
                            <td scope="col">{{$category->name}}</td>
                            <td scope="col">
                                @if($category->status == 1)
                                    true
                                @else
                                    false
                                @endif
                            </td>

                            <td scope="col">

                                <form action="{{route('category.destroy', $category->id)}}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('delete this category?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


    @push('css')
    
        <style>
            .form-area{
                padding: 20px;
                margin-top: 20px;
                background: white;
            }
        </style>
    
    @endpush

@endsection
