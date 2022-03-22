@extends('backend.layout.template')

@section('title') <title>Rentsheba Admin Dashboard</title> @endsection

@section('content')

    <div class="br-mainpanel">
        <div class="br-pagetitle" style='background:linear-gradient(to right, #1CAF9A 0%, #17A2B8 100%)'>
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>Blanck page</h4>
                <p class="mg-b-0 text-white">Rentsheba Admin Dashboard.</p>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">


                <div class='col-sm-12 col-xl-12'>
                    <div class="card">
                        <div class="card-header tx-medium">
                            <div class='d-flex align-items-center justify-content-between'>
                                <h5 class='br-section-label m-0'>Category List</h5>
                                <a href="{{route('category.create')}}" class='btn btn-info btn-sm'>Add New Category</a>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                        </div><!-- card-body -->
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection