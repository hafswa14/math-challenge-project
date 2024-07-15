

// Get the pupil's data from the server
fetch('(link unavailable)')
	.then(response => response.json())
	.then(data => {
		// Display the pupil's profile information
		document.getElementById('name').innerHTML = data.name;
		document.getElementById('email').innerHTML = data.email;
		document.getElementById('date-of-birth').innerHTML = data.dateOfBirth;
		document.getElementById('school-registration-number').innerHTML = data.schoolRegistrationNumber;
		
		// Display the challenges
		const challengeList = document.getElementById('challenge-list');
		data.challenges.forEach(challenge => {
			const challengeListItem = document.createElement('LI');
			challengeListItem.innerHTML = challenge.name;
			challengeList.appendChild(challengeListItem);
		});
		
		// Display the report
		document.getElementById('scores').innerHTML = data.scores;
		document.getElementById('time-taken').innerHTML = data.timeTaken;
		
		// Display the analytics
		document.getElementById('most-correctly-answered').innerHTML = data.mostCorrectlyAnswered;
		document.getElementById('school-rankings').innerHTML = data.schoolRankings;
		document.getElementById('performance-over-time').innerHTML = data.performanceOverTime;
		document.getElementById('percentage-repetition').innerHTML = data.percentageRepetition;
	});

    function attemptChallenge(challengeId) {
        // Fetch the questions for the selected challenge
        fetch(`questions/${challengeId}`)
            .then(response => response.json())
            .then(questions => {
                // Display the questions one by one
                const questionContainer = document.getElementById('question-container');
                questions.forEach((question, index) => {
                    const questionElement = document.createElement('DIV');
                    questionElement.innerHTML = `
                        <h3>Question ${index + 1}</h3>
                        <p>${question.question}</p>
                        <input type="radio" name="answer" value="A">A) ${question.optionA}</input>
                        <input type="radio" name="answer" value="B">B) ${question.optionB}</input>
                        <input type="radio" name="answer" value="C">C) ${question.optionC}</input>
                        <input type="radio" name="answer" value="D">D) ${question.optionD}</input>
                        <button onclick="submitAnswer(${challengeId}, ${index + 1})">Submit</button>
                    `;
                    questionContainer.appendChild(questionElement);
                });
            });
    }
    
    function submitAnswer(challengeId, questionIndex) {
        // Get the selected answer
        const answer = document.querySelector(`input[name="answer"][value="${questionIndex}"]`);
        
        // Fetch the next question or submit the answers
        fetch(`submit-answer/${challengeId}/${questionIndex}/${answer.value}`)
            .then(response => response.json())
            .then(result => {
                if (result.nextQuestion) {
                    // Display the next question
                    attemptChallenge(challengeId);
                } else {
                    // Display the results
                    const resultsElement = document.getElementById('results');
                    resultsElement.innerHTML = `
                        <h3>Results</h3>
                        <p>Scores: ${result.scores}</p>
                        <p>Time taken: ${result.timeTaken}</p>
				`;
			}
		});
}
// Add event listener to checkboxes
const checkboxes = document.querySelectorAll('.confirm-participation input[type="checkbox"]');
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        // Toggle background color of table row
        const tableRow = checkbox.closest('tr');
        tableRow.classList.toggle('confirmed');
    });
});
const dataGroup = document.getElementById('data-group');
const links = document.getElementById('link-container').getElementsByTagName('a');

links.forEach(link => {
  link.addEventListener('click', event => {
    event.preventDefault();
    const targetId = link.getAttribute('href').substr(1); // Remove # from href
    const targetElement = dataGroup.querySelector(`#${targetId}`);
    targetElement.scrollIntoView();
  });
});



// Add event listeners to buttons
document.addEventListener("DOMContentLoaded", function() {
    const uploadSchoolsButton = document.querySelector("#upload-schools-button");
    const uploadQuestionsButton = document.querySelector("#upload-questions-button");
    const setChallengeParametersButton = document.querySelector("#set-challenge-parameters-button");
    const viewChallengesButton = document.querySelector("#view-challenges-button");
    const viewReportsButton = document.querySelector("#view-reports-button");
    
    uploadSchoolsButton.addEventListener("click", uploadSchools);
    uploadQuestionsButton.addEventListener("click", uploadQuestions);
    setChallengeParametersButton.addEventListener("click", setChallengeParameters);
    viewChallengesButton.addEventListener("click", viewChallenges);
    viewReportsButton.addEventListener("click", viewReports);

})



