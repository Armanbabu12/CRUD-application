<html>
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    @push('css')
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                        <a class="navbar-brand" href="{{ route('home') }}">Task Manager</a>
                        <div>
                            <a class="navbar-brand" href="{{ route('task.create.show') }}">Create</a>

                        </div>
                </nav>

                @yield('content')

            </div>
        </div>
    </div>

    @push('js')
</body>
</html>
