<?php

namespace App\Http\Controllers;

use App\Product;
use App\UserProfile;
use App\Vendors;
use Illuminate\Http\Request;

class VendorsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendors::all();
        return view('admin.vendors',compact('vendors'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pending()
    {
        $vendors = Vendors::where('status', 0)->get();
        return view('admin.vendorspending',compact('vendors'));
    }

    public function accept($id)
    {
        $vendor = Vendors::findOrFail($id);
        $status['status'] = 1;

        mail($vendor->email,'Su cuenta de vendedor activada', 'Su cuenta de vendedor fue activada correctamente. Inicie sesión en su cuenta y cree su propia tienda. ');
        $vendor->update($status);
        return redirect('admin/vendors/pending')->with('message','Vendedor fue activada exitosamente');
    }

    public function reject($id)
    {
        $vendor = Vendors::findOrFail($id);
        mail($vendor->email, 'Su registro de vendedor fue rechazado', 'Su registro de cuenta de proveedor fue rechazado. Comuníquese con el administrador para obtener más detalles. ');

        $vendor->delete();
        return redirect('admin/vendors/pending')->with('message','Vendedor Rechazado');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = Vendors::findOrFail($id);
        return view('admin.vendordetails',compact('vendor'));
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
    }

    public function email($id)
    {
        $vendor = Vendors::findOrFail($id);
        return view('admin.vensendemail', compact('vendor'));
    }

    public function sendemail(Request $request)
    {
        mail($request->to,$request->subject,$request->message);
        return redirect('admin/vendors')->with('message','Correo Enviado');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendors = Vendors::findOrFail($id);
        Product::where('vendorid',$id)->delete();

        $vendors->delete();
        return redirect('admin/vendors')->with('message','Vendedor Borrado Exitosamente.');
    }
}
