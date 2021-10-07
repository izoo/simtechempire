<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;
use DataTables;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->ajax())
        {
            $data = Products::latest()->get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('image', function ($prod) { 
                $url= asset('storage/pichas/'.$prod->product_image);
                return '<img src="'.$url.'" border="0" width="40" class="img-rounded" align="center" />';
            })
            ->addColumn('action',function($row){
                $btn='<a href="javascript:void(0)" data-toggle="tooltip"  id="'.$row->id.'" data-target="#zoomupModal" data-original-title="Edit Product" class="edit_product btn btn-primary btn-sm">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Remove</a>';
                return $btn;

            })
            ->rawColumns(['image','action'])
            
            ->make(true);
        }
    }

    /**
     * Return All Products Object
     */
    public function usersProducts()
    {
        $products = Products::orderBy('id','DESC')->get();
        return json_encode($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->validate();
        $validator = Validator::make($request->all(),[
            'product_name' => 'required|max:255|unique:products',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_quantity' => 'required',
            'product_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ],[
            'product_name.unique' => 'Product Name Already Exists'
        ]);
    $input = $request->all();
    if($image= $request->file('product_photo'))
    {

        // $new_name = rand() . '.' . $image->getClientOriginalExtension();
     
        // $destinationPath = public_path('pichas');
        $profileImage = date('YmdHis') . '.' .  $image->getClientOriginalExtension();
        // $image->move($destinationPath,$profileImage);
        Storage::disk('public')->putFileAs('pichas', $request->file('product_photo'), $profileImage);
        $input['product_photo'] = "$profileImage";

    }
    if($validator->fails())
    {
        return response()->json(['product_errors' => $validator->errors()->all()]);
    }
    else
    {
        Products::create([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_category' =>$request->product_category,
            'product_description'=> $request->product_desc,
            'product_quantity' => $request->product_quantity,
            'product_image' => $profileImage
        ]);
    
        return response()->json(['success'=>'New Product Successfully Added']);
    }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Products::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
         //$request->validate();
         $validator = Validator::make($request->all(),[
            'product_nameu' => 'required|max:255',
            'product_priceu' => 'required',
            'product_categoryu' => 'required',
            'product_quantityu' => 'required',
            
        ]);
        if($validator->passes())
        {
            $product = Products::where('id','=',$request->hidden_product_id)->first();
            if ($image=$request->file('product_photou')) {
                $imageName = date('YmdHis') . '.' .  $image->getClientOriginalExtension();;
                // $request->file->storeAs('public/pichas', $imageName);
                Storage::disk('public')->putFileAs('pichas', $request->file('product_photou'), $imageName);

                if ($product->product_image) {
                //   Storage::delete('public/pichas/' . $product->product_image);
                }
              } else {
                $imageName = $product->product_photo;
              }
              $updateData = array(
                'product_name' => $request->product_nameu,
                'product_price' => $request->product_priceu,
                'product_category' =>$request->product_categoryu,
                'product_description'=> $request->product_descu,
                'product_quantity' => $request->product_quantityu,
                'product_image' => $imageName
              );
              if(Products::where('id','=',$request->hidden_product_id)->update($updateData))
              {
                return response()->json(['product_success' => 'Product Successfully Updated']);
              }
        }
        else
        {
            return response()->json(['products_update_errors' => $validator->errors()->all()]);


        }
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
