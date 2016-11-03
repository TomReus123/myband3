<div class="wrapper">
	<div id="berichten">
	<h1>De licor 43 bus:</h1>
	<h3>In de eerste 10 weken van 2017 zal er een echte licor 43 bus door Nederland touren.<br>
	Deze bus deelt gratis samples uit van de nieuwste en lekkerste cocktails van licor 43!<br>
	Kijk in het onderstaande schema wanneer de bus bij jou in de buurt staat!</h3>
	<hr>
	<section>
		{foreach from=$result item=oneItem}
			<h1>Week {$oneItem.id}</h1>
			<content>{$oneItem.content}</content><br>
			<content>{$oneItem.image}</content><br>
			<h3>{$oneItem.date_created}</h3>
			<hr>
		{/foreach}
	</section>
	<span><a id="terugKnop">&#8593;</a></span>
</div>