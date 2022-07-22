<?php

namespace App\Modules\Customer\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Customer\Http\Requests\CustomerRequest;
use App\Modules\Customer\Interfaces\CustomerInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerInteface;

    /**
     * Create a new constructor for this controller
     */
    public function __construct(CustomerInterface $customerInterface)
    {
        $this->customerInterface = $customerInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->customerInterface->getAllCustomers();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        return $this->customerInterface->requestCustomer($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->customerInterface->getCustomerById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CustomerRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        return $this->customerInterface->requestCustomer($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->customerInterface->deleteCustomer($id);
    }
}
