@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-8">
               <div class="card">
                   <div class="card-header bg-light" style="text-align: center; font-size:30px;">
                       Product List
                   </div>
                     <div class="card-body  badge-dark">
                             <table class="table table-bordered">
                               <thead>
                                 <tr>
                                     <th>Product Name</th>
                                     <th>Product Description</th>
                                     <th>Product Price</th>
                                     <th>Product Quantity</th>
                                     <th>alert Quantity</th>
                                     <th>#</th>
                                 </tr>
                               </thead>
                                 <tbody>
                                 @foreach($products as $product)
                                     <tr>
                                         <th>{{$product->product_name}}</th>
                                         <th>{{$product->product_description}}</th>
                                         <th>{{$product->product_price}}</th>
                                         <th>{{$product->product_quantity}}</th>
                                         <th>{{$product->alert_quantity}}</th>
                                         <th>...</th>

                                     </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                            {{$products->links()}}
                     </div>
               </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-header bg-success">
                       Add Product From
                    </div>
                     <div class="card-body">
                        @if (session('status'))
                             <div class="alert alert-success">
                                 {{session('status')}}
                             </div>
                            @endif


                         <form action="{{url('add/product/insert')}}" method="post">
                             @csrf
                             <div  class="form-group " >
                                 <label>Product Name</label>
                                 <input type="text" class="form-control" placeholder="Enter Your Product Name" name="product_name">
                             </div>
                             <div  class="form-group " >
                                 <label>Product Description</label>
                                  <textarea name="product_description" class="form-control" rows="3" ></textarea>
                             </div>
                             <div  class="form-group " >
                                 <label>Product price</label>
                                 <input type="text" class="form-control" placeholder="Enter Your Product price" name="product_price">
                             </div>
                             <div  class="form-group " >
                                 <label>Product Quantity</label>
                                 <input type="text" class="form-control" placeholder="Enter Your Product quantity" name="product_quantity">
                             </div>
                             <div  class="form-group " >
                                 <label>alert Quantity</label>
                                 <input type="text" class="form-control" placeholder="Enter Your Product Alert" name="alert_quantity">
                             </div>
                             <button type="submit" class="btn btn-info">Add product</button>
                         </form>
                     </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
