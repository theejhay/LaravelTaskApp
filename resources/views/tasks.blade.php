@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section('content')
    <section class="section" style="padding-top: 20px">
        <div class="container">

            <div class="row">
                <div class="col-8">
                    <h1 class="title">Active Tasks</h1>
                </div>
                <div class="col-4">
                    <form action="/search" method="GET">
                        <div class="input-group">
                            <input type="search" name="search" class="form-control" placeholder="Search All Active Tasks">
                            <span class="input-group-prepend">
                                <button type="submit" class="btn btn-success">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row" style="padding-top: 15px">
            <table class="table is-striped is-hoverable">
                <thead>
                <th>Task Title</th>
                <th>Priority</th>
                <th>Due Date</th>
                </thead>
                <tbody>
                @foreach($tasks as $t )
                    <tr>
                        <td>{{ $t -> title }}</td>
                        <td>{{ $t -> priority }}</td>
                        <td>{{ $t -> due_date }}</td>

                        <td><a class="button" href="/tasks/{{ $t -> id }}/">
                                <ion-icon name="eye"></ion-icon>
                            </a>
                        </td>

                        <td><a class="button" href="/tasks/{{ $t -> id }}/complete/">
                                <ion-icon name="checkmark"></ion-icon>
                            </a>
                        </td>

                        <td><a class="button" href="/tasks/{{ $t -> id }}/edit/">
                                <ion-icon name="create"></ion-icon>
                            </a>
                        </td>
                        <td><a class="button" href="/tasks/{{ $t -> id }}/delete/">
                                <ion-icon name="trash"></ion-icon>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $tasks -> links() }}
            </div>
            <div class="" style="padding-top: 20px">
                <a class="button has-shadow is-warning" href="/home">Go Back</a>
                <a href="/add/" class="button has-shadow is-link" >Add New Task</a>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <footer class="footer text-white" style="background-color: #2b4e72; margin-top: 180px">
        <div class="content has-text-centered">
            <p>A Task Management Web App. For Module CHT2520: Advanced Web Programming.</p>
        </div>
    </footer>
@endsection
