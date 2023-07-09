<main class="form-signup">
  <form method="post" action="test.php">
    <!--<img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

    <div class="form-floating">
      <input type="username" name="username" class="form-control" id="floatingInputusername" placeholder="xxxx">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="phone" name="phone" class="form-control" id="floatingInputphone" placeholder="9999999999">
      <label for="floatingInput">Phone Number</label>
    </div>
    <div class="form-floating">
      <input type="email" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
  </form>
</main>