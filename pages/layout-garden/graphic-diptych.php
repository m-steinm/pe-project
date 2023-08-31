<style>
	graphic-diptych {
	display: block;
	display: grid;
	gap: 30px;
   width: 400px;
	height: 500px;

}

	graphic-diptych .graphic {
	background-color: black;
	aspect-ration; 3 / 2;
}

	graphic-diptych .content {
	padding: 20px;
}

@media(min-width: 600px){
	grid-template-columns: 1fr 1fr;
}
</style>

<graphic-diptych>
	
	<div class="graphic">
		graphic
	</div>

	<div class="content">
		content
	</div>

</graphic-diptych> 