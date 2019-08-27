@extends('admin.master')
@section('content')

    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 m-auto">
                    <div class="card">
                        <div class="panel-heading">
                            <h4 class="text-center text-success" >Add Product</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="text-center text-success ">{{Session::get('message')}}</h3>


                            {{ Form::open(['route'=>'new-product','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) }}

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="category_id">
                                        <option>==== Selete Category Name ====</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach

                                    </select>
                                    <span class="text-danger">{{$errors->has('category_id')?  $errors->first('category_id'):' '}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Brand Name</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="brand_id">
                                        <option>==== Selete Brand Name ====</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{$errors->has('category_id')?  $errors->first('category_id'):' '}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Product Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="product_name"  class="form-control"></input>
                                    <span class="text-danger">{{$errors->has('brand_description')?  $errors->first('brand_description'):' '}}</span>

                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Product Price</label>
                                <div class="col-md-8">
                                    <input type="number" name="product_price"  class="form-control" ></input>
                                    <span class="text-danger">{{$errors->has('brand_description')?  $errors->first('brand_description'):' '}}</span>

                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Product Quantity</label>
                                <div class="col-md-8">
                                    <input type="number" name="product_quantity"  class="form-control" ></input>
                                    <span class="text-danger">{{$errors->has('brand_description')?  $errors->first('brand_description'):' '}}</span>

                                </div>

                            </div>



                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Short Description</label>
                                <div class="col-md-8">
                                    <textarea name="short_description"  class="form-control" ></textarea>
                                    <span class="text-danger">{{$errors->has('brand_description')?  $errors->first('brand_description'):' '}}</span>

                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Long Description</label>
                                <div class="col-md-8">
                                    <textarea name="long_description" id="editor"  class="form-control" ></textarea>
                                    <span class="text-danger">{{$errors->has('brand_description')?  $errors->first('brand_description'):' '}}</span>

                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Product Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="product_image" accept="image/*" />
                                    <span class="text-danger">{{$errors->has('brand_description')?  $errors->first('brand_description'):' '}}</span>

                                </div>

                            </div>



                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Publication Status</label>
                                <div class="col-md-8 radio">

                                    <label> <input type="radio"  name="published" value="1"> Published</label>
                                    <label> <input type="radio" name="published" value="0"> Unpublished<br></label>
                                    </br> <span class="text-danger">{{$errors->has('published')?  $errors->first('published'):' '}}</span>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn"  class="btn btn-success btn-block" value="Save Product Info"/>
                                </div>

                            </div>


                            {{ Form::close() }}

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>


@endsection