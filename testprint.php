<style type="text/css"> 
@import url(https://fonts.googleapis.com/css?family=Lato);
@media print 

{ 
#non-printable { display: none; } 
#printable { display: block; } 
} 


body {
  display: flex;
  height: 100vh;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: #222;
}

ul {
  display: flex;
  flex-direction: column;
  align-items: start;
  list-style-type: none;

  li {
    padding: 6px 0;

    a {
      position: relative;
      display: block;
      text-decoration: none;
      font-family: "Lato";
      color: #ecf0f1;
      text-transform: uppercase;
      padding: 4px 0;
      transition: 0.5s;

      &::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 3px;
        top: 100%;
        left: 0;
        background: #3498db;
        transition: transform 0.5s;
        transform: scaleX(0);
        transform-origin: right;
      }

      &:hover {
        color: #95a5a6;
      }

      &:hover::after {
        transform: scaleX(1);
        transform-origin: left;
      }
    }
  }
}

</style> 

</head>

<body>
<form name="frmMain" action="" method="post">

<div id="non-printable"> 
<font color="red">
This text no print. This text no print. This text no print. This text no print. <br>
This text no print. This text no print. This text no print. This text no print. <br>
This text no print. This text no print. This text no print. This text no print. <br>
This text no print. This text no print. This text no print. This text no print. <br>
</font>
</div> 

<hr>

<div id="printable"> 
<font color="green">
This text  print. This text  print. This text  print. This text  print. <br>
This text  print. This text  print. This text  print. This text  print. <br>
This text  print. This text  print. This text  print. This text  print. <br>
This text  print. This text  print. This text  print. This text  print. <br>
<font>
</div> 

</form>

<ul>
  <li><a href="#">home</a></li>
  <li><a href="#">archives</a></li>
  <li><a href="#">tags</a></li>
  <li><a href="#">categories</a></li>
  <li><a href="#">about</a></li>
</ul>