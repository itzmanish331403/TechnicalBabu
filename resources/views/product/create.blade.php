@extends('layout.admin-panel')

@section('page-content')

<!-- user create form css -->
@include('includes.user-form-css')
<!-- user create form css -->

<div class="container">
    <h2>New Product Create Form </h2>
    <form action="{{ route('product.store')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" value="{{old('name')}}" placeholder="Name" name="name">
            @error('name')
            <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputStatus">Status</label>
            <select name="status" id="exampleInputStatus" class="form-control">
                <option value="">Select Status</option>
                <option value="1">Enable</option>
                <option value="2">Disable</option>
            </select>
            @error('status')
            <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="mrp">MRP:</label>
            <input type="number" id="mrp" value="{{old('name')}}"  placeholder="MRP"  name="mrp">
            @error('mrp')
            <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="special_price">Special Price:</label>
            <input type="number" id="special_price"  placeholder="Special Price"  value="{{old('special_price')}}" name="special_price">
            @error('special_price')
            <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="discount">Discount:</label>
            <input type="number" id="discount" value="{{old('discount')}}"  placeholder="Discount"  name="discount">
            @error('discount')
            <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>



        <div class="form-group">
            <label for="description">description:</label>
            <input type="text" id="description" value="{{old('description')}}" placeholder="description" name="description">
            @error('description')
            <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="link">!! only URL Link:</label>
            <input type="link" id="link" value="{{old('link')}}" placeholder="Link" name="link">
            @error('link')
            <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>



        <div class="form-group">
      <label>Image:</label>
                      <input type="file" name="image" class="form-control">
                    </div>
      </div>

        <div class="form-group">
            <input type="submit" value="Register">
        </div>
    </form>

</div>

<div class="animation-area">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
</div>


@endsection