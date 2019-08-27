@extends('admin.master')
@section('content')

    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 m-auto">
                    <div class="card">
                        <div class="panel-heading">
                            <h4 class="text-center text-success" >Add Brand</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="text-center text-success ">{{Session::get('message')}}</h3>


                            {{ Form::open(['route'=>'new-brand','method'=>'POST','class'=>'form-horizontal']) }}
                            {{--<div class="form-group row">--}}

                            {{--{{Form::label('brand_name', 'Brand Name', ['class'=>'col-md-3']) }}--}}
                                {{--<div class="col-md-9">--}}
                                    {{--{{Form::text('brand_name', '', ['class'=>'form-control'])}}--}}
                                    {{--<span class="text-danger">{{$errors->has('brand_name')?  $errors->first('brand_name'):' '}}</span>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Brand Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="brand_name"  class="form-control">
                                    <span class="text-danger">{{$errors->has('brand_name')?  $errors->first('brand_name'):' '}}</span>
                                </div>
                            </div>

                            {{--<div class="form-group row">--}}

                                {{--{{Form::label('brand_description', 'Brand Description', ['class'=>'col-md-3']) }}--}}
                                {{--<div class="col-md-9">--}}
                                    {{--{{Form::textarea('brand_description', '', ['class'=>'form-control'])}}--}}
                                    {{--<span class="text-danger">{{$errors->has('brand_description')?  $errors->first('brand_description'):' '}}</span>--}}

                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Brand Description</label>
                                <div class="col-md-8">
                                    <textarea name="brand_description"  class="form-control" cols="10" rows="5"></textarea>
                                    <span class="text-danger">{{$errors->has('brand_description')?  $errors->first('brand_description'):' '}}</span>

                                </div>

                            </div>

                            {{--<div class="form-group row">--}}

                                {{--{{Form::label('publication', 'Publication Status', ['class'=>'col-md-3']) }}--}}


                                {{--<div class="col-md-9">--}}
                                    {{--{{Form::radio('publication', '1')}}--}}
                                    {{--{{Form::label('publication', 'Publication') }}--}}
                                    {{--{{Form::radio('publication', '0')}}--}}
                                    {{--{{Form::label('publication', 'Unpublication') }}--}}
                                    {{--<span class="text-danger">{{$errors->has('publication')?  $errors->first('publication'):' '}}</span>--}}

                                {{--</div>--}}
                            {{--</div>--}}

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
                                    <input type="submit" name="btn"  class="btn btn-success btn-block" value="Save Brand Info"/>
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