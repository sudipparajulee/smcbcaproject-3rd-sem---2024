<?php include 'includes/header.php'; ?>
    <div class="flex item-center justify-center py-10">
        <form action="" class="bg-gray-50 p-4 rounded-lg shadow-lg w-1/2">
            <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>
            <div class="mb-4">
                <label for="username" class="block mb-2 font-semibold">Username</label>
                <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2 font-semibold">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">Login</button>
        </form>
    </div>
<?php include 'includes/footer.php'; ?>