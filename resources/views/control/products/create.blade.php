@extends('control.parent')

@section('title',"creat")
@section('page_big_name',"create")
@section('page_small_name',"create")

@section('styles')
@endsection

@section('content')

  
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add new product</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            @if ($errors->any())
            <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
             <ul>
             @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
             @endforeach
           </ul>
         </div>
       @endif
          
            <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
              
              @csrf
              <div class="card-body">
              
              {{-- @if ($errors->any())
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                @foreach ($errors->all() as $error )
                  <li>
                    {{$error}}
                  </li>
                @endforeach
              </div>  
              @endif --}}
            
              @if (session()->has('message'))
              <div class="alert alert-{{session()->get('type')}} alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> success!</h5>
                {{session()->get('message')}}
              </div>
                @endif


                <div class="form-group">
                  <label for="title">title</label>
                  <input type="text" class="form-control" value ="{{old('title')}}"  name="title" id="title" placeholder="name">
                </div>

                 <div class="form-group">
                  <label for="descreption">Description</label>
                  <input type="text" class="form-control" value ="{{old('descreption')}}"  name="descreption" id="descreption" placeholder="Description">
                </div> 
                
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Image:</strong>
                      <input type="file" name="image" class="form-control" placeholder="image">
                  </div>
              </div> 

                 {{-- <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="productImage">
                      <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                    </div>
                     <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div> --}}

                <div class="form-group">
                  <label for="sku">sku</label>
                  <input type="text" class="form-control" value ="{{old('sku')}}"  name="sku" id="sku" placeholder="sku">
                </div>

                  <div class="form-group">
                    <label for="old_Price">old_Price</label>
                    <input type="number" id="old_Price" class="form-control" name="old_Price" value="{{old('old_Price')}}" > 
                  </div>

                  <div class="form-group">
                    <label for="new_Price">new_Price</label>
                    <input type="number" id="new_Price" class="form-control" name="new_Price" value="{{old('new_Price')}} " >
                  </div>
                
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input name="in_stock" type="checkbox" class="custom-control-input" id="in_stock">
                    <label class="custom-control-label" for="in_stock">stock product</label>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
 

        </div>
        <!--/.col (left) -->
       
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('scripts')
@endsection
