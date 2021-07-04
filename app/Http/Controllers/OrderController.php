<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Packages;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store_ruangbelajar(Request $request)
    {
        $messages = [
            'customerName.required' => 'nama harus diisi!',
            'customerEmail.required' => 'email harus diisi!',
            'customerAddress.required' => 'alamat harus diisi!',
            'customerPhoneNumber.required' => 'nomor telepon harus diisi!',
        ];

        $request->validate([
            'customerName' => 'required|regex:/^[\pL\s\-]+$/u',
            'customerEmail' => 'required',
            'customerAddress' => 'required',
            'customerPhoneNumber' => 'required|min:10',
        ], $messages);
        
        $idUser = strstr($request->customerEmail, '@', true);
        Customer::create(
            [
                'customerId' => $idUser,
                'customerName' => $request->customerName,
                'customerEmail' => $request->customerEmail,
                'customerAddress' => $request->customerAddress,
                'customerPhoneNumber' => $request->customerPhoneNumber
            ]
        );

        $customer = Customer::where('customerId', '=', $idUser)->get();
        
        if ($idUser != $customer[0]->customerId) {
            return redirect('/ruangbelajar')->with('status', 'Terjadi kesalahan!');
        } else {
            $package = Packages::where('packageTag', '=', "ruangguru")->get();
            Order::create(
                [
                    'packageId' => $package[0]->packageTag,
                    'customerId' => $customer[0]->customerId,
                    'orderStatus' => "IN_PROGRESS"
                ]
            );
            
                $data['userData'] = Curl::to('https://us-central1-silicon-airlock-153323.cloudfunctions.net/rg-package-dummy')
                    ->withData( array( 'userId' => $customer[0]->customerId) )
                    ->asJson()
                    ->get();
            return view('frontend.subscription', $data)->with('status', 'Pendaftaran Berhasil! Data anda akan diproses dahulu.');
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
        //
    }
}
