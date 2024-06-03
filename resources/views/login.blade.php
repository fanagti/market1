<x-layout>
  <div class="my-login-page ">
    <section class="h-100 ">
      <div class="container h-100 ">
        <div class="row justify-content-md-center h-100">
          <div class="card-wrapper">
            <div class="brand">
              <img src="img/logo.jpg" alt="logo">
            </div>
            <div class="card fat shadow-lg p-3 mb-5 bg-white">
              <div class="card-body">
                <h4 class="card-title">Login</h4>

                <form action="/sesi/login" method="POST" class="my-login-validation">
                  @csrf
                  <div class="form-group">
                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus style="height: 37px; font-size:15px;">
                    <div class="invalid-feedback">
                      Email is invalid
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="password">Password
                      <a href="forgot.html" class="float-right">
                        Forgot Password?
                      </a>
                    </label>
                    <input id="password" type="password" class="form-control" name="password" required data-eye style="height: 37px; font-size:15px;">
                      <div class="invalid-feedback">
                        Password is required
                      </div>
                  </div>
  
                  <div class="form-group">
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" name="remember" id="remember" class="custom-control-input" >
                      <label for="remember" class="custom-control-label">Remember Me</label>
                    </div>
                  </div>
  
                  <div class="form-group m-0">
                    <button type="submit" class="btn btn-block heigh">
                      Login
                    </button>
                  </div>
                  <div class="mt-4 text-center">
                    Don't have an account? <a href="register.html">Create One</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    
  </div>
</x-layout>