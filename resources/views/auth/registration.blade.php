<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Register Authentication</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4>Registration</h4> 
            <!-- Section: Design Block -->
            <section class="background-radial-gradient overflow-hidden">
                <style>
                    .background-radial-gradient {
                        background-color: hsl(218, 41%, 15%);
                        background-image: radial-gradient(650px circle at 0% 0%,
                                hsl(218, 41%, 35%) 15%,
                                hsl(218, 41%, 30%) 35%,
                                hsl(218, 41%, 20%) 75%,
                                hsl(218, 41%, 19%) 80%,
                                transparent 100%),
                            radial-gradient(1250px circle at 100% 100%,
                                hsl(218, 41%, 45%) 15%,
                                hsl(218, 41%, 30%) 35%,
                                hsl(218, 41%, 20%) 75%,
                                hsl(218, 41%, 19%) 80%,
                                transparent 100%);
                    }

                    #radius-shape-1 {
                        height: 220px;
                        width: 220px;
                        top: -60px;
                        left: -130px;
                        background: radial-gradient(#44006b, #ad1fff);
                        overflow: hidden;
                    }

                    #radius-shape-2 {
                        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                        bottom: -60px;
                        right: -110px;
                        width: 300px;
                        height: 300px;
                        background: radial-gradient(#44006b, #ad1fff);
                        overflow: hidden;
                    }

                    .bg-glass {
                        background-color: hsla(0, 0%, 100%, 0.9) !important;
                        backdrop-filter: saturate(200%) blur(25px);
                    }
                </style>

                <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                    <div class="row gx-lg-5 align-items-center mb-5">
                        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                The best offer <br />
                                <span style="color: hsl(218, 81%, 75%)">for your business</span>
                            </h1>
                            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Temporibus, expedita iusto veniam atque, magni tempora mollitia
                                dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                                ab ipsum nisi dolorem modi. Quos?
                            </p>
                        </div>

                        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                            <div class="card bg-glass">
                                <div class="card-body px-4 py-5 px-md-5">
                                    <form  action="{{route('register-user')}}" method="post" >                                       
                                        @csrf
                                        <div class="row">
                                            <div class="col-large">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1" class="form-control" placeholder="Input your full name" name="name" value="{{old('name')}}" >
                                                    <label class="form-label" for="form3Example1">Full name</label>
                                                    @if($errors->has('name'))
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" class="form-control"  placeholder="Input your email" name="email" >
                                            <label class="form-label" for="form3Example3">Email address</label>
                                            @if($errors->has('email'))
                                            <span class="text-danger">{{$errors->first('email')}}</span>
                                            @endif
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4" class="form-control" placeholder="Enter password" name="password" >
                                            <label class="form-label" for="form3Example4">Password</label>
                                            @if($errors->has('password'))
                                            <span class="text-danger">{{$errors->first('password')}}</span>
                                            @endif
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                            Register
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>
