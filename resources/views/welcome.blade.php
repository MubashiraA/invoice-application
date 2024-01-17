<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <title>Login</title>
</head>

<body>
    <form action="/post-login" method="post">
        @csrf
        <section class="vh-100" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">


                                <h3 class="mb-5">Sign In</h3>

                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" value="{{old('email')}}" style="text-align: center;"/>
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    @error('password')
                                    <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                </div>

                                @if(session('success'))
                                <pan class="text-danger">{{session('success')}}</pan>
                                @endif
                                <h6 style="text-align: left;"><a href="" >Forgot Password?</a></h6><br>
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button><br>
                                <h6>Don't have an account?<a href="/Registration/create">Sign Up</a></h6>
                                <hr class="my-4">
                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>