<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blood bank</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
 
        
    </head>
    <body id="welcome">
        <h1>Welcome to our Simple Blood Bank Admin Panel!</h1>
        <a href="{{ route('donor.records') }}" class="btn btn-default">Donor Records</a>
        <a href="{{ route('recipient.records') }}" class="btn btn-default">Recepient Records</a>
        <a href="{{ route('donation.records') }}" class="btn btn-default">Donation Records</a>
    <a href="{{route('staff.records')}}" class="btn btn-default">Staff Records</a>
    <a href="{{route('bloodgroup.records')}}" class="btn btn-default">Blood Groups</a>
        @include('footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
