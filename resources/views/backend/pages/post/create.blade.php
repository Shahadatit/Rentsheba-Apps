@extends('backend.layout.template')

@section('title') <title>Rentsheba Admin Dashboard</title> @endsection

@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle" style='background:linear-gradient(to right, #1CAF9A 0%, #17A2B8 100%)'>
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>Post</h4>
                <p class="mg-b-0 text-white">Post Management</p>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">

                <div class='col-sm-12 col-xl-12'>
                    <div class="card">
                        <div class="card-header tx-medium">
                            <div class='d-flex align-items-center justify-content-between'>
                                <h5 class='br-section-label m-0'>Create Post</h5>
                                <a href="{{route('post.index')}}" class='btn btn-info btn-sm'>All Post List</a>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                           

                            <!-- Category form -->
                            <div>
                                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input type="text" name="name" value="{{old('name')}}" class="form-control" >
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for=""></label>
                                                <textarea name="discription" class="">{{old('discription')}}</textarea>
                                                @error('discription')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Sort Discription</label>
                                                <textarea name="sort_description" id="" cols="30" class="form-control" maxlength="100" rows="2">{{old('sort_description')}}</textarea>
                                                @error('sort_description')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tags</label>
                                                <input type="text" name='tags' value="tags, Title" data-role="tagsinput">
                                            </div>
                                           
                                            

                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="">Category </label>
                                                <select name="cat_id" class="form-control " id="">
                                                    <option value="">-Select Category-</option>
                                                    @foreach( $categorys as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @foreach(App\Models\Category::orderby('name','asc')->where('is_parent',$category->id)->get() as $subCat)
                                                    <option value="{{$subCat->id}}">- {{$subCat->name}}</option>
                                                    @endforeach
                                                    @endforeach
                                                </select>
                                                @error('cat_id')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Focus Keyword</label>
                                                <input type="text" name="focus_keyword" value="{{old('focus_keyword')}}" class='form-control' id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" class='form-control' id="">
                                                    <option value="1">-Select Status-</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">In-Active</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" name='image' class="custom-file-input " id="customFile">
                                                    @error('image')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <label class="custom-file-label"  for="customFile">Choose file</label>
                                                </div>
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