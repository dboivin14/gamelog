<?php include 'index.html'; ?>

<!DOCTYPE html>
<html>
<head>
<style>
.test {
  display: flex;
  flex-direction: row;
}  
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  display: flex;
  flex-direction: column;
}

.rating {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Games</h2>

<div class="test">

  <div class="card">
    <img src="images/dredge.png" alt="dredge" style="width:100%">
    <h1>Dredge</h1>
    <p class="rating">9.4</p>
    <p>Some text about Dredge.</p>
    <p><button>Open Game</button></p>
  </div>

  <div class="card">
    <img src="images/hifi.png" alt="hifi" style="width:100%">
    <h1>Hi-Fi Rush</h1>
    <p class="rating">9.0</p>
    <p>Some text about Hi-Fi Rush.</p>
    <p><button>Open Game</button></p>
  </div>
</div>
  
<div class="test">  
  <div class="card">
    <img src="images/metroidprime.png" alt="metroidprime" style="width:100%">
    <h1>Metroid Prime Remastered</h1>
    <p class="rating">9.4</p>
    <p>Some text about Metroid Prime Remastered.</p>
    <p><button>Open Game</button></p>
  </div>

  <div class="card">
    <img src="images/hogwarts.png" alt="hogwarts" style="width:100%">
    <h1>Hogwarts Legacy</h1>
    <p class="rating">8.8</p>
    <p>Some text about Hogwarts Legacy.</p>
    <p><button>Open Game</button></p>
  </div>
</div>
  
<div class="test"> 
  <div class="card">
    <img src="images/deadspace.png" alt="deadspace" style="width:100%">
    <h1>Dead Space</h1>
    <p class="rating">8.8</p>
    <p>Some text about Dead Space.</p>
    <p><button>Open Game</button></p>
  </div>

  <div class="card">
    <img src="images/p4.png" alt="p4" style="width:100%">
    <h1>Persona 4 Golden</h1>
    <p class="rating">9.4</p>
    <p>Some text about Persona 4 Golden.</p>
    <p><button>Open Game</button></p>
  </div>
</div>
  
<div class="test"> 
  <div class="card">
    <img src="images/kirbydreamland.png" alt="kirbydreamland" style="width:100%">
    <h1>Kirby's Return to Dream Land Deluxe</h1>
    <p class="rating">8.7</p>
    <p>Some text about Kirby's Return to Dream Land Deluxe.</p>
    <p><button>Open Game</button></p>
  </div>

  <div class="card">
    <img src="images/wildhearts.png" alt="wildhearts" style="width:100%">
    <h1>Wild Hearts</h1>
    <p class="rating">9.4</p>
    <p>Some text about Wild Hearts.</p>
    <p><button>Open Game</button></p>
  </div>
</div>
</body>
</html>

