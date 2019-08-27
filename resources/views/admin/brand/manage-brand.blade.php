@extends('admin.master')
@section('content')
    <br/>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <h4 class="text-center text-success" >Add Manage</h4>
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <h3 class="text-center text-success">{{Session::get('publicshed message')}}</h3>
                    <h3 class="text-center text-success">{{Session::get('edit message')}}</h3>
                    <h3 class="text-center text-success">{{Session::get('delete message')}}</h3>

                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>S1 No</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Publication Staus</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$brand->brand_name}}</td>
                                <td>{{$brand->brand_description}}</td>
                                <td>{{$brand->published==1 ?'Published':'Unpublishes'}}</td>
                                <td>
                                    @if($brand->published==1)
                                        <a href="{{route('unpublished-brand',['id'=>$brand->id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up">Pubulished</span>
                                        </a>
                                    @else
                                        <a href="{{route('published-brand',['id'=>$brand->id])}}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down">Unpubulished</span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-brand',['id'=>$brand->id])}}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit">Edit</span>
                                    </a>
                                    <a href="{{route('delete-brand',['id'=>$brand->id])}}" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>

        </div>

    </div>

    <script>

    </script>


@endsection