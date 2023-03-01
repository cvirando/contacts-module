@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Edit Contact
                            <span class="float-end">
                                <a href="{{route('ContactsIndex')}}" class="btn btn-sm btn-warning">Back</a>
                            </span>
                        </h5>
                      <form action="{{route('ContactsUpdate', $contact->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <div class="row">
                              <div class="col-md-6">
                                  <label for="name">Name</label>
                                  <input type="text" value="{{$contact->name}}" name="name" id="name" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="email">Email</label>
                                  <input type="text" value="{{$contact->email}}" name="email" id="email" class="form-control" required>
                              </div>
                              <div class="col-md-6">
                                  <label for="photo">Photo</label>
                                  <input type="file" name="photo" id="photo" class="form-control">
                                  @if(!empty($contact->photo))
                                  <a href="{{url('images')}}/big/{{$contact->photo}}" target="_blank"><img src="{{url('images')}}/{{$contact->photo}}" alt="{{$contact->name}}" width="70" height="70" class="rounded mt-1"></a>
                                  @else
                                  No Image Found!
                                  @endif
                              </div>
                              <div class="col-md-6">
                                  <label for="address">Address</label>
                                  <textarea name="address" id="address" class="form-control" cols="15" rows="5">{!!$contact->address!!}</textarea>
                              </div>
                              <div class="col-md-6">
                                  <label for="dob">D.O.B</label>
                                  <input type="date" value="{{$contact->dob}}" name="dob" id="dob" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="phone_number">Phone Number</label>
                                  <input type="text" value="{{$contact->phone_number}}" name="phone_number" id="phone_number" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="insurance_number">Insurance Number</label>
                                  <input type="text" value="{{$contact->insurance_number}}" name="insurance_number" id="insurance_number" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="hire_date">Hire Date</label>
                                  <input type="date" value="{{$contact->hire_date}}" name="hire_date" id="hire_date" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="last_working_date">Last Working Date</label>
                                  <input type="date" value="{{$contact->last_working_date}}" name="last_working_date" id="last_working_date" class="form-control">
                              </div>
                              <div class="col-md-6">
                                  <label for="kids">Kids</label>
                                  <input type="text" value="{{$contact->kids}}" name="kids" id="kids" class="form-control">
                              </div>
                              <div class="col-md-6">
                                    <label for="marital_status">Marital Status</label>
                                    <select required name="marital_status" id="marital_status" class="form-select">
                                        <option>Select</option>
                                        <option value="Married" {{$contact->marital_status == 'Married' ? 'seleced' : ''}}>Married</option>
                                        <option value="Single" {{$contact->marital_status == 'Single' ? 'seleced' : ''}}>Single</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="gender">Gender</label>
                                    <select required name="gender" id="gender" class="form-select">
                                        <option>Select</option>
                                        <option value="Male" {{$contact->gender == 'Male' ? 'seleced' : ''}}>Male</option>
                                        <option value="Female" {{$contact->gender == 'Female' ? 'seleced' : ''}}>Female</option>
                                        <option value="Other" {{$contact->gender == 'Other' ? 'seleced' : ''}}>Other</option>
                                    </select>
                                </div>
                              <div class="col-md-12 mt-3">
                                  <button type="submit" class="btn btn-sm btn-primary">Update</button>
                              </div>
                          </div>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
