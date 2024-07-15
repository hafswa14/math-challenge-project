<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics Challenge Managemant System</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
    <div class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        <li><a href="/index">Index</a></li>
        <li>
          <a>About</a>
          <!-- <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul> -->
        </li>
        <li><a>contact us</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl">MCMS</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a>Index</a></li>
      <li><a href="#About">About </a></li>
       <!-- <li><a>about</a></li>  -->

      <!-- <li>
        <details>
          <summary>Parent</summary>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </details>
      </li> -->
      <li><a href="contact us">Contact us</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn" href="/register">Register</a>
  </div>
</div>
</header>
<main>
  <h1 class="text-5xl font-bold text-center mt-10">Mathematics Challenge Management System</h1>
<div class="hero bg-cyan-100 min-h-screen mt-5">
  <div class="hero-content flex-col lg:flex-row">
    <img
      src="assets/img/gallery/img-1.avif"
      class="max-w-sm rounded-lg shadow-2xl" />
    <div>
      <h1 class="text-5xl font-bold">Welcome to MCMS</h1>
      <p class="py-6">
      Where mathematicians converge to revel in the beauty and elegance of numbers
      </p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>
<div><a href="#<a>about</a>">About </a>
<div class="bg-white shadow-md rounded p-4">
<h1 class="mt-10 text-center text-2xl font-bold bg-white">How to access MCMS</h1><br>
<div style="background-image: url(assets/img/gallery/p4.jpg);background-position: center;background-size: contain;background-repeat: no-repeat;background-color:rgb(241 245 249);">
<div class="ml-3.5">
<p>All pupils in registered primary schools are eligible to take part in the competition. The
schools are are to be uploaded into the system by an administrator indicating the name, district, school registration
number, email of representative and name of representative. These representatives are to be validated
before being registered into the system </p><br>
<p>For a pupil to participate in the competition, they should register using a command line interface </p><br>
<P> If there are more than one valid challenges, a
prospective participant will choose which competition they wish to participate in. One can participate in more
than one challenge if they wish</p><br>
 <p>School representatives log into the system via the command line interface to confirm the newly registered
 prospective participants via a menu item viewApplicants</p><br>
 <p>Once accepted, the prospective participant can log in and see details of the challenges using
viewChallenges command. If the challenge is open, the participant can issue a command
attemptChallenge challengeNumber to start the challenge. Questions are picked randomly from those that
were issued. A participant has a maximum of three chances to attempt a challenge and each attempt presents
random questions. The questions will be presented one by one and each time a question is presented, the
number of remaining questions and time are indicated above the question</p><br></div>
</div>
</div>
</div>
</main>
<footer class="footer bg-base-200 text-base-content p-10 bg-sky-500">
  <aside>
    <svg
      width="50"
      height="50"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
      fill-rule="evenodd"
      clip-rule="evenodd"
      class="fill-current">
      <path
        d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
    </svg>
     <p> MCMS</p>
      <br />
      Mathematics is not about numbers,equations,computations or algorithms,it is about understanding
    </p>
  </aside>
  <!-- <nav>
    <h6 class="footer-title">Services</h6>
    <a class="link link-hover">Branding</a>
    <a class="link link-hover">Design</a>
    <a class="link link-hover">Marketing</a>
    <a class="link link-hover">Advertisement</a>
  </nav> -->
  <nav>
    <h6 class="footer-title font-bold">LINKS</h6>
    <a class="link link-hover">Home</a>
    <a class="link link-hover">About</a>
    <a class="link link-hover" href="login">contact us</a>
    <a class="link link-hover" href>Register</a> 
  </nav>
  <!-- <nav>
    <h6 class="footer-title">Legal</h6>
    <a class="link link-hover">Terms of use</a>
    <a class="link link-hover">Privacy policy</a>
    <a class="link link-hover">Cookie policy</a>
  </nav> -->
</footer>
</body>

</html>