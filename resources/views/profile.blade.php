@extends('layouts.app')

@section('links')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('bodyID')
    {{ 'profile' }}
@endsection

@section('navTheme')
    {{ 'light' }}
@endsection

@section('logoFileName')
    {{ URL::asset('/images/Black Logo.png') }}
@endsection

<style>
    body {
        background: rgb(99, 39, 120)
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
</style>



@section('content')
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show fixed-bottom" role="alert" style="width:15%; left:30px;bottom:20px">
                {{ $message }}
            </div>
        @endif
    </div>
    <div class="container" style="display:flex;flex-direction:row;gap:10px;margin-top: 120px;margin-bottom:-20px;width:50%">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
            </div>
            @endforeach
        @endif
    </div>
    <form action="{{ route('profile.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <section style="margin-top: 10px">
            <div class="container col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row">
                        <div class="col-6"><label class="labels">Username ID</label><input style="font-size:18px"
                                name="email" type="text" class="form-control" value="{{ $item->id }}" disabled>
                        </div>
                        <div class="col-6"><label class="labels">Email ID</label><input style="font-size:18px"
                                name="email" type="text" class="form-control" value="{{ $item->email }}" disabled>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Name</label><input style="font-size:18px"
                                type="text" name="username" class="form-control" value="{{ $item->username }}"></div>
                    </div>
                    <div class="row mt-3">

                        <div class="col-md-12"><label class="labels">Mobile Number</label><input style="font-size:18px"
                                name="mobil" type="text" class="form-control" value="{{ $item->mobil }}"></div>
                        <div class="col-md-12"><label class="labels">Address Line 1</label><input style="font-size:18px"
                                name="address_1" type="text" class="form-control" value="{{ $item->address_1 }}"></div>
                        <div class="col-md-12"><label class="labels">Address Line 2</label><input style="font-size:18px"
                                name="address_2" type="text" class="form-control" value="{{ $item->address_2 }}"></div>
                        <div class="col-md-12"><label class="labels">Postcode</label><input style="font-size:18px"
                                name="postacode" type="text" class="form-control" value="{{ $item->postacode }}"></div>
                        <div class="col-md-12"><label class="labels">State</label><input style="font-size:18px"
                                name="state" type="text" class="form-control" value="{{ $item->state }}"></div>
                        <div class="col-md-12"><label class="labels">Area</label><input style="font-size:18px"
                                name="area" type="text" class="form-control" value="{{ $item->area }}"></div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label><input style="font-size:18px"
                                name="country" type="text" class="form-control" value="{{ $item->country }}"></div>
                        <div class="col-md-6"><label class="labels">State/Region</label><input style="font-size:18px"
                                name="stateRegion" type="text" class="form-control" value="{{ $item->stateRegion }}">
                        </div>
                    </div>
                    <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit"
                            value="Save date" style="margin-top: -10px"></div>
                </div>
            </div>
        </section>
    </form>
@endsection
