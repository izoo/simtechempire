<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Simtech Empire Admin | DASHBOARD </title>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.ico')}}"/>
    <link href="{{ asset('backend/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('backend/assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('backend/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

      <!-- BEGIN THEME GLOBAL STYLES -->
      <!-- <link href="{{ asset('backend/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset('backend/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('backend/plugins/sweetalerts/promise-polyfill.js')}}"></script>
    <link href="{{ asset('backend/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />

    <!-- END THEME GLOBAL STYLES -->
           
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/table/datatable/custom_dt_html5.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/table/datatable/dt-global_style.css')}}">
    <!-- END PAGE LEVEL CUSTOM STYLES -->

</head>
<body>

<!-- Update Product Modal -->
        <div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
        <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Update Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        </div>
        <div class="modal-body">
            <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12">
            <div id="product_errorsu" class="alert alert-danger print-error-msg w3-padding-right w3-padding-left" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
            <ul class="w3-ul" style="list-style:none;">

            </ul>
            </div>
            </div>
            </div>
        <form id="formProductEdit" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="hidden_product_id" id="hidden_product_id">
            <div class="form-row mb-4">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Product Name</label>
            <input type="text" class="form-control" id="product_nameu" name="product_nameu" placeholder="Product Name" required="">
            </div>
            <div class="form-group col-md-6">
            <label for="product_price">Product Price</label>
            <input type="number" class="form-control" name="product_priceu" id="product_priceu" placeholder="Product Price" required="">
            </div>
            </div>
            <div class="form-row mb-4">
            <div class="form-group col-md-6 col-lg-6 col-sm-12">
            <label for="product_categoryu">Product Category</label>
            <select id="product_categoryu" name="product_categoryu" class="form-control" required="">
            <option selected>Choose Category</option>
            <option value="treadmill">Treadmill</option>
            <option value="strength">Multiple Strength Equipments</option>
            <option value="exercise-bikes">Exercise Bikes</option>
            <option value="elliptical-bikes">Elliptical Bikes</option>
            </select>
            </div>
            <div class="form-group col-md-6">
            <label for="product_quantity">Product Quantity</label>
            <input type="number" class="form-control" name="product_quantityu" id="product_quantityu" placeholder="Product Quantity" required="">
            </div>

            </div>

            <div class="form-row mb-4">

            <div class="form-group col-md-6 col-lg-6 col-sm-12">
            <label for="product_desc">Product Description</label>
            <input type="text" class="form-control" name="product_descu" id="product_descu" placeholder="Product Description">
            </div>
            </div>
            <div class="form-row mb-4">
            <div class="form-group col-md-6 col-lg-6 col-sm-12">
            <label for="product_photou">Product Photo</label>
            <input type="file" class="form-control" name="product_photou" id="product_photou">
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12" id="img_div">


            </div>
            </div>

            <button type="submit" id="updateProduct" class="btn btn-primary mt-3">UPDATE</button>
            </form>
        </div>
        <div class="modal-footer md-button">
        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>CLOSE</button>
        
        </div>
        </div>
        </div>
        </div>
<!-- End Modal -->
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
   @include('admin.partials.header')
  
  

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
       @include('admin.partials.sidebar')
       @yield('content')
      
        
       
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('backend/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('backend/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/app.js')}}"></script>
    <script>

        
        $(document).ready(function() {
            App.init();

 //Fetch Products List

 $('#html5-extension').DataTable( {
"dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
"<'table-responsive'tr>" +
"<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
responsive:true,
ajax:
{
url: '{{route("products.index")}}',

},
"columns":[

{data:'DT_RowIndex',name: 'DT_RowIndex'},
{data:'product_name',name:'product_name'},
{data:'product_price',name:'product_price'},
{data:'product_category',name:'product_category'},
{data:'image',name:'image'},
{data:'product_description',name:'product_description'},

{data:'action',name:'action',orderable:false,searchable:false}
],  

buttons: {
buttons: [
{ extend: 'copy', className: 'btn btn-sm' },
{ extend: 'pdf', className: 'btn btn-sm' },
{ extend: 'excel', className: 'btn btn-sm' },
{ extend: 'print', className: 'btn btn-sm' }
]
},
"oLanguage": {
"oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
"sInfo": "Showing page _PAGE_ of _PAGES_",
"sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
"sSearchPlaceholder": "Search...",
"sLengthMenu": "Results :  _MENU_",
},
"stripeClasses": [],
"lengthMenu": [7, 10, 20, 50],
"pageLength": 7 
} );

 //End

 //Feedbacks List
 $('#feedbacksTable').DataTable( {
"dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
"<'table-responsive'tr>" +
"<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
responsive:true,
ajax:
{
url: '{{route("feedbacks.index")}}',

},
"columns":[
{data:'DT_RowIndex',name: 'DT_RowIndex'},
{data:'name',name:'name'},
{data:'phone_no',name:'phone_no'},
{data:'email',name:'email'},
{data:'location',name:'location'},
{data:'requirements',name:'requirements'},
{data:'date',name:'date'}
],  

buttons: {
buttons: [
{ extend: 'copy', className: 'btn btn-sm' },
{ extend: 'pdf', className: 'btn btn-sm' },
{ extend: 'excel', className: 'btn btn-sm' },
{ extend: 'print', className: 'btn btn-sm' }
]
},
"oLanguage": {
"oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
"sInfo": "Showing page _PAGE_ of _PAGES_",
"sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
"sSearchPlaceholder": "Search...",
"sLengthMenu": "Results :  _MENU_",
},
"stripeClasses": [],
"lengthMenu": [7, 10, 20, 50],
"pageLength": 7 
} );

 //End



            // Add New Product
            $('#productForm').on('submit',(function(e){
        //alert("You Are Good To Go");
        e.preventDefault();
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            url:"{{ route('products.store') }}",
            type:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
                $('#buttonProduct').html('Adding New Product');
            },
            success : function(response)
            {
                if($.isEmptyObject(response.product_errors))
                {
                  //$('#myModal').modal('toggle');
                  $("#product_errors").fadeOut(1000,function(){
                       
                        
                    });

                    swal({
                    title: 'Success!',
                    text: "Product Added Successfully!",
                    type: 'success',
                    padding: '2em'
                    });
                    // $('#products_table').DataTable().ajax.reload();
        
                   $('#productForm').trigger("reset");
                   
                    $("#buttonProduct").html('ADD PRODUCT');

                    // table.ajax.reload();
                }
                else
                {
                    $("#product_errors").fadeIn(1000,function(){
                        printErrorMsg(response.product_errors,'product_errors');
                        $("#buttonProduct").html('ADD');
                    });
                }
            }
        });
        
       }));
            //End


        // Edit Product Function
