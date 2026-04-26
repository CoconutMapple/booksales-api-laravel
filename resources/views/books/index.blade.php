<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Catalog - BookSales API</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-5xl font-bold text-gray-800 mb-2">📚 Books Catalog</h1>
            <p class="text-gray-600 text-lg">Browse all available books in our collection</p>
            
            <!-- Navigation -->
            <div class="mt-6 flex gap-4">
                <a href="/" class="bg-white px-6 py-2 rounded-lg shadow hover:shadow-md transition text-gray-700 hover:text-blue-600">
                    ← Home
                </a>
                <a href="/authors" class="bg-purple-600 px-6 py-2 rounded-lg shadow hover:shadow-md transition text-white hover:bg-purple-700">
                    View Authors →
                </a>
            </div>
        </div>

        <!-- Books Table -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gradient-to-r from-blue-600 to-indigo-600">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                ID
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                Book Title
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                Author
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                ISBN
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                Year
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                Price
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                Stock
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($books as $book)
                        <tr class="hover:bg-blue-50 transition duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $book->id }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-bold text-blue-700">{{ $book->title }}</div>
                                <div class="text-xs text-gray-500 mt-1 line-clamp-1">{{ $book->description }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-700">{{ $book->author->name }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-xs font-mono text-gray-600">{{ $book->isbn }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600">{{ $book->publication_year }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-green-600">Rp {{ number_format($book->price, 0, ',', '.') }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($book->stock > 0)
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ $book->stock }} units
                                    </span>
                                @else
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Out of Stock
                                    </span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-6 py-8 text-center text-gray-500">
                                No books found. Please run the seeder.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-gradient-to-r from-blue-500 to-indigo-500 p-6 rounded-xl shadow-lg text-white">
                <h3 class="text-lg font-semibold mb-2">Total Books</h3>
                <p class="text-4xl font-bold">{{ count($books) }}</p>
            </div>
            <div class="bg-gradient-to-r from-green-500 to-emerald-500 p-6 rounded-xl shadow-lg text-white">
                <h3 class="text-lg font-semibold mb-2">Total Stock</h3>
                <p class="text-4xl font-bold">{{ $books->sum('stock') }}</p>
            </div>
            <div class="bg-gradient-to-r from-orange-500 to-red-500 p-6 rounded-xl shadow-lg text-white">
                <h3 class="text-lg font-semibold mb-2">Total Value</h3>
                <p class="text-2xl font-bold">Rp {{ number_format($books->sum('price'), 0, ',', '.') }}</p>
            </div>
            <div class="bg-gradient-to-r from-purple-500 to-pink-500 p-6 rounded-xl shadow-lg text-white">
                <h3 class="text-lg font-semibold mb-2">Data Source</h3>
                <p class="text-2xl font-bold">MySQL Database</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-12 text-center text-gray-500 text-sm">
            <p class="mb-2">📚 BookSales API - Laravel Migration & Seeder System</p>
            <p>Data loaded from database with Eloquent relationships</p>
        </div>
    </div>
</body>
</html>
