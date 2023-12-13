<div id="home-wrapper">
    <h1>Calgary Wellness</h1>

    <ul class="thumbs">
        <li id="thumb-1" class="thumb-active" onClick="thumbClicked('thumb-1')"><a href="#slide-1"><span>Benefits</span></a></li>
        <li id="thumb-2" onClick="thumbClicked('thumb-2')"><a href="#slide-2"><span>Routines</span></a></li>
        <li id="thumb-3" onClick="thumbClicked('thumb-3')"><a href="#slide-3"><span>Recipes</span></a></li>
        <li id="thumb-4" onClick="thumbClicked('thumb-4')"><a href="#slide-4"><span>Stress relief</span></a></li>
        <li id="thumb-5" onClick="thumbClicked('thumb-5')"><a href="#slide-5"><span>Social</span></a></li>
    </ul>
    <ul class="slides">
        <li id="slide-1">
            <img src="images/benefit.jpg">
            <div class="slide-content">
                <h2>Your path to Well-Being</h2>
                <ul>
                    <li>Follow personalized wellness routines</li>
                    <li>Discover healthy recipes and meal plans</li>
                    <li>Relieve stress with guided meditation and relaxation techniques</li>
                    <li>Connect with others in our supportive community</li>
                </ul>
            </div>
        </li>
        <li id="slide-2">
            <img src="images/routine.jpg">
            <div class="slide-content">
                <h2>Personalized Routines</h2>
                <p>Our app provides customized wellness routines based on your needs and preferences. Whether it's morning stretches, mindfulness exercises, or bedtime rituals, we've got you covered.</p>
            </div>
        </li>
        <li id="slide-3">
            <img src="images/recipe.jpg">
            <div class="slide-content">
                <h2>Healthy Recipes</h2>
                <p>Explore a collection of nutritious recipes that promote overall well-being. From smoothies to hearty meals, our app offers tasty options for every palate.</p>
            </div>
        </li>
        <li id="slide-4">
            <img src="images/relief.jpg">
            <div class="slide-content">
                <h2>Stress Relief</h2>
                <p>Feeling overwhelmed? Our stress-relief section includes calming techniques, breathing exercises, and soothing music to help you unwind and find balance.</p>
            </div>
        </li>
        <li id="slide-5">
            <img src="images/social.jpg">
            <div class="slide-content">
                <h2>Community Connection</h2>
                <p>Join our friendly community! Share your wellness journey, connect with others, and find inspiration. Together, we can thrive.</p>
            </div>
        </li>
    </ul>
    <footer>
        <p>&copy; 2023 Calgary Wellness</p>
    </footer>
</div>

<script>
    function thumbClicked(id) {
        console.log(id)
        // Remove others items with class
        var items = document.querySelectorAll('.thumb-active');
        items.forEach(function(item) {
            item.classList.remove('thumb-active');
        });

        // Add class to current item
        var element = document.getElementById(id);
        if (element) {
            element.classList.add("thumb-active");
        }
    }
</script>