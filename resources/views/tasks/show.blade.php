@extends('layouts.app')

@section('custom')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Details for Task: {{ $task -> id }}</h1>
            <table class="table is-striped">
                <tbody>
                <tr>
                    <td>Task Title:</td>
                    <td>{{ $task -> title }}</td>
                </tr>
                <tr>
                    <td>Priority:</td>
                    <td>{{ $task -> priority }}</td>
                </tr>
                <tr>
                    <td>Due Date:</td>
                    <td>{{ $task -> due_date }}</td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td>{{ $task -> completed }}</td>
                </tr>
                </tbody>
            </table>
            <div class="">
                <a class="button has-shadow is-warning" href="{{ url()->previous() }}">Go Back</a>
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
