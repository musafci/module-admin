<?php

namespace App\Modules\Customer\Interfaces;

use App\Modules\Customer\Http\Requests\CustomerRequest;

interface CustomerInterface
{
    /**
     * Get all customer
     * 
     * @method  GET api/customer
     * @access  public
     */
    public function getAllCustomers();

    /**
     * Get Customer By ID
     * 
     * @param   integer     $id
     * 
     * @method  GET api/customer/{id}
     * @access  public
     */
    public function getCustomerById($id);

    /**
     * Create | Update Customer
     * 
     * @param   \App\Http\Requests\CustomerRequest    $request
     * @param   integer                           $id
     * 
     * @method  POST    api/customer       For Create
     * @method  PUT     api/customer/{id}  For Update     
     * @access  public
     */
    public function requestCustomer(CustomerRequest $request, $id = null);

    /**
     * Delete Customer
     * 
     * @param   integer     $id
     * 
     * @method  DELETE  api/customer/{id}
     * @access  public
     */
    public function deleteCustomer($id);

}