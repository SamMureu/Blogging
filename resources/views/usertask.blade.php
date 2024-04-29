@section('content')
    <div class="container">
        <h1>My Tasks</h1>
        
        @if(isset($tasks) && !is_null($tasks))
            @if($tasks->isEmpty())
                <p>No tasks assigned.</p>
                
            @else
                <ul>
                    @foreach($tasks as $task)
                        <li>{{ $task->description }}</li>
                    @endforeach
                </ul>
            @endif
        @else
            <p>No tasks assigned.</p>
        @endif
    </div>