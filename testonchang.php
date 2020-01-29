<!DOCTYPE html>
<html>
<body>

<p>Select a new car from the list.</p>

<select id="mySelect" onchange="myFunction()">
  <option value="Audi">Audi</option>
  <option value="BMW">BMW</option>
  <option value="Mercedes">Mercedes</option>
  <option value="Volvo">Volvo</option>
</select>


<p>Select a thing</p>
<select  id="mySelect2" onchange="myFunction()">
	  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>

<p>When you select a new car, a function is triggered which outputs the value of the selected car.</p>

<p id="demo"></p>

<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  //var x = document.getElementById("mySelect2").value;
  document.getElementById("demo").innerHTML = "You selected: " + x;
}
</script>

</body>
</html>

