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
              <h3 class="card-title">create Category</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{route('categories.store')}}">
              @csrf
              <div class="card-body">
              @if ($errors->any())
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                @foreach ($errors->all() as $error )
                  <li>
                    {{$error}}
                  </li>
                @endforeach
              </div>  
              @endif
            
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
                {{-- <div class="form-group">
                  <label for="Description">Description</label>
                  <input type="text" class="form-control" name="description" id="Description" placeholder="Description">
                </div> --}}
                {{-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div> --}}
                {{-- <div class="form-check">
                  <input type="checkbox" class="form-check-input"  name="active" id="active" checked>
                  <label class="form-check-label" for="active">active</label>
                </div> --}}
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input name="active" type="checkbox" class="custom-control-input" id="active">
                    <label class="custom-control-label" for="active">category active</label>
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
