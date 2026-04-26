<!DOCTYPE html>
<html>
<head>
    <title>Stationify</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #ff6b9d, #a2d2ff);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex: 1;
            padding: 30px;
        }

        .card {
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            max-width: 500px;
            margin: 50px auto;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        input {
            width: 90%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ddd;
            margin-top: 10px;
        }

        .btn {
            padding: 12px 20px;
            border-radius: 30px;
            text-decoration: none;
            color: white;
            display: inline-block;
            margin: 10px;
            transition: 0.3s;
        }

        .btn-blue {
            background: linear-gradient(to right, #4dabf7, #74c0fc);
        }

        .btn-pink {
            background: linear-gradient(to right, #ff6b9d, #ff8fab);
        }

        .btn:hover {
            transform: scale(1.05);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background: #ff6b9d;
            color: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        footer {
            background: rgba(0,0,0,0.3);
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>

<body>

@php
    $username = $username ?? null;
@endphp

@include('components.navbar')

<div class="container">
    @yield('content')
</div>

@include('components.footer')

</body>
</html>