@extends('layouts.app')

@section('custom')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section ('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Edit Task</h1>
    <form action = "/tasks/{{ $task -> id }}/edit/" method="POST"> <fieldset>
            @csrf
            <label>Task Title</label>
            <input class="input" type="text" name ="title" id="title" value="{{ $task -> title }}">

            <label>Priority</label>
            @if($task -> priority=='Low')
                <select name="priority" class="form-control">
                    <option value="Low">Low</option>
                    <option values="Medium">Medium</option>
                    <option values="High">High</option>
                </select>
            @elseif($task -> priority=='Medium')
                <select name="priority" class="form-control">
                    <option values="Medium">Medium</option>
                    <option value="Low">Low</option>
                    <option values="High">High</option>
                </select>
            @elseif($task -> priority=='High')
                <select name="priority" class="form-control">
                    <option values="High">High</option>
                    <option value="Low">Low</option>
                    <option values="Medium">Medium</option>
                </select>
            @endif

            <label>Due Date</label>
            <input class="input" type="date" name ="due_date" id="due_date" value="{{ $task -> due_date }}">



        </fieldset>
        <br>
        <div class="">
            <a class="button has-shadow is-warning" href="/tasks">Cancel</a>
            <button class="button has-shadow is-link" type="submit" >Save Changes</button>
        </div>

    </form>
            <br>
            @error ('title')<div class="notification is-warning"><p>{{ $message }}</p></div>@enderror
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
