<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .details-table th,
        .details-table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .details-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="https://cdn.propriodirect.com/img/logo_fr.svg?v=1692671670" width="80" alt="Company Logo" width="200">
        </div>

        <table class="details-table">
            <tr>
                <th>Name</th>
                <td>{{ $apartmentDetails->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $apartmentDetails->email }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $apartmentDetails->phone }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $apartmentDetails->address }}</td>
            </tr>
            <tr>
                <th>Bedrooms</th>
                <td>{{ $apartmentDetails->bedrooms }}</td>
            </tr>
            <tr>
                <th>Bathrooms</th>
                <td>{{ $apartmentDetails->bathrooms }}</td>
            </tr>
            <tr>
                <th>Square</th>
                <td>{{ $apartmentDetails->square }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
