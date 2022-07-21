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
              <h3 class="card-title">categories</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Active</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>settings</th>


                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>
                          <span class="badge @if($category->active)bg-success @else bg-danger @endif ">{{$category->is_active}}</span>
                        </td>                        
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td> 
                          <div class="btn-group">
                            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                            </a>
                            <form method="POST" action="{{route('categories.destroy',$category->id)}}">
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
