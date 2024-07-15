<!DOCTYPE html>
<html>
<head>
	<title>Pupil's Dashboard</title>
	<link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<!-- bg-base-100 -->
<header>
    <div class="navbar ">
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
        <li><a>Home</a></li>
        <li>
          <a>Contact us</a>
          <!-- <a>Register</a> -->
          <!-- <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul> -->
        </li>
        <li><a>About</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl">MCMS</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1 text-black">
      <li><a>Home</a></li>
      <li><a>contact us</a></li>
      <!-- <li><a>Register</a></li> -->
      <!-- <li>
        <details>
          <summary>Parent</summary>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </details>
      </li> -->
      <li><a>About</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn">Log out</a>
  </div>
</div>
</header>
<!-- <div id="data-group">
  <div id="View challenges">View challenges</div>
  <div id="Attempt challenges">Attempt challenges</div>
  <div id="View applicants">View applicants</div>
  <div id="View reports">View reports</div> -->
  <!-- Add more data elements here -->
</div>

<div id="link-container" class="text-black">
  <h1>Menu<h1><br>
  <a href="#View challenges">View challenges</a><br>
  <a href="#Attempt challenges">Attempt challenges</a><br>
  <a href="#View applicants">View applicants</a><br>
  <a href="#View Reports">View report </a><br>
  <!-- Add more links here -->
</div>

<div class="bg-cyan-100">
<div id="View applicants "></div>
 <h2 class=" text-2xl text-center">View Applicants</h2><br> 
 <h2>To be filled by  school representatives only</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>School Registration Number</th>
			<th>School Name</th>
			<th>Confirm applicant</th>
		</tr>
		<tr>
			<td>Applicant 1</td>
			<td>xxx</td>
			<td>ABC Primary School</td>
			<td class="confirm-participation"><input type="checkbox" name="confirm-participation" value="John Doe"></td>
		</tr>
		<tr>
			<td>Applicant 2</td>
			<td>yyy</td>
			<td>XYZ Primary School</td>
			<td class="confirm-participation"><input type="checkbox" name="confirm-participation" value="Jane Smith"></td>
		</tr>
		<tr>
			<td>Applicant 3</td>
			<td>xxx</td>
			<td>ABC Primary School</td>
			<td class="confirm-participation"><input 
      type="checkbox" name="confirm-participation" value="Bob Johnson"></td>
		</tr>
		<tr>
			<td>Applicant 4</td>
			<td>www</td>
			<td>uvw Primary School</td>
			<td class="confirm-participation"><input type="checkbox" name="confirm-participation" value="Alice Brown"></td>
		</tr>
	</table>
	<br>
	<div class="school-representative-confirmation">
		<h2>School Representative Confirmation</h2>
		<p>I, <input type="text" name="school-representative-name">, confirm that the above-mentioned applicants are eligible to participate in the challenge. I have verified their school registration numbers and confirm their participation.</p>
		<p>username: <input type="text" name="user name" class="username"></p>
		<p>Date: <input type="date" name="date"></p>
	</div>
</div>
	<div class="dashboard">
		<div class="profile">
			<h2>Applicants</h2>
			<p>Name: <span id="name"></span></p>
			<!-- <p>Email: <span id="email"></span></p>
			<p>Date of Birth: <span id="date-of-birth"></span></p> -->
			<p>School Registration Number: <span id="school-registration-number"></span></p>
		</div>
		<div class="challenges">
    <div id="View challenges">View challenges</div>
			<!-- <h2 class="text-center font-bold text-2xl">Challenges</h2> -->
			<ul id="challenge-list"></ul>
      
		<li>
			<h3 class="font-bold">Challenge 1</h3>
			<p>Description: This is the first challenge</p>
			<p>Questions: 10</p>
			<p>Duration: 30 minutes</p>
			<div class="button text-right text-red-500">
  <div id="Attempt challenges"></div>
        <button class="attempt-button"  onclick= attemptChallenge(1)>Attempt Challenge</button>
</div>
		</li>
		<li>
			<h3 class="font-bold">Challenge 2</h3>
			<p>Description: This is the second challenge</p>
			<p>Questions: 10</p>
			<p>Duration: 30 minutes</p>
      <div class="button text-right text-red-500">
  <div id="Attempt challenges"></div>
			<button class="attempt-button text-right" onclick="attemptChallenge(2)">Attempt</button>
</div>
		</li>
    <li>
			<h3 class="font-bold">Challenge 3</h3>
			<p>Description: This is the third challenge</p>
			<p>Questions: 10</p>
			<p>Duration: 30 minutes</p>
      <div class="button text-right text-red-500">
  <div id="Attempt challenges"></div>
			<button class="attempt-button text-right" onclick="attemptChallenge(3)">Attempt</button>
</div>
		</li>
		<!-- Add more challenges here -->
    </ul>
</div>

		</div>
		<div class="report">
    <div id="View reports">My report</div> 
		 <h2 class="text-center text-2xl font-bold">View report</h2> 
			<p>Scores: <span id="scores"></span></p>
			<p>Time taken: <span id="time-taken"></span></p>
		</div>
		<div class="analytics">
			<h2 class="text-center text-2xl font-bold">Analytics</h2>
			<p>Most correctly answered questions: <span id="most-correctly-answered"></span></p>
			<p>School Rankings: <span id="school-rankings"></span></p>
			<p>Performance over time: <span id="performance-over-time"></span></p>
			<p>Percentage repetition of questions: <span id="percentage-repetition"></span></p>
		</div>
	</div>
	<script src="script.js"></script>
</body>
</html>

