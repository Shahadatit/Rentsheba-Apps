@extends('backend.layout.template')

@section('title') <title>Rentsheba Admin Dashboard</title> @endsection

@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle" style='background:linear-gradient(to right, #1CAF9A 0%, #17A2B8 100%)'>
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>Blanck page</h4>
                <p class="mg-b-0 text-white">Rentsheba Admin Dashboard.</p>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">

                <div class='col-sm-12 col-xl-12'>
                    <div class="card">
                        <div class="card-header tx-medium">
                            <div class='d-flex align-items-center justify-content-between'>
                                <h5 class='br-section-label m-0'>Category List</h5>
                                <a href="{{route('category.create')}}" class='btn btn-info btn-sm'>Add New Category</a>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                           

                            <!-- Category list table start -->
                            <table class="table table-hover mg-b-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach( $categorys as $primary)
                                    <tr>
                                        <th scope="row">{{$i}}</th>
                                        <td>
                                            @if( !empty($primary->image))
                                            <img src="{{asset('image/' . $primary->image)}}" class='wd-40' alt="">
                                            @else
                                            @endif
                                        </td>
                                        <td>{{$primary->name}}</td>
                                        <td>
                                            @if( $primary->is_parent == 0)
                                            <span class="badge badge-primary">Primary</span>
                                            @else
                                            <span class="badge badge-dark">Sub Category</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if( $primary->status == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-warning">In-Active</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div>
                                                <a href="{{route('category.edit', $primary->id)}}" class='btn btn-primary btn-sm text-white'><i class='fa fa-edit '></i> EDIT</a>
                                                <a  class='btn btn-danger btn-sm text-white' data-toggle="modal" data-target="#delModal{{$primary->id}}"><i class='fa fa-trash '></i> DELETE</a>

                                            </div>
                                            <!-- Modal start  -->
                                            <div class="modal fade" id="delModal{{$primary->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete <b class='text-danger'>{{$primary->name}}</b> Category ?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <form action="">
                                                            @csrf 
                                                            <button type="button" class="btn btn-primary">Confirm</button>
                                                        </form>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @foreach( App\Models\Category::orderby('name','asc')->where('is_parent', $primary->id)->get() as $subCate)
                                    <tr>
                                        <th scope="row">--</th>
                                        <td>
                                            @if( !empty($subCate->image))
                                            <img src="{{asset('image/' . $subCate->image)}}" class='wd-40' alt="">
                                            @else
                                            @endif
                                        </td>
                                        <td>{{$subCate->name}}</td>
                                        <td>
                                            @if( $subCate->is_parent == 0)
                                            <span class="badge badge-primary">Primary</span>
                                            @else
                                            <span class="badge badge-dark">Sub Category</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if( $subCate->status == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-warning">In-Active</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div>
                                                <a href="{{route('category.edit', $subCate->id)}}" class='btn btn-primary btn-sm text-white'><i class='fa fa-edit '></i> EDIT</a>
                                                <a  class='btn btn-danger btn-sm text-white' data-toggle="modal" data-target="#delModal{{$subCate->id}}"><i class='fa fa-trash '></i> DELETE</a>

                                            </div>
                                            <!-- Modal start  -->
                                            <div class="modal fade" id="delModal{{$subCate->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete <b class='text-danger'>{{$subCate->name}}</b> Category ?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <form action="">
                                                            @csrf 
                                                            <button type="button" class="btn btn-primary">Confirm</button>
                                                        </form>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @php $i++ @endphp
                                    @endforeach
                                   
                                </tbody>
                            </table>


                        </div><!-- card-body -->
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection