<?php include 'includes/header.php'; ?>
    <div>
        <h2 class="font-bold text-3xl">Create Category</h2>
        <hr class="h-1 bg-red-600">
    </div>

    <form action="actioncategory.php" method="POST" class="mt-5">
        <input type="text" placeholder="Priority" name="priority" class="w-full p-2 border mb-4 rounded-lg">
        <input type="text" placeholder="Category Name" name="name" class="w-full p-2 border mb-4 rounded-lg">
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
            <a href="categories.php" class="bg-red-500 text-white px-4 py-2 rounded ml-2">Cancel</a>
        </div>
    </form>
    
<?php include 'includes/footer.php'; ?>