

<?php
include "includes/header.php";
?>
       
<section class="portfolio">

<h2> MILLET PRODUCTS</h2>
<!-- <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <button class="btn" onclick="filterSelection('millet')"> Millet Grains</button>
    <button class="btn" onclick="filterSelection('spices')"> Pasta</button>
    <button class="btn" onclick="filterSelection('agro')">Noodles</button>
    <button class="btn" onclick="filterSelection('dried')">Quick Eats</button>
    <button class="btn" onclick="filterSelection('engg')">Spicy Crunchies</button>
    <button class="btn" onclick="filterSelection('muesli')">Cereals</button>
    <button class="btn" onclick="filterSelection('others')"> Other</button>
</div> -->

<!-- Portfolio Gallery Grid -->
<div class="row portfolio-row">
    <div class="column millet">
        <div class="content">
            <img src="img/home/milletgrains.jpg" alt="Mountains" style="width:100%">
            <a href="millets.php">
                <div class="middle">
                    <div class="text">Details...</div>
                </div>
            </a>
            <h4>Millet Grains</h4>
            <p>Ancient Grains..</p>
        </div>
    </div>
    <div class="column dried">
        <div class="content">
            <img src="img/home/freezedried.jpg" alt="dried" style="width:100%">
            <a href="construction.php">
                <div class="middle">
                    <div class="text">Details...</div>
                </div>
            </a>
            <h4>Millet Pasta</h4>
            <p>Nutrition in Modern Food..</p>
        </div>
    </div>

    <div class="column millet">
        <div class="content">
            <img src="img/home/milletproducts.jpg" alt="millet" style="width:100%">
            <a href="milletproducts.php">
                <div class="middle">
                    <div class="text">Details...</div>
                </div>
            </a>
            <h4>Millet Noodles</h4>
            <p>Favourite Food for all..</p>
        </div>
    </div>

    <div class="column others">
        <div class="content">
            <img src="img/home/ghee.jpg" alt="Car" style="width:100%">
            <a href="construction.php">
                <div class="middle">
                    <div class="text">Details...</div>
                </div>
            </a>
            <h4>Quick Bites</h4>
            <p>Nutrition in every bite..</p>
        </div>
    </div>
    <div class="column others">
        <div class="content">
            <img src="img/home/garbagebags.jpg" alt="Car" style="width:100%">
            <a href="construction.php">
                <div class="middle">
                    <div class="text">Details...</div>
                </div>
            </a>
            <h4>Spicy Crunchies</h4>
            <p>Flavorful bites..</p>
        </div>
    </div>
    <div class="column agro">
        <div class="content">
            <img src="img/home/mangopulp.jpg" alt="Car" style="width:100%">
            <a href="construction.php">
                <div class="middle">
                    <div class="text">Details...</div>
                </div>
            </a>
            <h4>Cereals</h4>
            <p>Start your day with Nutrition..</p>
        </div>
    </div>

    <div class="column agro">
        <div class="content">
            <img src="img/home/jaggery.jpg" alt="agro" style="width:100%">
            <a href="construction.php">
                <div class="middle">
                    <div class="text">Details...</div>
                </div>
            </a>
            <h4>Granola</h4>
            <p>Natural, yet powerful..</p>
        </div>
    </div>
    <div class="column agro">
        <div class="content">
            <img src="img/home/moringaproducts.jpg" alt="agro" style="width:100%">
            <a href="construction.php">
                <div class="middle">
                    <div class="text">Details...</div>
                </div>
            </a>
            <h4>Health bars</h4>
            <p>Power in Bar, Naturally..</p>
        </div>
    </div>
    <!-- <div class="column millet">
        <div class="content">
            <img src="img/home/milletflour.jpg" alt="Lights" style="width:100%">
            <div class="middle">
                <div class="text">John Doe</div>
            </div>
            <h4>Millet Flours</h4>
            <p>Lorem ipsum dolor..</p>
        </div>
    </div> -->
    <div class="column dried">
        <div class="content">
            <img src="img/home/dried.jpg" alt="dried" style="width:100%">
            <a href="construction.php">
                <div class="middle">
                    <div class="text">Details...</div>
                </div>
            </a>
            <h4>Others</h4>
            <p>All other super foods..</p>
        </div>
    </div>
  
    <!-- END GRID -->
</div>

</section> <!-- portfolio -->

        <?php
include "includes/footer.php";
?>