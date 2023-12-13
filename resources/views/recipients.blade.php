<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipient records</title>
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
<form action="{{ route('recipient.store') }}" method="POST">
                @csrf
                <label for="recipient_ID">Personal ID:</label>
                <input type="text" name="recipient_ID" required>

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
    
                <label for="date_of_birth">Last Donation Date:</label>
                <input type="date" name="date_of_birth" required>
    
                <button class="submit" type="submit">Submit</button>
            </form>

            <table>
                    <thead>
                        <tr>
                            <th>recipient ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Blood Group</th>
                            <th>Date of Birth</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recipients as $recipient)
                            <tr>
                                <td>{{ $recipient->recipient_ID }}</td>
                                <td>{{ $recipient->first_name }}</td>
                                <td>{{ $recipient->last_name }}</td>
                                <td>{{ $recipient->gender }}</td>
                                <td>{{ $recipient->email }}</td>
                                <td>{{ $recipient->contact_number }}</td>
                                <td>{{ $recipient->address }}</td>
                                <td>{{ $recipient->bloodGroup->bloodGroupName}}</td> <!-- Assuming you have a relationship with BloodGroup model -->
                                <td>{{ $recipient->date_of_birth }}</td>
                            <td class="edit-btns">
                                    
                                <form action="/recipient/delete/{{$recipient->id}}" method="POST">
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