@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section('content')
    <section class="section" style="padding-top: 20px">
        <div class="container">
            <h1 class="title">Overdue Tasks</h1>
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
                        <td><a class="button" href="/tasks/{{ $t -> id }}/delete/">
                                <ion-icon name="trash"></ion-icon>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $tasks -> links() }}
            <div class="" style="padding-top: 20px">
                <a class="button has-shadow is-warning" href="/home">Go Back</a>
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
