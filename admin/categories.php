<?php include 'includes/header.php'; ?>
    <div>
        <h2 class="font-bold text-3xl">Categories</h2>
        <hr class="h-1 bg-red-600">
    </div>
    <div class="flex justify-end py-4">
        <a href="" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Category</a>
    </div>
    <table class="w-full">
        <tr>
            <th class="text-left p-2 border">Priority</th>
            <th class="text-left p-2 border">Name</th>
            <th class="text-left p-2 border">Actions</th>
        </tr>
        <tr>
            <td class="p-2 border">1</td>
            <td class="p-2 border">Category 1</td>
            <td class="p-2 border">
                <a href="" class="text-blue-500 hover:underline">Edit</a>
                <a href="" class="text-red-500 hover:underline ml-2">Delete</a>
            </td>
        </tr>
    </table>
<?php include 'includes/footer.php'; ?>