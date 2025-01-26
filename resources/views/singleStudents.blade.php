<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Cards</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="grid gap-6 p-6 min-h-screen sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($data as $id => $student)
            <div class="bg-white shadow-md rounded-lg p-6 transition transform hover:scale-105">
                <h1 class="text-xl font-bold text-gray-800 mb-2">
                    Hi, my name is <span class="text-blue-600">{{$student->name}}</span>.
                </h1>
                <p class="text-gray-700">
                    I live in <span class="font-semibold">{{$student->city}}</span>, and I am
                    <span class="font-semibold">{{$student->age}} years old</span>.
                </p>
                <p class="text-gray-700">
                    You can contact me at
                    <a href="mailto:{{$student->email}}" class="text-blue-500 underline">{{$student->email}}</a>.
                </p>
            </div>
        @endforeach
    </div>
</body>
</html>
