<?php require 'inc/header.php'; ?>

<div class="container brands">
    <div class="row">
        <div class="col-md brand">
            <img src="img/abta.png" alt="American Brain Tumor Association" class="brandThumbnail">
            <h2 class="brandName">American Brain Tumor Association</h2>
            <p class="brandDescription">The American Brain Tumor Association is the only national nonprofit organization in the United States dedicated to providing support services and programs to brain tumor patients and their families, as well as the funding of brain tumor research.</p>
            <div class="btn-group">
                <a href="facetemplate.php?id=1"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a> 
            </div>
        </div>
        <div class="col-md brand">
            <img src="img/als.png" alt="ALS Association" class="brandThumbnail">
            <h2 class="brandName">ALS Association</h2>
            <p class="brandDescription">The ALS Association is the only national non-profit organization fighting Lou Gehrig’s Disease on every front.</p>
            <div class="btn-group">
                <a href="facetemplate.php?id=2"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a> 
            </div>
        </div>
        <div class="col-md brand">
            <img src="img/codeorg.png" alt="Code.org" class="brandThumbnail">
            <h2 class="brandName">Code.org</h2>
            <p class="brandDescription">Code.org is a non-profit organization that aims to encourage people, particularly school students in the United States, to learn computer science.</p>
            <div class="btn-group">
                <a href="facetemplate.php?id=3"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
            </div>
        </div>
    </div> <!-- End of row-->

    <div class="row">
            <div class="col-md brand">
                <img src="img/autismspeaks.png" alt="Autism Speaks" class="brandThumbnail">
                <h2 class="brandName">Autism Speaks</h2>
                <p class="brandDescription">Autism Speaks is dedicated to promoting solutions, across the spectrum and throughout the life span, for the needs of individuals with autism and their families through advocacy and support; increasing understanding and acceptance of people with autism spectrum disorder; and advancing research into causes and better interventions for autism spectrum disorder and related conditions.</p>
                <div class="btn-group">
                    <a href="facetemplate.php?id=4"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a> 
                </div>
            </div>
            <div class="col-md brand">
                <img src="img/zoo.png" alt="Detroit Zoological Society" class="brandThumbnail">
                <h2 class="brandName">Detroit Zoological Society</h2>
                <p class="brandDescription">The Detroit Zoological Society is a renowned leader in humane education, wildlife conservation, animal welfare and environmental sustainability.</p>
                <div class="btn-group">
                    <a href="facetemplate.php?id=5"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a> 
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
//getting the access token from url
var access_token = url.split("#")[1].split("=")[1].split("&")[0];
// get the userid
var userId = url.split("#")[1].split("=")[2].split("&")[0];
var xhr = new XMLHttpRequest();
xhr.open('GET', 'https://api.fitbit.com/1/user/'+ userId +'/profile.json');
xhr.setRequestHeader("Authorization", 'Bearer ' + access_token);
xhr.onload = function() {
   if (xhr.status === 200) {
    var response = JSON.parse(xhr.responseText);
    var userId = response.user.fullName;
      document.getElementById("loginLink").innerHTML = "<p class='navbar-brand'>Welcome " + userId + "!</p>";
    }
};
xhr.send();
</script>



</body>
</html>