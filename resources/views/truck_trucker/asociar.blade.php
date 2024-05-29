
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asociar</title>
</head>
<body>
    <h1>Asociar vehiculo:</h1>

    <form action="{{route('truck_trucker.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
     

        <br>
        <h1>camionero:</h1>
        <select name="trucker_id">
            @foreach($trucker as $trucker)
                <option value="{{ $trucker->id }}">{{ $trucker->id }} - {{ $trucker->dni }} - {{ $trucker->name }} - {{ $trucker->name }} - {{ $trucker->name }}</option>
            @endforeach
        </select>
        <br>
        <h1>Roles:</h1>    
        <select name="role_id">
            @foreach($roles as $rol)
                <option value="{{ $rol->id }}">{{ $rol->id }} - {{ $rol->name }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
 
</body>
</html>