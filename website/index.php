<?php require 'inc/header.php'; ?>




<a href="https://www.fitbit.com/oauth2/authorize?response_type=token&client_id=22D2P8&redirect_uri=http%3A%2F%2Ffitcause-env-1.pvtvmgyr9v.us-east-1.elasticbeanstalk.com%2Fwebsite%2F&scope=activity%20heartrate%20location%20nutrition%20profile%20settings%20sleep%20social%20weight&expires_in=604800">Login</a>



<div id="username"></div>

<div class="container brands">
    <div class="row">
        <div class="col-md brand">
            <img src="img/abta.png" alt="American Brain Tumor Association" class="brandThumbnail">
            <h2 class="brandName">American Brain Tumor Association</h2>
            <p class="brandDescription">The American Brain Tumor Association is the only national nonprofit organization in the United States dedicated to providing support services and programs to brain tumor patients and their families, as well as the funding of brain tumor research.</p>
            <div class="btn-group">
                <a href="http://www.abta.org/" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a> 
            </div>
        </div>
        <div class="col-md brand">
            <img src="img/als.png" alt="ALS Association" class="brandThumbnail">
            <h2 class="brandName">ALS Association</h2>
            <p class="brandDescription">The ALS Association is the only national non-profit organization fighting Lou Gehrig’s Disease on every front.</p>
            <div class="btn-group">
                <a href="http://www.alsa.org" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a> 
            </div>
        </div>
        <div class="col-md brand">
            <img src="img/codeorg.png" alt="Code.org" class="brandThumbnail">
            <h2 class="brandName">Code.org</h2>
            <p class="brandDescription">The American Brain Tumor Association is the only national nonprofit organization in the United States dedicated to providing support services and programs to brain tumor patients and their families, as well as the funding of brain tumor research.</p>
            <div class="btn-group">
                <a href="http://www.code.org" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
            </div>
        </div>
    </div> <!-- End of row-->

    <div class="row">
            <div class="col-md brand">
                <img src="img/autismspeaks.png" alt="Autism Speaks" class="brandThumbnail">
                <h2 class="brandName">Autism Speaks</h2>
                <p class="brandDescription">Autism Speaks is dedicated to promoting solutions, across the spectrum and throughout the life span, for the needs of individuals with autism and their families through advocacy and support; increasing understanding and acceptance of people with autism spectrum disorder; and advancing research into causes and better interventions for autism spectrum disorder and related conditions.</p>
                <div class="btn-group">
                    <a href="http://www.autismspeaks.org" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a> 
                </div>
            </div>
            <div class="col-md brand">
                <img src="img/zoo.png" alt="Detroit Zoological Society" class="brandThumbnail">
                <h2 class="brandName">Detroit Zoological Society</h2>
                <p class="brandDescription">The Detroit Zoological Society is a renowned leader in humane education, wildlife conservation, animal welfare and environmental sustainability.</p>
                <div class="btn-group">
                    <a href="http://www.detroitzoo.com" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a> 
                </div>
            </div>
            <div class="col-md brand">
            </div>
        </div> <!-- End of row-->

</div> <!-- End of container -->

<!-- Start the footer -->
<?php include('inc/footer.php'); ?>


<script>
// get the url
var url = window.location.href;

console.log(url);

//getting the access token from url
var access_token = url.split("#")[1].split("=")[1].split("&")[0];

// get the userid
var userId = url.split("#")[1].split("=")[2].split("&")[0];

console.log("access token");
console.log(access_token);
console.log("user id");
console.log(userId);

var xhr = new XMLHttpRequest();
xhr.open('GET', 'https://api.fitbit.com/1/user/'+ userId +'/profile.json');
xhr.setRequestHeader("Authorization", 'Bearer ' + access_token);
xhr.onload = function() {
   if (xhr.status === 200) {
    var response = JSON.parse(xhr.responseText);
    var userId = response.user.fullName;
      console.log("user name " + userId);
      document.getElementById("username").innerHTML = "Welcome " + userId + "!";
      //document.write(xhr.responseText);
         }
};
xhr.send();
//console.log(xhr.responseText.user.fullName);

</script>



</body>
</html>