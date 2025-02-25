<div class="flex justify-between mb-4">
    <h1 class="text-xl font-bold">Announcement List</h1>
    <a href="{{ route('announcement.form') }}" class="bg-red-500 text-white py-2 px-4 rounded">Create Announcement</a>
</div>

<table class="min-w-full border-collapse border border-gray-200">
    <thead>
        <tr>
            <th class="border border-gray-200 p-2">#</th>
            <th class="border border-gray-200 p-2">Cover Image</th>
            <th class="border border-gray-200 p-2">Title</th>
            <th class="border border-gray-200 p-2">Content</th>
            <th class="border border-gray-200 p-2">Category</th>
            <th class="border border-gray-200 p-2">Pin</th>
            <th class="border border-gray-200 p-2">Start - End Date</th>
            <th class="border border-gray-200 p-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Mockup Data -->
        @for ($i = 1; $i <= 5; $i++)
        <tr>
            <td class="border border-gray-200 p-2">{{ $i }}</td>
            <td class="border border-gray-200 p-2"><img src="path/to/image.jpg" alt="Cover Image" class="w-16 h-16 object-cover"></td>
            <td class="border border-gray-200 p-2">Announcement Title {{ $i }}</td>
            <td class="border border-gray-200 p-2">Content snippet for announcement {{ $i }}</td>
            <td class="border border-gray-200 p-2">Category {{ $i }}</td>
            <td class="border border-gray-200 p-2">Yes</td>
            <td class="border border-gray-200 p-2">2023-01-01 - 2023-01-31</td>
            <td class="border border-gray-200 p-2">
                <a href="{{ route('announcement.edit', $i) }}" class="text-blue-500"><i class="fas fa-pencil-alt"></i></a>
                <a href="{{ route('announcement.delete', $i) }}" class="text-red-500 ml-2"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        @endfor
    </tbody>
</table>

<!-- Pagination -->
<div class="mt-4">
    {{ $announcements->links() }}
</div>