$('body').on('click','.edit_product',function(){
  //  alert("You Are Good To Go");
	var id=$(this).attr('id');
// alert(id);
	$.get("{{route('products.index')}}" +'/' + id+'/edit',function(data)
	{
    
     var path = 'storage/pichas/' + data.product_image;
	$('#hidden_product_id').val(id);
   $('#product_nameu').val(data.product_name);
	 $('#product_priceu').val(data.product_price);
	 $('#product_categoryu').val(data.product_category);
	 $('#product_quantityu').val(data.product_quantity);
	 $('#product_descu').val(data.product_description);
     $('#img_div').html(`<img class="img-fluid img-thumbnail" width="150" src="{{ asset('` + path + `')}}">`);
	 $('#zoomupModal').modal('show');
	
   
	});
});
//End

   //Update Product
   $('#formProductEdit').on('submit',(function(e){
        //alert("You Are Good To Go");
        e.preventDefault();
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            url:"{{route('update_products')}}",
            type:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
              
                $('#updateProduct').html('Updating Product');
            },
            success : function(response)
            {
                if($.isEmptyObject(response.products_update_errors))
                {
                  //$('#myModal').modal('toggle');
        
                    swal({
                        title:"Success",
                        text:"Product Successfully Updated",
                        icon:"success",
                        button:"OK"
                    });
              
        
                    $('#formProductEdit').trigger("reset");
                   
                    $("#updateProduct").html('UPDATE');
                    $("#zoomupModal").modal('hide');
                    $('#html5-extension').DataTable().ajax.reload();
                    
                }
                else
                {
                    $("#product_errorsu").fadeIn(1000,function(){
                        printErrorMsg(response.products_update_errors,'product_errorsu');
                        $("#updateProduct").html('UPDATE');
                    });
                }
            }
        });
       }));
            //End
// Delete Product
$(document).on('click','.deleteProduct',function(){
var id=$(this).attr('id');
swal({
title:"Are you sure you to remove this product ?",
text:"This Action Cannot be Reverted",
icon:"warning",
buttons:true,
dangerMode:true,
})
.then((willDelete) => {
if(willDelete)
{
$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
url:"products/"+id,
type:'DELETE',
data:{
"id":id
},
success:function(data)
{
swal({
title:"Success",
text:"Product Successfuly Removed",
icon:"success",
button:"OK"
});

$('#html5-extension').DataTable().ajax.reload();

}
});


} else {
swal("Product Not Removed!");
}
});
});
//Remove User
// End

        });
        function printErrorMsg(msg,div)
					 {
            //  alert('#' + div);
						 $("#" + div).find("ul").html('');
						 $("#" + div).css('display','block');
						 $.each(msg,function(key,value){
              $("#" + div).find('ul').append('<li>' + value + '</li>');
						 });
					 }
      
    </script>
     <script src="{{ asset('backend/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{ asset('backend/assets/js/custom.js')}}"></script>
   
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('backend/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/dashboard/dash_1.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
 <!-- BEGIN THEME GLOBAL STYLE -->
 <!-- <script src="{{ asset('backend/assets/js/scrollspyNav.js')}}"></script> -->
    <script src="{{ asset('backend/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/sweetalerts/custom-sweetalert.js')}}"></script>
    <!-- END THEME GLOBAL STYLE --> 

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{ asset('backend/plugins/table/datatable/datatables.js')}}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{ asset('backend/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>    
    <script src="{{ asset('backend/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.62/vfs_fonts.js" integrity="sha256-UsYCHdwExTu9cZB+QgcOkNzUCTweXr5cNfRlAAtIlPY=" crossorigin="anonymous"></script>
    <script>
       
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
</body>

</html>