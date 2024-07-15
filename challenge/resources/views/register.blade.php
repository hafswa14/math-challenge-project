<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
</head>
<body style="background-image: url('bg_1.jpg'); background-size: cover; background-repeat: no-repeat; ">
<div class="hero bg-base-200 min-h-screen bg-cyan-100 ">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Register to get started</h1>
      <p class="py-6">
       In order to attempt the challenge,  you are required to fill this form
      </p>
    </div>
    <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
      <form class="card-body">
      <div class="form-control">
          <label class="label">
            <span class="label-text">First name</span>
          </label>
          <input type="namel" placeholder="Fname" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Last name</span>
          </label>
          <input type="name" placeholder="Lname" class="input input-bordered" required />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">User name</span>
          </label>
          <input type="ename" placeholder="user name" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Email Address</span>
          </label>
          <input type="email" placeholder="email" class="input input-bordered" required />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input type="password" placeholder="password" class="input input-bordered" required />
          <label class="label">
            <!-- <a href="#" class="label-text-alt link link-hover">Forgot password?</a> -->
          </label>
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Date Of Birth</span>
          </label>
          <input type="date" placeholder="D.O.B" class="input input-bordered" required />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">School Registration Number</span>
          </label>
          <input type="number" placeholder="Regno." class="input input-bordered" required />
        </div>
        
        <div class="form-control mt-6">
          <button class="btn btn-primary" href="/register">Register</button>
        </div>
      </form>
    </div>
  </div>
</div> 
</body>
</html>