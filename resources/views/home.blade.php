@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 20px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <!-- View All Tasks -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="/tasks">My Tasks</a>
                                            <p><ion-icon name="eye"></ion-icon></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- New Task Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a class="text-xs font-weight-bold text-success text-uppercase mb-1" href="/add">New Task</a>
                                            <p><ion-icon name="add-circle-outline"></ion-icon></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Overdue Tasks Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a class="text-xs font-weight-bold text-danger text-uppercase mb-1" href="/overdue">Overdue</a>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <ion-icon name="alarm"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Completed Tasks Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a class="text-xs font-weight-bold text-info text-uppercase mb-1" href="/completed">Completed</a>
                                            <p><ion-icon name="checkbox-outline"></ion-icon></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
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
