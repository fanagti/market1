<x-layout>
    <div class="my-login-page">
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper">
                        <div class="brand">
                            <img src="img/logo.jpg" alt="bootstrap 4 login page">
                        </div>
                        <div class="card fat  shadow-lg p-3 mb-5 bg-white">
                            <div class="card-body">
                                <h4 class="card-title">Register</h4>

                                <form action="/sesi/register" method="POST" class="my-login-validation" >
                                   
                                    <div class="mb-3">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" class="form-control" name="name" required autofocus style="height: 37px; font-size:15px;">
                                        <div class="invalid-feedback">
                                            What's your name?
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="email">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" required style="height: 37px; font-size:15px;">
                                        <div class="invalid-feedback">
                                            Your email is invalid
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" required data-eye style="height: 37px; font-size:15px;">
                                        <div class="invalid-feedback">
                                            Password is required
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Password</label>
                                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required data-eye style="height: 37px; font-size:15px;">
                                        <div class="invalid-feedback">
                                            Password is required
                                        </div>
                                    </div>

                                    <label for="">pilih jenis kelamin anda:</label>

                                    <div class="input-group mb-3">
                                        <input id="genderlaki" type="radio" class="form-control d-inline " name="gender" value="laki-laki">
                                        <label for="genderlaki" class="d-inline ">laki-laki</label>
                                        <input id="genderperempuan" type="radio" class="form-control d-inline " name="gender" value="perempuan">
                                        <label for="genderperempuan" class="d-inline ">perempuan</label>

                                        <div class="invalid-feedback">
                                            Password is required
                                        </div>
                                    </div>


    
                                    {{-- <div class="form-group">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
                                            <label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
                                            <div class="invalid-feedback">
                                                You must agree with our Terms and Conditions
                                            </div>
                                        </div>
                                    </div> --}}
    
                                    <div class="form-group m-0">
                                        <button type="submit" class="btn btn-block">
                                            Register
                                        </button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        Already have an account? <a href="index.html">Login</a>
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
