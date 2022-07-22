<?php

namespace App\Repositories;

use App\Modules\Customer\Http\Requests\CustomerRequest;
use App\Modules\Customer\Interfaces\CustomerInterface;
use App\Modules\Customer\Models\Customer;
use App\Modules\Customer\Traits\Helper;
use DB;

class CustomerRepostitory implements CustomerInterface
{
    // Use Helper Trait in this repository
    use Helper;

    public function getAllCustomers()
    {
        try {
            $customers = Customer::all();
            return $this->success("All Customers", $customers);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getCustomerById($id)
    {
        try {
            $customer = Customer::find($id);
            
            // Check the customer
            if(!$customer) return $this->error("No customer with ID $id", 404);

            return $this->success("Customer Detail", $customer);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestCustomer(CustomerRequest $request, $id = null)
    {
        DB::beginTransaction();
        try {
            // If customer exists when we find it
            // Then update the customer
            // Else create the new one.
            $customer = $id ? Customer::find($id) : new Customer;

            // Check the customer 
            if($id && !$customer) return $this->error("No customer with ID $id", 404);

            $customer->name = $request->name;
            // Remove a whitespace and make to lowercase
            $customer->email = preg_replace('/\s+/', '', strtolower($request->email));
            
            // I dont wanna to update the password, 
            // Password must be fill only when creating a new customer.
            if(!$id) $customer->password = \Hash::make($request->password);

            // Save the customer
            $customer->save();

            DB::commit();
            return $this->success(
                $id ? "Customer updated"
                    : "Customer created",
                $customer, $id ? 200 : 201);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteCustomer($id)
    {
        DB::beginTransaction();
        try {
            $customer = Customer::find($id);

            // Check the customer
            if(!$customer) return $this->error("No customer with ID $id", 404);

            // Delete the customer
            $customer->delete();

            DB::commit();
            return $this->success("Customer deleted", $customer);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}