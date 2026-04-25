<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Genres - BookSales API</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">📚 Book Genres</h1>
            <p class="text-gray-600">Browse all available book genres</p>
            
            <!-- Navigation -->
            <div class="mt-4">
                <a href="/" class="text-blue-600 hover:text-blue-800 mr-4">← Home</a>
                <a href="/authors" class="text-blue-600 hover:text-blue-800">View Authors →</a>
            </div>
        </div>

        <!-- Genres Table -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gradient-to-r from-blue-500 to-purple-600">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            ID
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            Genre Name
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            Description
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($genres as $genre)
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $genre['id'] }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-semibold text-gray-900">{{ $genre['name'] }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">{{ $genre['description'] }}</div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Stats -->
        <div class="mt-6 bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
            <p class="text-sm text-blue-700">
                <strong>Total Genres:</strong> {{ count($genres) }}
            </p>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center text-gray-500 text-sm">
            <p>BookSales API - Laravel MVC System</p>
        </div>
    </div>
</body>
</html>
