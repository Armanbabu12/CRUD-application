@extends('masterLayout')

@section('content')

    <div class="row mt-3">
        <div class="col-12">
            @include('errors.error')
            <form class="from-group" method="post" action="{{ route('task.update',[$task->id]) }}">
                {{ csrf_field() }}
                <label for="">Task Title:</label>
                <input class="form-control" type="text" name="name" value="{{ $task->name }}" placeholder="enter task name">
                <label for="">Task Details:</label>

                <textarea class="form-control" placeholder="Enter Task Details" name="details" id="" cols="30" rows="10">{{ $task->details }}</textarea>
                <input type="submit" name="submit" value="Create" class="btn btn-success mt-3">
            </form>

        </div>
    </div>

@endsection




