<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px;
        }

        input[type="file"] {
            display: none;
        }

        label {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            margin-bottom: 10px;
            display: block;
            transition: background-color 0.3s;
        }

        label:hover {
            background-color: #45a049;
        }

        #fileName {
            margin-top: 10px;
        }

        input, select {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1; 
        }

        .container {
            
            position: relative;
            z-index: 1; 
        }
    </style>
    <title>File Upload</title>
</head>
<body>

    <div class="container">
        <h2>Upload a File</h2>
        
        <form method="post" action="db.php" enctype="multipart/form-data">
            <!-- File Input -->
            <label for="fileInput">Choose File</label>
            <input type="file" id="fileInput" name="fileInput" onchange="displayFileName()" required>

            <!-- Other Inputs and Selects -->
            <label for="regulationInput">Your Regulation</label>
            <select id="regulationInput" name="regulation">
                <option value="R20">R20</option>
            </select>

            <label for="branchInput">Your Branch</label>
            <select id="branchInput" name="branch">
                <option value="CSE">Computer Science and Engineering (AI-ML)</option>
            </select>

            <label for="yearInput">Your Year</label>
            <select id="yearInput" name="year">
                <option value="1">First Year</option>
                <option value="2">Second Year</option>
                <option value="3">Third Year</option>
                <option value="4">Fourth Year</option>
            </select>

            <label for="subjectInput">Subject Name </label>
            <select id="subjectInput" name="subject">
                <option value="LAC">Linear Algebra and Calculus </option>
                <option value="subjectInput">Engineering Chemistry  </option>
                <option value="subjectInput">Programming for Problem Solving </option>
                <option value="ssubjectInput">Engineering Graphics </option>
                <option value="subjectInput">English </option>1
                <option value="subjectInput">Differential Equations and Vector Calculus </option>
                <option value="subjectInput">Applied Physics </option>
                <option value="subjectInput">Data Structures </option>
            </select>
            <!-- Your select and input fields here -->

            <!-- Displaying the selected file name -->
            <div id="fileName"></div>

            <!-- Submit Button -->
            <input type="submit" value="Submit">
        </form>
    </div>

    <script>
        function displayFileName() {
            const fileInput = document.getElementById("fileInput");
            const fileNameDisplay = document.getElementById("fileName");

            if (fileInput.files.length > 0) {
                const fileName = fileInput.files[0].name;
                fileNameDisplay.textContent = `Selected File: ${fileName}`;
            } else {
                fileNameDisplay.textContent = "FILE NOT SAVED!";
            }
        }
    </script>
    
</body>
</html>