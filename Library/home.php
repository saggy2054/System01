<!doctype html>
<html lang="en">
<head><title>Document</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to bottom right, #30cfd0, #330867);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    width: 350px;
}

.login-box {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

.input-group {
    margin-bottom: 20px;
    text-align: left;
}

input[type="text"],
input[type="password"]
{
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button[type="submit"] {
  width: 50%;
  padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box; 
    background-color: #6c63ff;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #5245cc;
}

</style>

<link rel="stylesheet" href="">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Customer Login</h2>
            <form id="login-form" action="#" method="POST">
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" id="login-btn">Login</button>
            </form>
            <p>Don't have an account? <a href="register.html">Register</a></p>
        </div>
    </div>

    <script src="script.js">document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission (for demo purposes)
    
    // Here you can add your login logic using JavaScript or connect with server-side code
    // For demonstration purposes, a console log is used
    console.log('Login button clicked!'); 
});
</script>
</body>
</html>
