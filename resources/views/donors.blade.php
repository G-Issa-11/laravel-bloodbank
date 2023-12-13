<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donors records</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/common.css') }}" />
</head>
<body id="donors-page">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
        <form action="{{ route('donor.store') }}" method="POST">
                @csrf
                <label for="personal_id">Personal ID:</label>
                <input type="text" name="personal_id" required>

                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" required>
    
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" required>
    
                <label for="gender">Gender:</label>
                <select name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
    
                <label for="email">Email:</label>
                <input type="email" name="email" required>
    
                <label for="address">Address:</label>
                <textarea name="address" required></textarea>

                <label for="bloodgroup_id">Blood Group::</label>
                <select name="bloodgroup_id" required>
                    <option value="1">A+</option>
                    <option value="2">A-</option>
                    <option value="3">B+</option>
                    <option value="4">B-</option>
                    <option value="5">AB+</option>
                    <option value="6">AB-</option>
                    <option value="7">O+</option>
                    <option value="8">O-</option>
                </select>
    
                <label for="last_donation_date">Last Donation Date:</label>
                <input type="date" name="last_donation_date" required>
    
                <button class="submit" type="submit">Submit</button>
            </form>
        <table>
                <thead>
                    <tr>
                        <th>Personal ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Blood Group</th>
                        <th>Last Donation Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($donors as $donor)
                        <tr>
                            <td>{{ $donor->personal_id }}</td>
                            <td>{{ $donor->first_name }}</td>
                            <td>{{ $donor->last_name }}</td>
                            <td>{{ $donor->gender }}</td>
                            <td>{{ $donor->email }}</td>
                            <td>{{ $donor->address }}</td>
                            <td>{{ $donor->bloodGroup->bloodGroupName}}</td> <!-- Assuming you have a relationship with BloodGroup model -->
                            <td>{{ $donor->last_donation_date }}</td>
                        <td class="edit-btns">
                                
                            <form action="/donors/delete/{{$donor->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
    
                        </form>
                        <p><a href="/edit-donor/{{$donor->id}}">Edit</a></p>

                            

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>