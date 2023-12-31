<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Donor</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/common.css') }}" />
</head>
<body>
        <h2>Edit <span>{{$donor->first_name}} {{$donor->last_name}}</span> Donor's Info</h2>
        <form method="POST" action="/edit-donor/{{$donor->id}}">
            @csrf
            @method('PUT')
            <input type="text" name="address" value={{$donor->address}}>
            <input type="text" name="email" value={{$donor->email}}>
            <input type="date" name="last_donation_date" value={{$donor->last_donation_date}}>
            <button>Save changes!</button>
        </form>


        
</body>
</html>