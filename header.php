<html>
<head>
    <title>Brightway Academy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


 <nav>    
    <a href="dashboard.php" class="home-link">Home</a>
 </nav>   
 
<style>
.dashboard-links {
    background: rgba(255, 255, 255, 0.7); 
}   
.nav {
    display: flex;
    align-items: center;
    background-color: #2c3e50;
    padding: 10px;
    font-family: sans-serif;
}

.home-link {
    position: absolute;
    top: 20px;         
    left: 50%;        
    transform: translateX(-50%);
    text-decoration: none;
    margin: 0;
    font-weight: bold;
    font-size: 18px;
    color: black;      
}

.home-link:hover {
    background-color: gray;
    color: lightcyan;
}
.logout {
    position: absolute;
    top: 20px;         
    right: 30px;       
    text-decoration: none;
    color: white;
    background-color: #ff4b2b; /* red color */
    padding: 8px 15px;
    border-radius: 5px;
    font-weight: bold;
    font-family: sans-serif;
    transition: background 0.3s;
}

.logout:hover {
    background-color: #ff1f1f; 
}
.result-card {
    background: white;
    width: 400px;
    margin: 20px auto;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    border-top: 5px solid #3498db; 
}
.result-card h3 {
    text-align: center;
    color: #5bb450;
    margin-top: 0;
    margin-bottom: 20px;
    padding-bottom: 10px;
}
.student-icon-img {
    display: block;        /* Image eka block ekak widiyata ganna */
    margin-left: auto;     
    margin-right: auto;    
    width: 100px;          
    height: auto;
    margin-bottom: 15px;   /* Text eka saha icon eka athara ida */
    border-radius: 50%;
    border: 3px solid #f0f0f0;
}

.info-item {
    display: flex;
    justify-content: space-between;
    padding: 8px 0;
    border-bottom: 1px thin #eee;
    text-align: left;
}

.label {
    font-weight: bold;
    color: #555;
    min-width: 80px;
}

.value {
    color: #333;
}

.value-highlight {
    color: #3498db; 
    font-weight: bold;
}

</style>