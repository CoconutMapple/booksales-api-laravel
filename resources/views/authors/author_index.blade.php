<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Authors - BookSales API</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-50 to-blue-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-5xl font-bold text-gray-800 mb-2">✍️ Book Authors</h1>
            <p class="text-gray-600 text-lg">Browse all registered book authors from database</p>
            
            <!-- Navigation -->
            <div class="mt-6 flex gap-4">
                <a href="/" class="bg-white px-6 py-2 rounded-lg shadow hover:shadow-md transition text-gray-700 hover:text-blue-600">
                    ← Home
                </a>
                <a href="/books" class="bg-blue-600 px-6 py-2 rounded-lg shadow hover:shadow-md transition text-white hover:bg-blue-700">
                    View Books →
                </a>
            </div>
        </div>

        <!-- Authors Table -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gradient-to-r from-purple-600 to-pink-600">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                ID
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                Author Name
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                Birth Year
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                Nationality
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                Bio
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($authors as $author)
                        <tr class="hover:bg-purple-50 transition duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $author->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-purple-700">{{ $author->name }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600">{{ $author->birth_year }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    {{ $author->nationality }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-600 line-clamp-2">{{ $author->bio ?? 'No bio available' }}</div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                No authors found. Please run the seeder.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Stats Card -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-gradient-to-r from-purple-500 to-pink-500 p-6 rounded-xl shadow-lg text-white">
                <h3 class="text-lg font-semibold mb-2">Total Authors</h3>
                <p class="text-4xl font-bold">{{ count($authors) }}</p>
            </div>
            <div class="bg-gradient-to-r from-blue-500 to-cyan-500 p-6 rounded-xl shadow-lg text-white">
                <h3 class="text-lg font-semibold mb-2">Data Source</h3>
                <p class="text-2xl font-bold">MySQL Database</p>
            </div>
            <div class="bg-gradient-to-r from-green-500 to-teal-500 p-6 rounded-xl shadow-lg text-white">
                <h3 class="text-lg font-semibold mb-2">Laravel Feature</h3>
                <p class="text-2xl font-bold">Migration & Seeder</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-12 text-center text-gray-500 text-sm">
            <p class="mb-2">📚 BookSales API - Laravel Migration & Seeder System</p>
            <p>Data loaded from database using Eloquent ORM</p>
        </div>
    </div>
</body>
</html>