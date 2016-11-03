<div class="wrapper">
	<div id="berichten">
	<h1>Nieuws over Licor 43:</h1>
	<input type="search" placeholder="Zoeken...">
	<section>
		{foreach from=$result item=oneItem}
			<h1>{$oneItem.title}</h1>
			<content>{$oneItem.content}</content><br>
			<img src=image/{$oneItem.image}>
			<h3>{$oneItem.date_created}</h3>
			<hr>
		{/foreach}
	</section>
	<div class="next_page">
		<ul>
			{for $i=1 to $nr_pages}
				<li><a href="?action=home&page_nr={$i}#berichten">{$i}</a></li>
			{/for}
		</ul>
	</div>
	</div>
	<span><a id="terugKnop">&#8593;</a></span>
</div>