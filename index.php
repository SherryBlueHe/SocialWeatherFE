<style>


h1{
    color: black;
}

#overlay{
    background-color: white;
    margin-right: 10%;
    margin-left:10%;
}
#logo{
    width:100%;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
    z-index: 4;
}

.dropdown:hover .dropdown-content {
    display: none;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<title>Social Weather</title>
<body bgcolor="#D0D0D0">

<div id="overlay">

<img src="home.jpg" id="logo">

<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">Terrorism</a>
  <a href="#news">World Bank Data</a>
  <a href="#news">Stocks</a>
  <a href="#news">Happiness</a>
  <a href="#news">Internet Usage</a>
</div>
<div>
<h3>
  Different attacks over the years
  <small class="text-muted">With a brief summary</small>
</h3>
</div>
<iframe src="http://localhost:3000/dashboard-solo/db/new-dashboard-copy?panelId=1&orgId=1&tab=general&from=-315601200000&to=1522702264565&theme=light" width="100%" height="100%" frameborder="0"></iframe>
<h3></h3>
<h3>
  Want to see the geohashed values of this?
  <small class="text-muted"><input type="button" value="Click here"></small>
</h3>
<iframe src="http://localhost:3000/dashboard-solo/db/new-dashboard-copy?panelId=2&orgId=1&tab=general&from=-315601200000&to=1522702264565&theme=light" width="100%" height="100%" frameborder="0"></iframe>
</div>
