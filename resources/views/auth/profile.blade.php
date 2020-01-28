@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 20px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Account</div>
                    <div class="card-body">

                        <h5><strong>Name:</strong></h5>
                        <p>{{ Auth::user()->name }}</p>
                        <br>

                        <h5><strong>Email:</strong></h5>
                        <p>{{ Auth::user()->email }}</p>

                        <br>

                        <h5><strong>Password:</strong></h5>
                        <p>********</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <footer class="footer text-white" style="background-color: #2b4e72; margin-top: 180px">
        <div class="content has-text-centered">
            <p>A Task Management Web App. For Module CHT2520: Advanced Web Programming.</p>
        </div>
    </footer>
@endsection
