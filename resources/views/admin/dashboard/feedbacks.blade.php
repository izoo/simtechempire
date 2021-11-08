@extends('admin.app')
@section('title') Customer Feedbacks/Message @endsection
@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
            <div class="container">
                <div class="container">


                <div class="row layout-top-spacing">
                
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <table id="feedbacksTable" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone No</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Message/Feedback</th>
                                    <th>Date Sent</th>
                                    
                                  
                                </tr>
                            </thead>
                            <tbody>
                       
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

                 
                    
                </div>
            </div>
           @include('admin.partials.footer')
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

@endsection