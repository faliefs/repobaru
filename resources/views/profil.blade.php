@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profil</div>

                <div class="panel-body">
                    Nama    : {{ Auth::user()->name }}<br>
                    Email   : {{ Auth::user()->email }}<br>
                    Umur    : {{ Auth::user()->umur }}<br>
                    Alamat  : {{ Auth::user()->alamat }}<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
