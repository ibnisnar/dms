<form action="{{ route('add-document', ['folderid' => $folder->id]) }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="document_name" class="block text-sm font-medium text-gray-700">Document Name</label>
        <input type="text" name="document_name" id="document_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
    </div>
    <div class="mb-4">
        <label for="document_file" class="block text-sm font-medium text-gray-700">Document File</label>
        <input type="file" name="document_file" id="document_file" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow-sm hover:bg-blue-700">Add Document</button>
    </div>
</form>