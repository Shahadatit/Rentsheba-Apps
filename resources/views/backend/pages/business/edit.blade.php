@extends('backend.layout.template')

@section('title') <title>Rentsheba Admin Dashboard</title> @endsection

@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle" style='background:linear-gradient(to right, #1CAF9A 0%, #17A2B8 100%)'>
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>Business</h4>
                <p class="mg-b-0 text-white">Business Management.</p>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">

                <div class='col-sm-12 col-xl-12'>
                    <div class="card">
                        <div class="card-header tx-medium">
                            <div class='d-flex align-items-center justify-content-between'>
                                <h5 class='br-section-label m-0'>Business List</h5>
                                <a href="{{route('business.create')}}" class='btn btn-info btn-sm'>Add New Business</a>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">

                            <!-- Category list form start -->
                            <form action="{{route('business.store')}}" method='POST' enctype='multipart/form-data'>
                                @csrf 

                                <!-- company information form -->
                                <div class='p-4 mb-4 bg-white border company-form'>
                                    <h2 class='user-title-text p-2'>Company Information</h2>

                                    <!-- company form part -->
                                    <div class="row pt-4">
                                        <div class="col-lg-10">
                                            <!-- company name row -->
                                            <div class="row mb-4">
                                                <div class="col-lg-5"><label for="">Company Name<sup style='color:red'>*</sup></label></div>
                                                <div class="col-lg-7"><input type="text" maxlength="62" name='company_name' class='form-control' required placeholder='company name'></div>
                                            </div>
                                            <!-- company name row -->
                                            <div class="row mb-4">
                                                <div class="col-lg-5"><label for="">Cuntry<sup style='color:red'>*</sup></label></div>
                                                <div class="col-lg-7">
                                                    <select name="cuntry" class='form-control'  required  id="" >
                                                        <option value="">--select cuntry--</option>
                                                        @foreach($cuntrys as $cuntry)
                                                        <option value="{{ $cuntry->cuntry}}">{{ $cuntry->cuntry}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- company employer row -->
                                            <div class="row mb-4">
                                                <div class="col-lg-5"><label for="">Company Established</label></div>
                                                <div class="col-lg-7">
                                                    <select name="com_establish" class='form-control' id="" >
                                                        <option value="selected">--select Established year--</option>
                                                        @foreach($establishs as $establish)
                                                        <option value="{{ $establish->establisth}}">{{ $establish->establisth}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- company Number of Employees  row -->
                                            <div class="row mb-4">
                                                <div class="col-lg-5"><label for="">Number of Employers </label></div>
                                                <div class="col-lg-7">
                                                    <select name="employer" class='form-control' id="" >
                                                        <option value="selected">--select Employer --</option>
                                                        @foreach($employers as $employer)
                                                        <option value="{{$employer->employer}}">{{$employer->employer}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- company name row -->
                                            <div class="row mb-4">
                                                <div class="col-lg-5"><label for="">Company Website</label></div>
                                                <div class="col-lg-7"><input type="text" name="website" class='form-control' placeholder='website...'></div>
                                            </div>

                                            <!-- Business Identification Number row -->
                                            <div class="row mb-4">
                                                <div class="col-lg-5"><label for="">Identification Number<sup style='color:red'>*</sup></label></div>
                                                <div class="col-lg-7"><input type="text"  name="com_phone" class='form-control' required placeholder='Phone...'></div>
                                            </div>

                                            
                                            <div class="row mb-4">
                                                <div class="col-lg-5"><label for="">Company Logo</label></div>
                                                <div class="col-lg7">
                                                    <div class="form-group">
                                                    <input type="file" name='logo' id="myfile" required name="myfile">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /company form part end -->
                                </div>

                                <!-- about business information part code start  -->
                                <div class='p-4 mb-4 bg-white border company-form'>
                                    <h2 class='user-title-text p-2'>About Your Business</h2>

                                    <!-- businus Abut form part -->
                                    <div class="row pt-4">
                                        <div class="col-lg-4">
                                            <label for="">Business Title <sup  style='color:red'>*</sup></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="main_title"  maxlength="100" min="20" class='form-control' required placeholder='Company Title'>
                                        </div>
                                    </div> 


                                    <!-- businus category form part -->
                                    <div class="row pt-4">
                                        <div class="col-lg-4">
                                            <label for="">Business Category<sup style='color:red'>*</sup></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <select name="category" class='form-control' required id="">
                                                        <option value="">--Category--</option>
                                                        @foreach($categorys as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @foreach(App\Models\backend\category::orderby('name','asc')->where('is_parent', $category->id)->get() as $subCat)
                                                                <option value="{{$subCat->id}}"> -- {{$subCat->name}}</option>
                                                            @endforeach
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <select name="" class='form-control' id="">
                                                        <option value="">--Sub Category--</option>
                                                        <option value="">Ac Ambulance</option>
                                                        <option value="">none Ac Ambulance</option>
                                                        <option value="">Freezing Ambulance</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div> 


                                    <!-- businus Abut form part -->
                                    <div class="row pt-4">
                                        <div class="col-lg-4">
                                            <label for="">About Company<sup style='color:red'>*</sup></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <textarea name="description" class='form-control' id=""  maxlength="600" cols="30" required rows="5"></textarea>
                                        </div>
                                    </div> 

                                    <!-- businus Abut form part -->
                                    <div class="row pt-4">
                                        <div class="col-lg-4">
                                            <label for="">Search Keyword<sup  style='color:red'>*</sup></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="search_tag" maxlength="100" id="skill" class='form-control' required value="Keyword 1 , keyword 2">
                                        </div>
                                    </div> 

                                    <!-- businus Target Market form part -->
                                    <div class="row pt-4">
                                        <div class="col-lg-4">
                                            <label for="">Target Market</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select name="market" class='form-control' id="">
                                                <option value="">--business area--</option>
                                                @foreach($businessAreas as $businessArea )
                                                <option value="{{$businessArea->business_area}}">{{$businessArea->business_area}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> 

                                </div>
                                <!-- about business information part code end -->

                                <!-- about business contact information start  -->
                                <div class='p-4 mb-4 bg-white border company-form'>
                                    <h2 class='user-title-text p-2'>Address & Contact Info</h2>


                                    <!-- businus category form part -->
                                    <div class="row pt-4">
                                        <div class="col-lg-6">
                                            <div class="row mb-3">
                                                <!-- location form -->
                                                <div class="col-lg-6"><label for="">Location (Street Address)<sup style='color:red'>*</sup></label></div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="com_address" class='form-control' required placeholder='Address'>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <!-- location form -->
                                                <div class="col-lg-6"><label for="">District<sup style='color:red'>*</sup></label></div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="com_distr" class='form-control' required placeholder='District'>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <!-- location form -->
                                                <div class="col-lg-6"><label for="">Zip / Postal Code</label></div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="com_zip" class='form-control' placeholder='Zip Code'>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <!-- about business contact information end -->

                                <!-- Company person and woner name start  -->
                                <div class='p-4 mb-4 bg-white border company-form'>

                                    <!-- businus category form part -->
                                    <div class="row pt-4">
                                        <div class="col-lg-6" style='border-right:2px solid #ddd'>
                                            <h5>Contact Person</h5>
                                            <div class="row pt-3 mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Name<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <select name="p_name" class='form-control' id="">
                                                        <option value="{{Auth::User()->name}}">{{Auth::User()->name}}</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Designation -->
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Email<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="p_email" class='form-control' value="{{Auth::User()->email}}"  placeholder='Email...'>
                                                </div>
                                            </div>

                                            <!-- Phone -->
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Phone<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name='p_phone' class='form-control' value="{{Auth::User()->phone}}" placeholder='Phone..'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h5>Company Owner</h5>
                                            <div class="row mt-3 mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Name<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="o_name" class='form-control' required placeholder='Name...'>
                                                </div>
                                            </div>

                                            <!-- Designation -->
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Email<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="o_email" class='form-control' required placeholder='Email...'>
                                                </div>
                                            </div>

                                            <!-- Phone -->
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Phone<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="o_phone" class='form-control' required placeholder='Phone...'>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <!-- Company person and woner name end -->

                                <div class="row">
                                    <div class="col-lg-6 m-auto">
                                        <input type="hidden" name='user_id' value="{{Auth::User()->id}}">
                                        <input type="submit" class='btn btn-info w-100'   name="" id="" value='Save Information' >
                                    </div>
                                </div>

                            </form>
                            

                        </div><!-- card-body -->
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection