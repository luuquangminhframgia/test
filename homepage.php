<?php
/* Template Name: Homepage */

get_header();
?>

<div id="main" class="homepage">
	<h1>This is page to learning Flexbox CSS3</h1>

	<h3>Direction items</h3>
	<div class="d-flex flex-row">
		<div class="p-2">Flex item 1</div>
		<div class="p-2">Flex item 2</div>
		<div class="p-2">Flex item 3</div>
	</div>
	<div class="d-flex flex-row-reverse">
		<div class="p-2">Flex item 1</div>
		<div class="p-2">Flex item 2</div>
		<div class="p-2">Flex item 3</div>
	</div>

	<h3>Column reverse</h3>
	<div class="d-flex flex-column">
		<div class="p-2">Flex item 1</div>
		<div class="p-2">Flex item 2</div>
		<div class="p-2">Flex item 3</div>
	</div>
	<div class="d-flex flex-column-reverse">
		<div class="p-2">Flex item 1</div>
		<div class="p-2">Flex item 2</div>
		<div class="p-2">Flex item 3</div>
	</div>


	<h3>Justify Content</h3>
	<div class="bd-example">
		<div class="d-flex justify-content-start bd-highlight mb-3">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex justify-content-end bd-highlight mb-3">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex justify-content-between bd-highlight mb-3">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex justify-content-around bd-highlight">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
	</div>

	<h3>Align Items</h3>
	<div class="bd-example">
		<div class="d-flex align-items-start bd-highlight mb-3" style="height: 100px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex align-items-end bd-highlight mb-3" style="height: 100px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex align-items-center bd-highlight mb-3" style="height: 100px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex align-items-baseline bd-highlight mb-3" style="height: 100px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex align-items-stretch bd-highlight" style="height: 100px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
	</div>


	<h3>Align self</h3>
	<div class="bd-example">
		<div class="d-flex bd-highlight mb-3" style="height: 100px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="align-self-start p-2 bd-highlight">Aligned flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex bd-highlight mb-3" style="height: 100px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="align-self-end p-2 bd-highlight">Aligned flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex bd-highlight mb-3" style="height: 100px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="align-self-center p-2 bd-highlight">Aligned flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex bd-highlight mb-3" style="height: 100px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="align-self-baseline p-2 bd-highlight">Aligned flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
		<div class="d-flex bd-highlight" style="height: 100px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="align-self-stretch p-2 bd-highlight">Aligned flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
	</div>

	<h3>Auto margins</h3>
	<div class="bd-example" data-example-id="">
		<div class="d-flex justify-content-end bd-highlight mb-3">
			<div class="mr-auto p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>

		<div class="d-flex justify-content-start bd-highlight">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="ml-auto p-2 bd-highlight">Flex item</div>
		</div>
	</div>

	<h3>With align-items</h3>
	<div class="bd-example" data-example-id="">
		<div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
			<div class="mb-auto p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>

		<div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="mt-auto p-2 bd-highlight">Flex item</div>
		</div>
	</div>

	<h3>Wrap</h3>
	<div class="bd-example">
		<div class="d-flex flex-nowrap bd-highlight">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
	</div>
	<div class="bd-example">
		<div class="d-flex flex-wrap bd-highlight">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
	</div>

	<h3>Order</h3>
	<div class="bd-example" data-example-id="">
		<div class="d-flex flex-nowrap bd-highlight">
			<div class="flex-last p-2 bd-highlight">First flex item</div>
			<div class="p-2 bd-highlight">Second flex item</div>
			<div class="flex-first p-2 bd-highlight">Third flex item</div>
		</div>
	</div>

	<h3>Align content</h3>
	<div class="bd-example">
		<div class="d-flex align-content-start flex-wrap bd-highlight mb-3" style="height: 200px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
	</div>
	<div class="bd-example">
		<div class="d-flex align-content-end flex-wrap bd-highlight mb-3" style="height: 200px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
	</div>
	<div class="bd-example">
		<div class="d-flex align-content-center flex-wrap bd-highlight mb-3" style="height: 200px">
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
			<div class="p-2 bd-highlight">Flex item</div>
		</div>
	</div>

	<hr style="margin-bottom: 50px" />
</div>

<?php
get_footer();
