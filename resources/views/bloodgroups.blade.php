<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Groups</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/common.css') }}" />
</head>
<body>
        <table>
                <thead>
                    <tr>
                        <th>Blood Group</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bloodgroups as $bloodgroup)
                        <tr>
                            <td>{{ $bloodgroup->bloodGroupName }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
</body>
</html>