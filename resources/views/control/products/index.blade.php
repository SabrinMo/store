@extends('control.parent')

@section('title',"index")
@section('page_big_name',"index")
@section('page_small_name',"index")

@section('styles')
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">products</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Old Price</th>
                    <th>New Price</th>
                    <th>SKU</th>
                    <th>in_stock</th>
                    <th>Category</th>
                    <th>settings</th>


                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td><img src="/image/{{ $product->image }}" width="100px"></td>
                        {{-- <td>{{$product->image}}</td> --}}
                        <td>{{$product->title}}</td>                        
                        <td>{{$product->description}}</td>
                        <td>{{$product->old_Price}}</td>
                        <td>{{$product->new_Price}}</td>
                        <td>{{$product->sku}}</td>
                        <td>
                            <span class="badge @if($product->in_stock)bg-success @else bg-danger @endif ">{{$product->in_stock}}</span>
                          </td>
                        <td>{{$product->category}}</td>

                        <td> 
                          <div class="btn-group">
                            <a href="{{route('products.edit',$category->id)}}" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                            </a>
                            <form method="POST" action="{{route('product.destroy',$category->id)}}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                              </button>
                             
                            </form>
                           
                          </div>
                        </td>
                      </tr>
                    @endforeach
                    
                </tbody>
              </table>
            </div>
            
          </div>
          <!-- /.card -->

    
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('scripts')
@endsection
