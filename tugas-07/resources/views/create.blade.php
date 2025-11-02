<!DOCTYPE html>
<html>
<head>
    <link href="{{asset('css/index.css')}}" rel="stylesheet"> 
    <title>Add Your List of Poisons</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Borel&family=Lexend:wght@100..900&family=Limelight&display=swap');
    </style>
</head>
<body>
    <div class="heading">
        Add A Poison to Kill Someone You Find Annoying
    </div>

    <form action = "{{ route('poison.store') }}" method="post" class="display-form">
        @csrf
        <p id="text">Poison Name            : <input type="text" name="poison_name"></p> <br>
        <p id="text">Poison Image Source    : <input type="text" name="poison_img" size="30"></p> <br>
        <p id="text">Poison Description : <br><br>
            <textarea name="poison_desc" rows="10" cols="100"></textarea>
        </p> <br>

        <button type="submit">Save</button>
    </form>
</body>
</html>