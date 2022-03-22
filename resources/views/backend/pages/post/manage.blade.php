@extends('backend.layout.template')

@section('title') <title>Rentsheba Admin Dashboard</title> @endsection

@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle" style='background:linear-gradient(to right, #1CAF9A 0%, #17A2B8 100%)'>
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>Post</h4>
                <p class="mg-b-0 text-white">Post Management.</p>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">

                <div class='col-sm-12 col-xl-12'>
                    <div class="card">
                        <div class="card-header tx-medium">
                            <div class='d-flex align-items-center justify-content-between'>
                                <h5 class='br-section-label m-0'>Post List</h5>
                                <a href="{{route('post.create')}}" class='btn btn-info btn-sm'>Add New Post</a>
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
                                    @php $i = 1 @endphp
                                    @foreach( $adminPosts as $item)
                                    <tr>
                                        <th scope="row">{{$i}}</th>
                                        <td>
                                            @if( !empty( $item->image))
                                            <img src="{{asset('image/' . $item->image)}}" class='wd-35'  alt="">
                                            @else
                                            @endif
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->categoryFunction->name}}</td>
                                        <td>
                                            @if( $item->status == 1)
                                            <span class='badge badge-success'>Active</span>
                                            @else
                                            <span class='badge badge-danger'>In-Active</span>
                                            @endif
                                        </td>
                                        <td class='' style='width:250px'>
                                            <div >
                                                <a href="#" class='btn btn-info btn-sm text-white'><i class='fa fa-eye'></i> SHOW</a>
                                                <a href="{{route('post.edit' , $item->id)}}" class='btn btn-primary btn-sm text-white'><i class='fa fa-edit'></i> EDIT</a>
                                                <a  class='btn btn-danger btn-sm text-white' data-toggle="modal" data-target="#delModal{{$item->id}}"><i class='fa fa-trash'></i> DELETE</a>
                                            </div>
                                            <!-- Modal start -->
                                            <div class="modal fade" id="delModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete <b class='text-danger'>{{$item->name}}</b> Category ?</h5>
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