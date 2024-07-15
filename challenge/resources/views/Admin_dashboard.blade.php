<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Dashboard</title>
    <link rel="stylesheet" href="tailwind.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<header>
        <nav class="navbar text-black">
            <ul style="display: inline-block;">
                <li><a href="#welcome">Welcome</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#Home">Home</a></li>
            </ul>
        </nav>
    </header>

    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12 mt-20">
        <h1 class="text-3xl font-bold mb-4 text-center">Administrator Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Upload Schools -->
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-lg font-bold mb-2">Upload Schools</h2>
                <form>
                    <label for="school-name" class="block mb-2">School Name:</label>
                    <input type="text" id="school-name" name="school-name" class="block w-full mb-2">
                    <label for="district" class="block mb-2">District:</label>
                    <input type="text" id="district" name="district" class="block w-full mb-2">
                    <label for="registration-number" class="block mb-2">Registration Number:</label>
                    <input type="text" id="registration-number" name="registration-number" class="block w-full mb-2">
                    <label for="email" class="block mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="block w-full mb-2">
                    <label for="school-representative-name" class="block mb-2">School Representative Name:</label>
                    <input type="text" id="school-representative-name" name="school-representative-name" class="block w-full mb-2">
                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Upload</button>
                </form>
            </div>
            <!-- Upload Questions -->
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-lg font-bold mb-2">Upload Questions</h2>
                <form>
                    <label for="question" class="block mb-2">Question:</label>
                    <textarea id="question" name="question" class="block w-full mb-2"></textarea>
                    <label for="option-a" class="block mb-2">Option A:</label>
                    <input type="text" id="option-a" name="option-a" class="block w-full mb-2">
                    <label for="option-b" class="block mb-2">Option B:</label>
                    <input type="text" id="option-b" name="option-b" class="block w-full mb-2">
                    <label for="option-c" class="block mb-2">Option C:</label>
                    <input type="text" id="option-c" name="option-c" class="block w-full mb-2">
                    <label for="option-d" class="block mb-2">Option D:</label>
                    <input type="text" id="option-d" name="option-d" class="block w-full mb-2">
                    <label for="correct-answer" class="block mb-2">Correct Answer:</label>
                    <input type="text" id="correct-answer" name="correct-answer" class="block w-full mb-2">
                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Upload</button>
                </form>
            </div>
            <!-- Set Challenge Parameters -->
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-lg font-bold mb-2">Set Challenge Parameters</h2>
                <form>
                    <label for="challenge-date" class="block mb-2">Challenge Date:</label>
                    <input type="date" id="challenge-date" name="challenge-date" class="block w-full mb-2">
                    <label for="challenge-duration" class="block mb-2">Challenge Duration:</label>
                    <input type="number" id="challenge-duration" name="challenge-duration" class="block w-full mb-2">
                    <label for="number-of-questions" class="block mb-2">Number of Questions:</label>
                    <input type="number" id="number-of-questions" name="number-of-questions" class="block w-full mb-2">
                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Set Parameters</button>
                </form>
            </div>
            <!-- Upload answers -->
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-lg font-bold mb-2">Upload Answers</h2>
                <form>
                    <label for="question" class="block mb-2">Answer:</label>
                    <textarea id="question" name="question" class="block w-full mb-2"></textarea>
                    <label for="option-a" class="block mb-2">Option A:</label>
                    <input type="text" id="option-a" name="option-a" class="block w-full mb-2">
                    <label for="option-b" class="block mb-2">Option B:</label>
                    <input type="text" id="option-b" name="option-b" class="block w-full mb-2">
                    <label for="option-c" class="block mb-2">Option C:</label>
                    <input type="text" id="option-c" name="option-c" class="block w-full mb-2">
                    <label for="option-d" class="block mb-2">Option D:</label>
                    <input type="text" id="option-d" name="option-d" class="block w-full mb-2">
                    <!-- <label for="correct-answer" class="block mb-2">Correct Answer:</label>
                    <input type="text" id="correct-answer" name="correct-answer" class="block w-full mb-2"> -->
                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Upload</button>
                </form>
            </div>
            <!-- View Challenges -->
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-lg font-bold mb-2">View Challenges</h2>
                <table class="table-fixed mb-4">
                    <thead>
                        <tr>
                            <th class="px-0 py-2">Challenge Name</th>
                            <th class="px-4 py-2">Start Date</th>
                            <th class="px-4 py-2">End Date</th>
                            <th class="px-0.5 py-2">Duration</th>
                            <th class="px-0.5 py-2">Number of Questions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Challenges will be listed here -->
                    </tbody>
                </table>
            </div>
            <!-- View Reports -->
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-lg font-bold mb-2">View Reports</h2>
                <table class="table-fixed mb-4">
                    <thead>
                        <tr>
                            <th class="px-0 py-2">Challenge Name</th>
                            <th class="px-0 py-2">Participant Name</th>
                            <th class="px-0 py-2">Score</th>
                            <th class="px-0 py-2">Time Taken</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Reports will be listed here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>


