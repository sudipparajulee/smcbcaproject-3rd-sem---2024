<?php include 'includes/header.php'; ?>
    <div class="flex item-center justify-center py-10">
        <form action="login.php" method="POST" onsubmit="return validate()" class="bg-gray-50 p-4 rounded-lg shadow-lg w-1/2">
            <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>
            <div class="mb-4">
                <label for="username" class="block mb-2 font-semibold">Username</label>
                <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2 font-semibold">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg">Login</button>
        </form>
    </div>
<?php include 'includes/footer.php'; ?>

<script>
    function validate() {
        // const username = document.getElementById('username').value;
        // const password = document.getElementById('password').value;
        // if (username.trim() === '' || password.trim() === '') {
        //     alert('Both fields are required!');
        //     return false;
        // }
        // if(password.length < 5){
        //     alert('Password must be at least 5 characters long!');
        //     return false;
        // }
        // // check regular expression for username (alphabet only)
        // const usernameRegex = /^[a-zA-Z]+$/;
        // if(!usernameRegex.test(username)){
        //     alert('Username must be alphabet only!');
        //     return false;
        // }
        
        //password must be exact 5 digits
        // const passwordRegex = /^\d{5}$/;
        // if(!passwordRegex.test(password)){
        //     alert('Password must be exactly 5 digits!');
        //     return false;
        // }
        return true;
    }   
</script>

<?php 
if(isset($_POST['username'])){
$uname = $_POST['username'];
$pass = $_POST['password'];
if($uname == '' || $pass == ''){
    echo "<script>alert('All fields are required!')</script>";
}
elseif(strlen($pass) < 5){
    echo "<script>alert('Password must be at least 5 characters long!')</script>";
}
else{
    header('Location: admin/dashboard.php');
}

}
?>