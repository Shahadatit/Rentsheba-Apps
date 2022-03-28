@extends('backend.layout.template')

@section('title') <title>Rentsheba Admin Dashboard</title> @endsection

@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle" style='background:linear-gradient(to right, #1CAF9A 0%, #17A2B8 100%)'>
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>Cuntry</h4>
                <p class="mg-b-0 text-white">Cuntry Management.</p>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">

                <div class='col-sm-12 col-xl-12'>
                    <div class="card">
                        <div class="card-header tx-medium">
                            <div class='d-flex align-items-center justify-content-between'>
                                <h5 class='br-section-label m-0'>Cuntry List</h5>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">

                            <!-- Category list table start -->
                            <table class="table table-hover mg-b-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Post titel</th>
                                        <th>Comment</th>
                                        <th>User</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach( $comments as $item)
                                    <tr>
                                        <th scope="row">{{$i}}</th>
                                        <td>{{$item->post->name}}</td>
                                        <td>{{$item->comment}}</td>
                                        <td>{{$item->user->name}}</td>
                                        <td>
                                            @if( $item->status == 1)
                                            <span class='badge badge-success'>Publish</span>
                                            @elseif($item->status == 2)
                                            <span class='badge badge-danger'>Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class='d-flex'>
                                                <a class='btn btn-primary btn-sm text-white' data-toggle="modal" data-target="#editComment{{$item->id}}"><i class='fa fa-edit'></i> EDIT</a>
                                                <form action="{{route('comment.destroy', $item->id)}}" method="POST" class='mx-5'>
                                                    @csrf 
                                                    <button type="submit"class='btn btn-danger btn-sm text-white' ><i class='fa fa-trash'></i> DELETE</button>
                                                </form>
                                                
                                            </div>
                                            <!-- Edit Modal start -->
                                            <div class="modal fade" id="editComment{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Comment Midified</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('comment.update' , $item->id)}}" method="POST">
                                                            @csrf 
                                                            <div class="form-group">
                                                                <label for="">Comment</label>
                                                            
                                                                <textarea name="comment" id="" class='form-control' cols="30" rows="2">{{$item->comment}}</textarea>
                                                            </div>
                                                            <div class="form-group mb-5">
                                                                <label for="">Comment</label>
                                                                <select name="status" class="form-control" id="">
                                                                    <option value="2">select Status</option>
                                                                    <option value="1" @if($item->status == 1) selected @endif>Publish</option>
                                                                    <option value="2" @if($item->status == 2) selected @endif>Pending</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </form>
                                                
                                                </div>
                                            </div>
                                            <!-- Edit Modal end -->

                                            
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