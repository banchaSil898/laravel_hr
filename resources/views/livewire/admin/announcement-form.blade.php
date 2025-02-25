<div class="flex">
    <!-- Left Section: Form -->
    <div class="w-1/2 p-4">
        <form>
            <!-- File Upload -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="file-upload">Upload File</label>
                <input type="file" id="file-upload" class="border rounded w-full py-2 px-3 text-gray-700" required>
            </div>

            <!-- Title Input -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
                <input type="text" id="title" class="border rounded w-full py-2 px-3 text-gray-700" required>
            </div>

            <!-- Rich Text Editor -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="content">Content</label>
                <textarea id="content" class="border rounded w-full py-2 px-3 text-gray-700" rows="5"></textarea>
                <!-- Include a rich text editor library here -->
            </div>

            <!-- Category Selection -->
            <div class="mb-4">
                <span class="block text-gray-700 text-sm font-bold mb-2">Category</span>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="category" value="ข่าวประชาสัมพันธ์">
                    <span class="ml-2">ข่าวประชาสัมพันธ์</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="category" value="ประกาศจาก HR">
                    <span class="ml-2">ประกาศจาก HR</span>
                </label>
            </div>

            <!-- Switch Checkbox -->
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox" id="pin">
                    <span class="ml-2">Pin Announcement</span>
                </label>
            </div>

            <!-- Date Pickers -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="start-date">Start Date</label>
                <input type="date" id="start-date" class="border rounded w-full py-2 px-3 text-gray-700">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="end-date">End Date</label>
                <input type="date" id="end-date" class="border rounded w-full py-2 px-3 text-gray-700">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>

    <!-- Right Section: Preview -->
    <div class="w-1/2 p-4 border-l">
        <h2 class="text-lg font-bold mb-4">Preview</h2>
        <div id="preview" class="border p-4">
            <!-- Preview content will be displayed here -->
        </div>
    </div>
</div>
