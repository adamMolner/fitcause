
<?php require 'inc/header.php'; ?>




<div>
<img id="avatar" src="">
<p id="fullName"></p>
<p id="age"></p>
<p id="gender"></p>
</div>

<div>
<p id="steps"></p>



<h4>Badges:</h4>
<img src="img/floors.png">
<img src="img/miles.png">
<img src="img/steps.png">
</div>

<script>

function getData(){

var storedNames = JSON.parse(localStorage.getItem("data"));



console.log(storedNames);


var userId = storedNames.user.fullName;
document.getElementById('fullName').innerHTML = "Name: " + userId;
document.getElementById('loginLink').style.display = 'none';
console.log("user name" + userId);
var avi = storedNames.user.avatar150;
console.log(avi);
var gender = storedNames.user.gender;
document.getElementById('gender').innerHTML = "Gender: " + gender;
document.getElementById('avatar').src = avi;
var age = storedNames.user.age;
document.getElementById('age').innerHTML = "Age: " + age;
var steps = storedNames.user.averageDailySteps;
document.getElementById('steps').innerHTML = "Average Daily Steps: " + steps;
}

window.onload = getData;

</script>


<?php include('inc/footer.php'); ?>




</body>
</html>