@extends('admin.master')
@section('content')
    {{--<div class="row">--}}
    {{--<div class="col-md-10 col-md-offset-1">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">--}}
    {{--<h4 class="text-center text-success" >Add Category</h4>--}}

    {{--</div>--}}
    {{--<div class="panel-body">--}}
    {{--<form action="" method="POST" class="form-horizontal">--}}
    {{--<div class="form-group">--}}
    {{--<label class="control-label col-md-4"> Category Name </label>--}}
    {{--<div class="col-md-8 col-md-offset-4">--}}
    {{--<input type="text" name="category_name" class="form-control"/>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label class="control-label col-md-4"> Category Discription </label>--}}
    {{--<div class="col-md-8 col-md-offset-4">--}}
    {{--<textarea  name="category_discription" class="form-control"></textarea>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<label class="control-label col-md-4"> Publication Status </label>--}}
    {{--<div class="col-md-8 radio">--}}
    {{--<label> <input type="radio" checked name="publication_status"  value="1" />Published</label>--}}
    {{--<label> <input type="radio" name="unpublication_status"  value="0" />Unpublished</label>--}}

    {{--</div>--}}

    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<label class="control-label col-md-4"> Publication Status </label>--}}
    {{--<div class="col-md-8 col-md-offset-4">--}}
    {{--<input type="submit" name="btn" class="btn btn-success btn-block" value="save category"/>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</form>--}}

    {{--</div>--}}

    {{--</div>--}}

    {{--</div>--}}

    {{--</div>--}}

    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 m-auto">
                    <div class="card">
                        <div class="panel-heading">
                            <h4 class="text-center text-success" >Update Category</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="text-center text-success ">{{Session::get('message')}}</h3>
                            <h3 class="text-center text-success">{{Session::get('update message')}}</h3>
                            <form action="{{route('update-category')}}" method="POST" class="form-control">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name"  value="{{$category ->category_name}}" class="form-control"/>
                                        <input type="hidden" name="category_id"  value="{{$category ->id}}" class="form-control"/>


                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Category Description</label>
                                    <div class="col-md-8">
                                        <textarea name="category_description"  class="form-control" cols="10" rows="5">{{$category->category_description}}</textarea>

                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Publication Status</label>
                                    <div class="col-md-8 radio">

                                        <label> <input type="radio" checked name="published" {{$category->published==1 ? 'checked':''}} value="1"/> Published</label>
                                        <label> <input type="radio" name="published" {{$category->published==0 ?'checked':''}} value="0"/> Unpublished<br></label>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn"  class="btn btn-success btn-block" value="Update Category Info"/>
                                    </div>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>


@endsection