<!DOCTYPE html>
<html>
<head>
    <title>CMREC STUDY CENTRAL</title>
   
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

header {
    background-color: #6488ea;
    color: #fff;
    text-align: center;
    padding: 20px;
}

main {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

section {
    margin-bottom: 20px;
}

h2 {
    color: #0074b7;
}

form input[type="file"] {
    margin-bottom: 10px;
}
nav {
    background-color: #0074b7;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex; 
}

nav li {
    margin-right: 10px; 
}

nav a {
    text-decoration: none;
    color: #fff;
}


nav a:hover {
    text-decoration: underline;
}
.photos {
    display: flex;
}

.circle-photo {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    margin: 10px;
}

.circle-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.circle-photo:hover {
    transform: scale(1.1);
    transition: transform 0.2s ease;
}

 </style>
</head>
<body>
    <header>
        <h1>WELCOME TO CMREC STUDY CENTRAL</h1>
        
    </header>
    <img src="CMRECMAIN.jpeg"
    <main>
        <center><h2>Please Select Your Regulation !</h2></center>
    </main>

    
    
    <center><div class="photos">
        <a href="page1.php" class="circle-photo">
            <img src="R16.png" alt="Photo 1">
        </a>
        <a href="page2.php" class="circle-photo">
            <img src="R18.png" alt="Photo 2">
        </a>
        <a href="page3.php" class="circle-photo">
            <img src="R20.png" alt="Photo 3">
        </a>
        <a href="page4.php" class="circle-photo">
            <img src="R22.png" alt="Photo 4">
        </a>
    </center>  </div>
</body>
</html>
