<?php
  //daily php code goes here 
include 'includes/config.php';
get_header();

if(isset($_GET['day']))
{//show selected day
    $day = $_GET['day'];

}else{//
    $day = date('l');
}

switch($day)
{
    case 'Monday':
        $coffee = 'White Mocha';
        $image = 'whiteMocha.jpg';
        $alt = 'white mocha';
        $color = '#F5DEB3';
        $description = 'sweeten up Monday!';
    break;
        
    case 'Tuesday':
        $coffee = 'Drip';
        $image = 'drip.jpg';
        $alt = 'drip';
        $color = '#8B4513';
        $description = 'it\'s hard to beat a classic!';
    break;
        
    case 'Wednesday':
        $coffee = 'Mocha';        
        $image = 'mocha.jpg';
        $alt = 'mocha';
        $color = '#A52A2A';
        $description = 'enjoy a mid-week mocha!';
    break;
        
    case 'Thursday':
        $coffee = 'Pumpkin Spice';
        $image = 'pumpkin-spice-latte.jpg';
        $alt = 'pumkin spice';
        $color = '#FF7518';
        $description = 'which makes us wish it was always Fall, as this is one of our top sellers!';
    break;
        
    case 'Friday':
        $coffee = 'Americano';
        $image = 'americano.jpg';
        $alt = 'americano';
        $color = '#A0522D';
        $description = 'simple but refined!';
    break;
               
    case 'Saturday':
        $coffee = 'Iced Coffee';
        $image = 'icedCoffee.jpg';
        $alt = 'Iced Coffee';
        $color = '#FFFF00';
        $description = 'chill out';
    break;
        
    case 'Sunday':
        $coffee = 'Cappucino';
        $image = 'cappuccino.jpg';
        $alt = 'cappucino';
        $color = '#000';
        $description = 'foamy!';
    
    break;
    
    default:
        $coffee = 'Drip';
        $image = 'drip.jpg';
        $alt = 'drip';
        $color = '#8B4513';
        $description = 'it\'s hard to beat a classic!';
    break;
        
}
    
?>



<h3>Daily</h3>
<p>The contents of day is currently: <?=$day?></p>
<p><a href="?day=Monday">Monday</a></p>
<p><a href="?day=Tuesday">Tuesday</a></p>
<p><a href="?day=Wednesday">Wednsday</a></p>
<p><a href="?day=Thursday">Thursday</a></p>
<p><a href="?day=Friday">Friday</a></p>
<p><a href="?day=Saturday">Saturday</a></p>
<p><a href="?day=Sunday">Sunday</a></p>

 <main>
		 <header><h3 class="slogan">You drink our coffee, we make large bucks!</h3></header>
        <p>
    		 <img src="images/<?=$image?>" alt="Our <?=$alt?> tastes great on a Fall Day!" id="coffee" />
            <strong class="feature"><?=$day?> Coffee Special:</strong> <?=$day?> daily coffee special is <strong class="feature"><?=$coffee?></strong> <?=$description?></p>
        <p><span class="feature"><?=$coffee?> </span>is Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical.</p>
        <p><span class="feature">Enjoy <?=$coffee?> with our </span> Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin.</p>
		 <p>
		 <b>At LargeBuck$ we aspire to: </b>Aesthetic gentrify YOLO McSweeney's typewriter single-origin coffee. Slow-carb hella listicle lomo, Helvetica single-origin coffee butcher stumptown. Chambray try-hard church-key mumblecore, tote bag PBR cardigan. Retro Austin Brooklyn, blog Intelligentsia gentrify jean shorts sartorial bicycle rights gastropub. Aesthetic wayfarers Pitchfork, tattooed Carles quinoa meh leggings distillery pork belly banjo. Umami cred lumbersexual skateboard, pork belly Tumblr vegan letterpress. Fixie bicycle rights butcher chillwave, gluten-free health goth Echo Park locavore whatever.

		 </p>
		<p>
		Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical. Biodiesel VHS Godard High Life, tousled Banksy craft beer. Mlkshk direct trade locavore, mumblecore keytar artisan hashtag fap. Cred cronut Brooklyn, locavore art party small batch PBR semiotics ennui kitsch taxidermy mlkshk stumptown.
		</p>
		<p>
		Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin. Etsy Wes Anderson 8-bit retro, polaroid synth paleo banh mi before they sold out Vice. Bushwick fap Intelligentsia, whatever Etsy High Life Kickstarter migas retro Banksy YOLO Carles yr raw denim. Gluten-free fixie taxidermy pop-up, actually Kickstarter flannel put a bird on it master cleanse.
		</p>
		<p>
		Text provided by <a href="http://hipsum.co/" target="_blank">Hipster Ipsum</a>
		</p>
     </main>




    <?php get_footer()?>