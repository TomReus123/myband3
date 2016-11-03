<div class="wrapper">
	<div id="berichten">
	<h1>De rijke geschiedenis van Licor 43:</h1>
	<hr>
	<section>
		{foreach from=$result item=oneItem}
			<h1>{$oneItem.title}</h1>
			<content>{$oneItem.content}</content><br>
			<img src=image/{$oneItem.image}>
			<hr>
		{/foreach}
	</section>
	<span><a id="terugKnop">&#8593;</a></span>
</div>