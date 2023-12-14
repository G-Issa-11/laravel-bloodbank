<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff records</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/common.css') }}" />
</head>
<body>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<form action="{{ route('staff.store') }}" method="POST">
                @csrf
                <label for="staff_ID">Personal ID:</label>
                <input type="text" name="staff_id" required>

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

                <label for="contact_number">contact_number:</label>
                <input type="text" name="contact_number" required>
    
                <label for="address">Address:</label>
                <textarea name="address" required></textarea>
    
                <label for="employment_date">Employment Date:</label>
                <input type="date" name="employment_date" required>

                <label for="position">Position:</label>
                <input type="text" name="position" required>
    
                <button class="submit" type="submit">Submit</button>
            </form>
            <p class="delete-btn"><a href="{{route('staff.reset')}}">Delete Table</a></p>
            <table>
                    <thead>
                        <tr>
                            <th>Personal ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Employment Date</th>
                            <th>Position</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($staffMembers as $staffMember)
                            <tr>
                                <td>{{ $staffMember->staff_id }}</td>
                                <td>{{ $staffMember->first_name }}</td>
                                <td>{{ $staffMember->last_name }}</td>
                                <td>{{ $staffMember->gender }}</td>
                                <td>{{ $staffMember->email }}</td>
                                <td>{{ $staffMember->contact_number }}</td>
                                <td>{{ $staffMember->address }}</td>
                                <td>{{ $staffMember->employment_date}}</td> <!-- Assuming you have a relationship with BloodGroup model -->
                                <td>{{ $staffMember->position}}</td>
                            <td class="edit-btns">
                                    
                                <form action="/staff/delete/{{$staffMember->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
        
                            </form>
                        </td>
    
                                
    
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>