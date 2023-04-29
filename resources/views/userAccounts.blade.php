@extends('layouts.backend')

@section('links')
    <link href="{{ asset('css/order.css') }}" rel="stylesheet">
@endsection

@section('bodyID')
    {{ 'previousOrder' }}
@endsection

@section('navTheme')
    {{ 'light' }}
@endsection

@section('logoFileName')
    {{ URL::asset('/images/Black Logo.png') }}
@endsection


<style>

</style>

@section('content')
    <div style="display:flex;justify-content: center">
        <table class="table table-striped table-hover table-bordered" style="text-align:center;width:95%;margin-top:70px">
            <thead>
                <tr style="padding:100px">
                    <th scope="col">id</th>
                    <th scope="col">username</th>
                    <th scope="col">address-1</th>
                    <th scope="col">address-2</th>
                    <th scope="col">postacode</th>
                    <th scope="col">state</th>
                    <th scope="col">area</th>
                    <th scope="col">country</th>
                    <th scope="col">stateRegion</th>
                    <th scope="col">email</th>
                    <th scope="col">role</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr style="padding:100px">
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->address_1 }}</td>
                        <td>{{ $user->address_2 }}</td>
                        <td>{{ $user->postacode }}</td>
                        <td>{{ $user->state }}</td>
                        <td>{{ $user->area }}</td>
                        <td>{{ $user->country }}</td>
                        <td>{{ $user->stateRegion }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
