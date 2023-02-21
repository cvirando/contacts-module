@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Contacts
                            <span class="float-end">
                                <a href="{{route('ContactsCreate')}}" class="btn btn-sm btn-success">Add New</a>
                            </span>
                        </h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th width="80" scope="col">Photo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th width="120" scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                    <tr>
                                    <th scope="row">{{$contact->id}}</th>
                                    <td width="80">
                                        @if(!empty($contact->photo))
                                        <img src="{{url('/')}}/images/{{$contact->photo}}" alt="{{$contact->name}}" width="70" height="70" class="rounded">
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->phone_number}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td width="120">
                                        <a href="{{route('ContactsEdit', $contact->id)}}" class="btn btn-sm btn-info">Edit</a>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
