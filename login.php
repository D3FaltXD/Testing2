<!-- /* write a simple login form with username and password fields and a submit button. 
When the user submits the form, check if the username is "admin" and the password is "password". */ -->

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'admin' && $password == 'password'){
        echo 'Login successful';
    } else {
        echo 'Login failed';
    }
}