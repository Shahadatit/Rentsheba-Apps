@extends('backend.layout.template')

@section('title') <title>Rentsheba Admin Dashboard</title> @endsection

@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle" style='background:linear-gradient(to right, #1CAF9A 0%, #17A2B8 100%)'>
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>Cuntry</h4>
                <p class="mg-b-0 text-white">Cuntry Management</p>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">

                <div class='col-sm-12 col-xl-12'>
                    <div class="card">
                        <div class="card-header tx-medium">
                            <div class='d-flex align-items-center justify-content-between'>
                                <h5 class='br-section-label m-0'>Create Cuntry</h5>
                                <a href="{{route('cuntry.index')}}" class='btn btn-info btn-sm'>All Cuntry List</a>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                           

                            <!-- Category form -->
                            <div>
                                <form action="{{route('cuntry.update', $cuntry->id)}}" method="POST">
                                    @csrf 
                                    <div class="row">
                                        <div class="col-lg-6 m-auto">
                                            <div class="form-group">
                                                <label for="">Cuntry Name</label>
                                                <input type="text" name="name" value="{{$cuntry->name}}" class='form-control' >
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" class='form-control' id="">
                                                    <option value="1">-Select Status-</option>
                                                    <option value="1" @if( $cuntry->status == 1) selected @endif>Active</option>
                                                    <option value="2" @if( $cuntry->status == 2) selected @endif>In-Active</option>
                                                </select>
                                            </div>
                                           
                                            <div class="form-group">
                                            <button type='submit' class="btn btn-info active btn-block mg-b-10">Save Change</button>
                                            </div>

                                        </div>
                                    </div>
                                    
                                </form>
                            </div>


                        </div><!-- card-body -->
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection