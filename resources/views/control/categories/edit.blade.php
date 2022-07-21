@extends('control.parent')

@section('title',"edit")
@section('page_big_name',"edit")
@section('page_small_name',"edit")

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
              <h3 class="card-title">edit Category</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{route('categories.update', $category ->id)}}">
              @csrf
              @method('put')
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
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> success!</h5>
                {{session()->get('message')}}
              </div>
                @endif

                <div class="form-group">
                  <label for="title">title</label>
                  <input type="text" class="form-control"
                    @if(old('title')) value = " {{(old('title'))}} " @else  value = "{{$category->title}} @endif "  
                  name="title" id="title" placeholder="name">
                </div>
          
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input name="active" type="checkbox" class="custom-control-input" id="active"
                          @if ($category->is_active) checked @endif >
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
