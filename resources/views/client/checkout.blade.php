@extends('layouts.master')
   @section('content')
       <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card rounded-0 border-0 mb-4">
                        <h4 class="card-header bg-transparent">Payment information</h4>
                        <div class="card-body pt-4">
                            <div class="mb-4 bg-faded p-3 rounded mb-4" id="billing">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <label class="sr-only">First Name</label>
                                      <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="sr-only">Last Name</label>
                                      <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="sr-only">Phone</label>
                                      <input type="tel" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="sr-only">Email</label>
                                      <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <input id="field-address-1" type="text" class="form-control" placeholder="Address line 1">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <input id="field-address-2" type="text" class="form-control" placeholder="Address line 2">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="sr-only">City</label>
                                      <input type="tel" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label class="sr-only">Post Code</label>
                                      <input type="email" class="form-control" placeholder="Post Code">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label class="sr-only">Country</label>
                                      <select class="form-control">
                                        <option>Country</option>
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>France</option>
                                        <option>UK</option>
                                        <option>Germany</option>
                                        <option>Belgium</option>
                                        <option>Australia</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" data-toggle="collapse" data-target="#shipping" aria-expanded="false" aria-controls="shipping">
                                    <input class="form-check-input" type="checkbox" value="ship-address-alt">
                                      Ship to different address 
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-0 border-0 mb-4">
                        <h4 class="card-header bg-transparent">Billing information</h4>
                        <div class="card-body pt-4">
                            <div class="mb-4 bg-faded p-3 rounded mb-4" id="billing">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <label class="sr-only">First Name</label>
                                      <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="sr-only">Last Name</label>
                                      <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="sr-only">Phone</label>
                                      <input type="tel" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="sr-only">Email</label>
                                      <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <input id="field-address-1" type="text" class="form-control" placeholder="Address line 1">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <input id="field-address-2" type="text" class="form-control" placeholder="Address line 2">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="sr-only">City</label>
                                      <input type="tel" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label class="sr-only">Post Code</label>
                                      <input type="email" class="form-control" placeholder="Post Code">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label class="sr-only">Country</label>
                                      <select class="form-control">
                                        <option>Country</option>
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>France</option>
                                        <option>UK</option>
                                        <option>Germany</option>
                                        <option>Belgium</option>
                                        <option>Australia</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" data-toggle="collapse" data-target="#shipping" aria-expanded="false" aria-controls="shipping">
                                    <input class="form-check-input" type="checkbox" value="ship-address-alt">
                                      Ship to different address 
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   @endsection
