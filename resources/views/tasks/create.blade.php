@extends('layouts.app')

@section('custom')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section ('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Add New Task</h1>
    <form action = "/add/" method="POST">
        <fieldset>
            @csrf
            <label>User ID</label>
            <input class="input" value="{{ Auth::user()->id }}" name="user_id" readonly>
            <label>Task</label>
            <input class="input" type="text" name="title"
                   placeholder="Enter Task Name">
            <label>Due Date</label>
            <input class="input" type="date" name="due_date"
                   placeholder="Enter Due Date">
            <label>Priority</label>
            <select name="priority" class="form-control" >
                <option value="Low">Low</option>
                <option values="Medium">Medium</option>
                <option values="High">High</option>
            </select>
        </fieldset>
        <br>
        <div class="">
            <a class="button has-shadow is-danger" href="{{ url()->previous() }}">Go Back</a>
            <button class="button has-shadow is-success" type="submit" >Add Task</button>
        </div>
    </form>
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
