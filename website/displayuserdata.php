<?php require 'inc/header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-md">
            <!-- Left Side -->
            <img id="avatar" src="">
            <p id="fullName"></p>
            <p id="age"></p>
            <p id="gender"></p>
        </div>
        <div class="col-md-8">
            <!-- Right Side -->
            <p id="steps"></p>

            <h4>Badges:</h4>
            <img class="fitbit-badge" src="img/floors.png">
            <img class="fitbit-badge" src="img/miles.png">
            <img class="fitbit-badge" src="img/steps.png">
        </div>
    </div>
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