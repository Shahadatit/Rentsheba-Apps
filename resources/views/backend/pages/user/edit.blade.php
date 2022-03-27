@extends('backend.layout.template')

@section('title') <title>Rentsheba Admin Dashboard</title> @endsection

@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle" style='background:linear-gradient(to right, #1CAF9A 0%, #17A2B8 100%)'>
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>User</h4>
                <p class="mg-b-0 text-white">User Management</p>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">

                <div class='col-sm-12 col-xl-12'>
                    <div class="card">
                        <div class="card-header tx-medium">
                            <div class='d-flex align-items-center justify-content-between'>
                                <h5 class='br-section-label m-0'>Create User</h5>
                                <a href="{{route('user.index')}}" class='btn btn-info btn-sm'>All User List</a>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                           

                            <!-- Category form -->
                            <div>
                                <form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <div class="form-group">
                                                <label for="">User Name</label>
                                                <input type="text" name="name" value='{{$user->name}}' class='form-control' >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone</label>
                                                <input type="text" name="phone" value='{{$user->phone}}' class='form-control' >
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Country</label>
                                                <select name="cuntry" class='form-control' id="">
                                                    <option value="">-Select Cuntry-</option>
                                                    @foreach($countrys as $country)
                                                    <option value="{{$country->id}}" @if($country->id == $user->cuntry) selected @endif>{{$country->name}}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Zip Code </label>
                                                <input type="text" name="zip_code" value='{{$user->zip_code}}' class='form-control' >
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" class='form-control' id="">
                                                    <option value="1">-Select Category-</option>
                                                    <option value="1" @if( $user->status == 1 ) selected @endif>Active</option>
                                                    <option value="2" @if( $user->status == 2 ) selected @endif>In-Active</option>
                                                </select>
                                            </div>
                                           
                                           

                                        </div>
                                        <div class="col-lg-6 ">
                                            <div class="form-group">
                                                <label for="">Last Name</label>
                                                <input type="text" name="last_name" value='{{$user->last_name}}' class='form-control' >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Address</label>
                                                <input type="text" name="address" value='{{$user->address}}' class='form-control' >
                                            </div>
                                            <div class="form-group">
                                                <label for="">City</label>
                                                <input type="text" name="city" value='{{$user->city}}' class='form-control' >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Profile</label>
                                                <input type="file" name="profile"  class='form-control' >
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Role</label>
                                                <select name="role" class='form-control' id="">
                                                    <option value="1">-Select Role-</option>
                                                    <option value="1" @if( $user->role == 1 ) selected @endif>User</option>
                                                    <option value="2" @if( $user->role == 2 ) selected @endif>Admin</option>
                                                </select>
                                            </div>
                                           

                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea name="description" class="form-control" id="" cols="30" rows="2">{{$user->description}}</textarea>
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