<form action="process.php" method = "post">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">  
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name="username" class="form-control" />
                <label class="form-label">username</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control" />
                <label class="form-label">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" name="loginbutton" value="Login" class="btn btn-primary btn-block mb-4">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="register.php">Register</a></p>
                
            </div>
        </div>
    </section>
</form>