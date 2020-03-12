@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  @if($userName)
                    Welcome to Aaria Tracker MR.  <b>{{Auth::user()->name}}</b>  please select your option below
                    @endif
                </div>

                <hr />
                <div class="card-body">
                  <a href="/trackerSubmit/create"><button type="button" class="btn btn-outline-primary btn-lg">Enter Data--></button></a>
                  <a href="/trackerSubmit"><button type="button" class="btn btn-outline-secondary btn-lg">View Data--></button></a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
