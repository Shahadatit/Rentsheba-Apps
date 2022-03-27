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
                                <h5 class='br-section-label m-0'>Business Create</h5>
                                <a href="{{route('business.index')}}" class='btn btn-info btn-sm'>All Business List</a>
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
                                                <div class="col-lg-5">
                                                    <label for="">Company Name<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-7">
                                                    <input type="text" maxlength="62" name='company_name' value="{{old('company_name')}}" class="form-control @error('company_name') is-invalid @enderror"  placeholder='company name' required>
                                                    @error('company_name')
                                                            <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- company name row -->
                                            <div class="row mb-4">
                                                <div class="col-lg-5"><label for="">Cuntry<sup style='color:red'>*</sup></label></div>
                                                <div class="col-lg-7">
                                                    <select name="cuntry" class='form-control'  required  id="" >
                                                        <option value="">--select cuntry--</option>
                                                        @foreach($cuntrys as $cuntry)
                                                        <option value="{{ $cuntry->id}}">{{ $cuntry->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                          

                                          

                                            <!-- company name row -->
                                            <div class="row mb-4">
                                                <div class="col-lg-5"><label for="">Company Website</label></div>
                                                <div class="col-lg-7"><input type="text" value="{{old('website')}}" name="website" class='form-control' placeholder='website...'></div>
                                            </div>

                                            <!-- Business Identification Number row -->
                                            <div class="row mb-4">
                                                <div class="col-lg-5">
                                                    <label for="">Phone Number<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-7">
                                                    <input type="text"  name="com_mobile" value="{{old('com_mobile')}}" class="form-control @error('com-mobile') is-invalid @enderror" required placeholder='Phone...'>
                                                    @error('com-mobile')
                                                            <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- businus category form part -->
                                    <div class="row pt-4">
                                        <div class="col-lg-6">
                                            <div class="row mb-3">
                                                <!-- location form -->
                                                <div class="col-lg-6"><label for="">Street Address<sup style='color:red'>*</sup></label></div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="c_address" value="{{old('c_address')}}" class="form-control @error('c_address') is-invalid @enderror" required placeholder='Address'>
                                                    @error('c_address')
                                                            <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <!-- location form -->
                                                <div class="col-lg-6"><label for="">District<sup style='color:red'>*</sup></label></div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="c_district" value="{{old('c_district')}}" class="form-control @error('c_district') is-invalid @enderror" required placeholder='District'>
                                                    @error('c_district')
                                                            <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <!-- location form -->
                                                <div class="col-lg-6"><label for="">Zip / Postal Code</label></div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="c_zipcode" value="{{old('c_zipcode')}}" class="form-control @error('c_zipcode') is-invalid @enderror" placeholder='Zip Code'>
                                                    @error('c_zipcode')
                                                            <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                            
                                            <div class="row mb-4">
                                                <div class="col-lg-5"><label for="">Company Logo</label></div>
                                                <div class="col-lg7">
                                                    <div class="form-group">
                                                    <input type="file" name='cover_photo' id="myfile" class="@error('cover_photo') is-invalid @enderror" required name="myfile">
                                                    @error('cover_photo')
                                                            <div class="text-danger">{{ $message }}</div>
                                                    @enderror
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
                                            <input type="text" name="main_title" value="{{old('main_title')}}"  maxlength="100" min="20" class="form-control @error('main_title') is-invalid @enderror" required placeholder='Company Title'>
                                            @error('main_title')
                                                    <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
                                                    <select name="cat_id" class='form-control' required id="">
                                                        <option value="">--Category--</option>
                                                        @foreach($categorys as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @foreach(App\Models\Category::orderby('name','asc')->where('is_parent', $category->id)->get() as $subCat)
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
                                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id=""  maxlength="600" cols="30" required rows="5">{{old('description')}}</textarea>
                                            @error('description')
                                                    <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> 

                                    <!-- businus Abut form part -->
                                    <div class="row pt-4">
                                        <div class="col-lg-4">
                                            <label for="">Search Keyword<sup  style='color:red'>*</sup></label>
                                        </div>
                                        <div class="col-lg-8">
                                        <input type="text" name='tags'  value="tags, Title" data-role="tagsinput">
                                        </div>
                                    </div> 

                                   

                                </div>
                                <!-- about business information part code end -->


                                <!-- Company person and woner name start  -->
                                <div class='p-4 mb-4 bg-white border company-form'>

                                    <!-- businus category form part -->
                                    <div class="row pt-4">
                                       
                                        <div class="col-lg-12">
                                            <h5>Company Owner</h5>
                                            <div class="row mt-3 mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Name<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="o_name" value="{{Auth::user()->name}}" class='form-control' required placeholder='Name...'>
                                                </div>
                                            </div>

                                            <!-- Designation -->
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Email<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="o_email" value="{{Auth::user()->email}}" class='form-control' required placeholder='Email...'>
                                                </div>
                                            </div>

                                            <!-- Phone -->
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Phone<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="o_phone" value="{{old('o_phone')}}" class="form-control @error('o_phone') is-invalid @enderror" required placeholder='Phone...'>
                                                    @error('o_phone')
                                                            <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <!-- Company person and woner name end -->
                                <!-- Company social midia  -->
                                <div class='p-4 mb-4 bg-white border company-form'>

                                    <!-- businus category form part -->
                                    <div class="row pt-4">
                                       
                                        <div class="col-lg-12">
                                            <h5>Social media</h5>
                                            <div class="row mt-3 mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Facebook<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="facebook" value="{{old('facebook')}}" class='form-control' required placeholder='facebook URL'>
                                                </div>
                                            </div>

                                            <!-- Designation -->
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Instagram<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="instagram" value="{{old('instagram')}}" v class='form-control' required placeholder='Instagram URL'>
                                                </div>
                                            </div>

                                            <!-- Phone -->
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Linkedin<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="linkedin"  value="{{old('linkedin')}}" class="form-control" required placeholder='Linkedin URL'>
                                                   
                                                </div>
                                            </div>
                                            <!-- Phone -->
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Pinterest<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="text" name="pinterest"  value="{{old('pinterest')}}" class="form-control " required placeholder='Pinterest URL'>
                                                    
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="#">Packeg<sup style='color:red'>*</sup></label>
                                                </div>
                                                <div class="col-lg-8">
                                                   <select name="packeg" class="form-control" id="">
                                                       <option value="1">Select Packeg</option>
                                                       <option value="1">Free</option>
                                                       <option value="2">Premiup</option>
                                                   </select>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <!-- Company person and woner name end -->

                                <div class="row">
                                    <div class="col-lg-6 m-auto">
                                       
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