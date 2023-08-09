@extends('masterLayout')

@section('content')

   <div class="row mt-3">
        <div class="col-12">
            @if(session('successMessage'))
                <p class="alert alert-success">{{ session('successMessage') }}</p>
            @endif

            @foreach($allTasks as $task)
            <div class="card text-white @if($task->status == 'pending') bg-secondary @else bg-success @endif mb-3">
                <div class="card-header">
                    Task ID: {{ $task->id }}
                    <div class="float-right">

                        @if($task->status == 'pending')
                            <a class="btn btn-success btn-sm" href="{{ route('task.updateStatus',[$task->id,'complete']) }}">Mark As Complete</a>
                        @else
                            <a class="btn btn-warning btn-sm" href="{{ route('task.updateStatus',[$task->id,'pending']) }}">Back to Pending</a>
                        @endif

                        <a class="text-white" href="{{ route('task.show',[$task->id]) }}">Edit</a>
                        <a class="text-red" onclick="return confirm('are you sure?')" href="{{ route('task.delete',[$task->id]) }}">Delete</a>

                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $task->name }}</h5>
                    <p class="card-text">{{ $task->details }}</p>
                </div>
            </div>
            @endforeach

            {{ $allTasks->links() }}

        </div>
   </div>

@endsection


