<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <div class="flex justify-center mb-4">  
        </div>
        <h2 class="text-xl font-semibold mb-2">{{ $data->first_name.' '.$data->last_name }}</h2>
        <p class="text-gray-600 text-sm mb-4">{{ $data->department->name }}</p>
        <div class="mb-4">
            <h3 class="text-gray-700 text-sm font-semibold mb-2">Contact Information</h3>
            <p class="text-gray-600 text-sm">Email: {{ $data->email }}</p>
            <p class="text-gray-600 text-sm">Phone: {{ $data->phone }}</p>
        </div>
        <div>
            <h3 class="text-gray-700 text-sm font-semibold mb-2">Address</h3>
            <p class="text-gray-600 text-sm">{{ $data->address }}</p>
        </div>
    </div>

</body>
</html>
