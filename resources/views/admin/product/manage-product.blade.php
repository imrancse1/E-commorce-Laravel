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
                    <div  class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <th>S1 No</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            <tr/>

                            <tr>
                                @php($i=1)
                                @foreach($products as $product)
                            <td>{{$i++}}</td>
                            {{--<td>{{$product->id}}</td>--}}
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>
                                <img src="{{asset($product->product_image)}}" alt="" height="100" width="100">
                            </td>
                            <td>{{$product->product_price}}</td>
                            <td>{{$product->product_quantity}}</td>
                            <td>{{$product->published}}</td>
                                    <td>
                                        <a href="" class="btn btn-info btn-xs" title="View Details">
                                            <span class="glyphicon glyphicon-zoom-in">View Details</span>
                                        </a>
                                        <a href="" class="btn btn-primary btn-xs" title="Published">
                                            <span class="glyphicon glyphicon-arrow-up">Published</span>
                                        </a>
                                        <a href="{{route('eidt-product',['id'=>$product->id])}}" class="btn btn-success btn-xs" title="Edit">
                                            <span class="glyphicon glyphicon-edit">Edit </span>
                                        </a>
                                        <a href="" class="btn btn-danger btn-xs" title=" Delete">
                                            <span class="glyphicon glyphicon-zoom-in">Delete </span>
                                        </a>
                                    </td>

                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>




@endsection