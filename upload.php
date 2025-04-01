
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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

        <label for="fileInput">Choose File</label>
        <input type="file" id="fileInput" onchange="displayFileName()">

        <label for="branchInput">Your Branch</label>
        <select id="branchInput">
            <option value="CSE">Computer Science and Engineering (CSE) </option>
            <option value="EEE">Electrical and Electronics communication Engineering (ECE) </option>
            <option value="ME">Computer Science and Engineering (AI-ML) </option>
            <option value="CE">Computer Science and Engineering (DS)</option>
            <option value="CE">Computer Science and Engineering (Cyber Security)</option>
            <option value="CE">Information Technology (IT) </option>
        </select>

        <label for="yearInput">Your Year</label>
        <select id="yearInput">
            <option value="1">First Year</option>
            <option value="2">Second Year</option>
            <option value="3">Third Year</option>
            <option value="4">Fourth Year</option>
        </select>

        <label for="regulationInput">Your Regulation</label>
        <select id="regulationInput">
            <option value="yr">R16</option>
            <option value="yr">R18</option>
            <option value="yr">R20</option>
            <option value="yr">R22</option>
            <option value="yr">R23</option>
            <option value="yr">R24</option>
            <option value="yr">R25</option>
            <option value="yr">R26</option>
            <option value="yr">R27</option>
            <option value="yr">R28</option>
            <option value="yr">R29</option>
            <option value="yr">R30</option>

        </select>
        
        <label for="regulationInput">Subject Name </label>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Your Subject here......" title="Type in a name">
        <select id="regulationInput">
            
            <option value="yr">M1</option>
            <option value="yr">Chemistry</option>
            <option value="yr">Physics</option>
            <option value="yr">BEE</option>
            <option value="yr">M2</option>
            <option value="yr">CAD</option>
            

        </select>
        

        <div id="fileName"></div>

        <img src="cmrecimg.png" alt="Placeholder Image">
    </div>
    

    <div class="container">

    </div>

    <script>
        function displayFileName() {
            const fileInput = document.getElementById("fileInput");
            const fileNameDisplay = document.getElementById("fileName");

            if (fileInput.files.length > 0) {
                const fileName = fileInput.files[0].name;
                fileNameDisplay.textContent = 'Selected File: ${fileName}';
            } else {
                fileNameDisplay.textContent = "FILE NOT SAVED !";
            }
        }
    </script>
    
</body>
</html>