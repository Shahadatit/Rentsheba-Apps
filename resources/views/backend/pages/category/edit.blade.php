@extends('backend.layout.template')

@section('title') <title>Rentsheba Admin Dashboard</title> @endsection

@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle" style='background:linear-gradient(to right, #1CAF9A 0%, #17A2B8 100%)'>
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>Category</h4>
                <p class="mg-b-0 text-white">Category Management</p>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">

                <div class='col-sm-12 col-xl-12'>
                    <div class="card">
                        <div class="card-header tx-medium">
                            <div class='d-flex align-items-center justify-content-between'>
                                <h5 class='br-section-label m-0'>Create Category</h5>
                                <a href="{{route('category.index')}}" class='btn btn-info btn-sm'>All Category List</a>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                           

                            <!-- Category form -->
                            <div>
                                <form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    <div class="row">
                                        <div class="col-lg-6 m-auto">
                                            <div class="form-group">
                                                <label for="">Category Name</label>
                                                <input type="text" name="name" value="{{$category->name}}" class='form-control' >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Category Type</label>
                                                <select name="is_parent" class='form-control' id="">
                                                    <option value="0">-Select Category-</option>
                                                    @foreach( $categorys as $primary)
                                                    <option value="{{$primary->id}}"
                                                        @if( $category->is_parent == 0 )

                                                        @elseif( $category->is_parent != 0)
                                                            @if( $primary->id == $category->is_parent )
                                                            selected
                                                            @endif
                                                        @endif
                                                    >{{ $primary->name}}-</option>
                                                    @foreach(App\Models\Category::orderby('name','asc')->where('is_parent', $primary->id)->get() as $subCate)
                                                    <option value="{{$subCate->id}}"> -- {{ $subCate->name}}-</option>
                                                    @endforeach
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" class='form-control' id="">
                                                    <option value="1">-Select Category-</option>
                                                    <option value="1" @if( $category->status == 1) selected @endif>Active</option>
                                                    <option value="2" @if( $category->status == 2) selected @endif>In-Active</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="custom-file">
                                                            <input type="file" name="image" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        @if($category->image)
                                                        <img src="{{asset('image/'. $category->image)}}" width='100%' style='width:100px' alt="">
                                                        @endif
                                                    </div>
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