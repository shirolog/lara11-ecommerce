@extends('layout')

@section('content')

    <div class="container">
        <h3 align="center">Products</h3>
        <br>

        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <div class="form-area">
                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="productname">Product Name</label>
                                <input type="text" name="productname" class="form-control" id="productname">
                            </div>

                            <div class="col-md-6">
                                <label for="cat_id">Category</label>
                                <select name="cat_id" class="form-control" id="cat_id">
                                  @foreach($categories as $category)
                                    <option value="{{$category->status}}">{{$category->name}}</option>
                                  @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="description">Description</label>
                                <textarea value="" name="description" class="form-control" id="description"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="price">Price</label>
                                <input type="number" name="price" class="form-control" id="price">
                            </div>

                            <div class="col-md-6">
                                <label for="photo">Image</label>
                                <input type="file" name="photo" class="form-control" id="photo"
                                accept="image/png, image/jpeg, image/jpg, image/gif">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>

                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($categories as $key => $category)
                            <tr>
                                <td scope="col">{{++$key}}</td>
                                <td scope="col">{{$category->name}}</td>
                                <td scope="col">
                                    @if($category->status == 1)
                                        true
                                    @else
                                        false
                                    @endif
                                </td>

                                <td scope="col">
                                    <a href="{{route('category.edit', $category->id)}}">
                                        <button class="btn btn-primary btn-sm"><i class="fas fa-square-pen"  aria-hidden="true"></i>Edit</button>
                                    </a>

                                    <form action="{{route('category.destroy', $category->id)}}" method="post" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" 
                                        onclick="return confirm('delete this category?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
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
