<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{asset('css/index.css')}}" rel="stylesheet"> 
    <title>List of Poisons</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Borel&family=Lexend:wght@100..900&family=Limelight&display=swap');
    </style>
</head>
<body>
    <div class="heading">
        List of Poisons to Kill Someone You Find Annoying
    </div>

    <nav style="text-align:center; margin:10px;">
        @auth
            <span style="color:#fff; font-size:25px; font-family: 'Lexend', sans-serif;">Hello, {{ auth()->user()->name }}</span>
            <form action="{{ route('logout') }}" method="post" style="display:inline">
            @csrf
            <button type="submit" class="add-poison" style="width:120px; padding:8px; margin-left:8px;">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="add-poison" style="padding:8px; margin-right:8px; display:inline-block;">Login</a>
            <a href="{{ route('register') }}" class="add-poison" style="padding:8px; display:inline-block;">Register</a>
        @endauth
    </nav>


    <a href="{{ route ('poison.create') }}" class="add-poison">
        <h1 style="font-weight: bolder;">Add New Poison</h1>
    </a>

    
    <div class="container custom-container">
    <div class="row g-4">
        @foreach($poisons as $row)
            <div class="col-md-4">
                <div class="my-col">
                    <h3>{{ $row->poison_name }}</h3>
                    <img src="{{ asset($row->poison_img) }}" class="img-fluid">
                    <br><br><br>
                    <div id="text">
                        {{ $row->poison_desc }}
                        <br><br>
                        <a href="{{ route('poison.edit', $row->poison_id) }}">Edit</a><br>
                        <a href="{{ route('poison.delete', $row->poison_id) }}">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>