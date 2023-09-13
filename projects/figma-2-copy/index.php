<?php
// Site
// Theme
// Page 
// Theme
// Sections
// Module/Component
// Smaller sub-components

$page = 'home';
if ( isset($_GET['page']) ) {
	$page = $_GET['page'];
}

$json = file_get_contents('data/home.json');
$homePageData = json_decode($json, true);

?>

<?php 
	if ($page == 'home') {
		echo "Show sections";
	}
?>

<body class="<?=$page?>">

	<header>
		<inner-column>
			
			<nav>
				<ul>
					<li>
						<a href="?">Home</a>
					</li>
					<li>
						<a href="?page=about">About</a>
					</li>
					<li>
						<a href="?page=contact">Contact</a>
					</li>
				</ul>
			</nav>

		</inner-column>
	</header>


	<main>
		<?php foreach ($homePageData['sections'] as $section) { ?>
			<section class='<?=$section['theme']?> has-<?=$section['module']?>' id='<?=$section['id']?>'>
				<inner-column>

		<?php 
		if ($page == 'about') {

				if ($homePageData['theme'] == "default"){

		include("modules/$section[module].php"); 
		
			}
		}	
		if ($page == 'about') {

				if ($homePageData['theme'] == "wavy"){

		include("modules/$section[module].php"); 
		
			}

		}
		?>

				</inner-column>
			</section>
		<?php } ?>
	</main>


	<footer>
		<inner-column>
			footer stuff
		</inner-column>
	</footer>

</body>


<style>
	body.home {
		background: wheat;
	}

	body.about {
		background: white;
	}

	body.contact {
		background: dodgerblue;
	}

	.has-hero.dark {
		background-color: black;
		color: white;
	}
</style>
