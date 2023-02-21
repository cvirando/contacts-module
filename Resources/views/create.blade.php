@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Create New Contact
                            <span class="float-end">
                                <a href="{{route('ContactsIndex')}}" class="btn btn-sm btn-warning">Back</a>
                            </span>
                        </h5>
                      <form action="{{route('ContactsStore')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('POST')

                          <div class="row">
                              <div class="col-md-6">
                                  <label for="name">Name</label>
                                  <input type="text" name="name" id="name" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="email">Email</label>
                                  <input type="text" name="email" id="email" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="photo">Photo</label>
                                  <input type="file" name="photo" id="photo" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="address">Address</label>
                                  <textarea name="address" id="address" class="form-control" cols="15" rows="5"></textarea>
                              </div>
                              <div class="col-md-6">
                                  <label for="dob">D.O.B</label>
                                  <input type="date" name="dob" id="dob" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="phone_number">Phone Number</label>
                                  <input type="text" name="phone_number" id="phone_number" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="insurance_number">Insurance Number</label>
                                  <input type="text" name="insurance_number" id="insurance_number" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="hire_date">Hire Date</label>
                                  <input type="date" name="hire_date" id="hire_date" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="last_working_date">Last Working Date</label>
                                  <input type="date" name="last_working_date" id="last_working_date" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="kids">Kids</label>
                                  <input type="text" name="kids" id="kids" class="form-control">
                              </div>
                              <div class="col-md-6">
                                    <label for="marital_status">Marital Status</label>
                                    <select name="marital_status" id="marital_status" class="form-select">
                                        <option>Select</option>
                                        <option value="Married">Married</option>
                                        <option value="Single">Single</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-select">
                                        <option>Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                              <div class="col-md-12 mt-3">
                                  <button type="submit" class="btn btn-sm btn-primary">Save</button>
                              </div>
                          </div>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
