<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $data[ 'customers' ] = Customer::oldest()->paginate(5);

        return view( 'customers.index', $data );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        return view( 'customers.create' );
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $data = $this->validate( $request, [
            'fullname' => 'required|max:255',
            'city' => 'required|max:255',
            'emailaddress' => 'required|max:255|email',
            'phone_number' => 'required|min:11',
        ] );

        Customer::create( $data );

        return redirect()->route( 'customers.index' )
        ->with( 'success', 'Customer has been created successfully.' );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Customer  $customer
    * @return \Illuminate\Http\Response
    */

    public function show( Customer $customer ) {
        return view( 'customer.show', compact( 'customer' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */

    public function edit( Customer $customer ) {
        return view( 'customers.edit', compact( 'customer' ) );
    }

    public function update( Request $request, $id)
    {
    $request->validate([
        'fullname' => 'required|max:255',
        'city' => 'required|max:255',
        'emailaddress' => 'required|max:255|email',
        'phone_number' => 'required|min:11|numeric',
    ]);
    $customer = Customer::find($id);
    $customer->fullname = $request->fullname;
    $customer->city = $request->city;
    $customer->emailaddress = $request->emailaddress;
    $customer->phone_number = $request->phone_number;
    $customer->save();
   

        return redirect()->route( 'customers.index' )
            ->with( 'success', 'Customer Has Been updated successfully' );

    }

    public function destroy( Customer $customer ) {
        $customer->delete();
        return redirect()->route( 'customers.index' )
        ->with( 'success', 'Customer has been deleted successfully' );
    }
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Models\Customer  $customer
* @return \Illuminate\Http\Response
*/