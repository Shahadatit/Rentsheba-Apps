@extends('backend.layout.template')

@section('title') <title>Rentsheba Admin Dashboard</title> @endsection

@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle" style='background:linear-gradient(to right, #1CAF9A 0%, #17A2B8 100%)'>
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>District</h4>
                <p class="mg-b-0 text-white">District Management</p>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">

                <div class='col-sm-12 col-xl-12'>
                    <div class="card">
                        <div class="card-header tx-medium">
                            <div class='d-flex align-items-center justify-content-between'>
                                <h5 class='br-section-label m-0'>Create District</h5>
                                <a href="{{route('district.index')}}" class='btn btn-info btn-sm'>All District List</a>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                           

                            <!-- Category form -->
                            <div>
                                <form action="{{route('district.update', $district->id)}}" method="POST">
                                    @csrf 
                                    <div class="row">
                                        <div class="col-lg-6 m-auto">
                                            <div class="form-group">
                                                <label for="">District Name</label>
                                                <input type="text" name="name" value='{{$district->name}}' class='form-control' >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Division</label>
                                                <select name="division" class='form-control' id="">
                                                    <option value="1">Select Division</option>
                                                    @foreach( $divisions as $item)
                                                    <option value="{{$item->id}}" @if( $item->id == $district->division_id) selected @endif>{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" class='form-control' id="">
                                                    <option value="1">-Select Category-</option>
                                                    <option value="1" @if( $district->status == 1 ) selected @endif>Active</option>
                                                    <option value="2" @if( $district->status == 2 ) selected @endif>In-Active</option>
                                                </select>
                                            </div>
                                           
                                            <div class="form-group">
                                            <button class="btn btn-info active btn-block mg-b-10">Save & Publish</button>
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