<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donations Records</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/common.css') }}" />
</head>
<body>
        <table>
                <thead>
                    <tr>
                        <th>Staff ID</th>
                        <th>Donor ID</th>
                        <th>Number of Donated Unites</th>
                        <th>Donation Date</th>
                        <th>Blood Group</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($donations as $donation)
                        <tr>
                            <td>{{ $donation->staff_id }}</td>
                            <td>{{ $donation->donor_id }}</td>
                            <td>{{ $donation->units_donated}}</td>
                            <td>{{ $donation->donation_date }}</td>
                            <td>{{ $donation->bloodgroup_id}}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
</body>
</html>