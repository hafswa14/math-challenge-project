// Function to show registered applicants
function showRegisteredApplicants() {
	const content = document.querySelector('.content');
	content.innerHTML = `
		<h2>Registered Applicants</h2>
		<table class="table">
			<tr>
				<th>Name</th>
				<th>School Registration Number</th>
				<th>School Name</th>
			</tr>
			<tr>
				<td>John Doe</td>
				<td>12345</td>
				<td>ABC Primary School</td>
			</tr>
			<tr>
				<td>Jane Smith</td>
				<td>67890</td>
				<td>XYZ Primary School</td>
			</tr>
			<!-- Add more applicants here -->
		</table>
	`;
}
// Function to upload schools
function uploadSchools() {
	const content = document.querySelector('.content');
	content.innerHTML = `
		<h2>Upload Schools</h2>
		<form>
			<label for="school-name">School Name:</label>
			<input type="text" id="school-name" name="school-name"><br><br>
			<label for="district">District:</label>
			<input type="text" id="district" name="district"><br><br>
			<label for="registration-number">Registration Number:</label>
			<input type="text" id="registration-number" name="registration-number"><br><br>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email"><br><br>
			<label for="school-representative-name">School Representative Name:</label>
			<input type="text" id="school-representative-name" name="school-representative-name"><br><br>
			<button type="submit">Upload</button>
		</form>
	`;
}
/ Function to upload questions
function uploadQuestions() {
	const content = document.querySelector('.content');
	content.innerHTML = `
		<h2>Upload Questions</h2>
		<form>
			<label for="question">Question:</label>
			<textarea id="question" name="question"></textarea><br><br>
			<label for="option-a">Option A:</label>
			<input type="text" id="option-a" name="option-a"><br><br>
			<label for="option-b">Option B:</label>
			<input type="text" id="option-b" name="option-b"><br><br>
			<label for="option-c">Option C:</label>
			<input type="text" id="option-c" name="option-c"><br><br>
			<label for="option-d">Option D:</label>
			<input type="text" id="option-d" name="option-d"><br><br>
			<label for="correct-answer">Correct Answer:</label>
			<input type="text" id="correct-answer" name="correct-answer"><br><br>
			<button type="submit">Upload</button>
		</form>
	`;
}

