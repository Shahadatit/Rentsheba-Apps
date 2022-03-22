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
                                <a href="{{route('cuntry.create')}}" class='btn btn-info btn-sm'>Add New Cuntry</a>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">

                            <!-- Category list table start -->
                            <table class="table table-hover mg-b-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Cuntry Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach( $cuntrys as $item)
                                    <tr>
                                        <th scope="row">{{$i}}</th>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            @if( $item->status == 1)
                                            <span class='badge badge-success'>Active</span>
                                            @else
                                            <span class='badge badge-danger'>In-Active</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div>
                                                <a href="{{route('cuntry.edit' , $item->id)}}" class='btn btn-primary btn-sm text-white'><i class='fa fa-edit'></i> EDIT</a>
                                                <a href="" class='btn btn-danger btn-sm text-white'><i class='fa fa-trash'></i> DELETE</a>
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