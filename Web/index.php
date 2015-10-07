<!doctype html>
<html lang="de">
<head>
	<?php include('_head.php'); ?>
</head>
<body>
<div class="container">

	<h1>Demo-Seite <small>Contains all common elements</small></h1>
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default">
				<div class="container">
					<ul class="nav navbar-nav">
						<li role="presentation"><a href="#text-styles">Text-Styles</a></li>
						<li role="presentation"><a href="#lists">Listen</a></li>
						<li role="presentation"><a href="#images">Images</a></li>
						<li role="presentation"><a href="#media">Media</a></li>
						<li role="presentation"><a href="#buttons">Buttons</a></li>
						<li role="presentation"><a href="#listgroups">Listgroups</a></li>
						<li role="presentation"><a href="#tables">Tabellen</a></li>
						<li role="presentation"><a href="#tooltips">Tooltips</a></li>
						<li role="presentation"><a href="#breadcrumb">Breadcrumb</a></li>
						<li role="presentation"><a href="#pagination">Pagination</a></li>
						<li role="presentation"><a href="#tabs">Tabs</a></li>
						<li role="presentation"><a href="#collapsible">Collapsible</a></li>
						<li role="presentation"><a href="#panels">Panels</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<!-- TEXT-STYLES -->
	<div id="text-styles">
		<div class="row">
			<div class="col-md-12">
				<h2>Text-Styles</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<h3>Headings</h3>
				<h1>h1. Heading 1 <small>Secondary text</small></h1>
				<h2>h2. Heading 2 <small>Secondary text</small></h2>
				<h3>h3. Heading 3 <small>Secondary text</small></h3>
				<h4>h4. Heading 4 <small>Secondary text</small></h4>
				<h5>h5. Heading 5 <small>Secondary text</small></h5>
				<h6>h6. Heading 6 <small>Secondary text</small></h6>
			</div>
			<div class="col-md-6">
				<h3>Paragraph Examples</h3>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus.</p>
				<p><strong>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque.</strong></p>
				<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut repellat.</p>
				<p><em>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.</em></p>
				<p><small>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</small></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
				<h3>Emphasis Classes</h3>
				<p class="muted">Muted Text Information</p>
				<p class="text-primary">Primary Text Information</p>
				<p class="text-notice">Notice Text Information</p>
				<p class="text-info">Info Text Information</p>
				<p class="text-success">Success Text Information</p>
				<p class="text-warning">Warning Text Information</p>
				<p class="text-danger">Danger Text Information</p>
			</div>
			<div class="col-md-3">
				<h3>Address</h3>
				<address>
					<strong>Twitter, Inc.</strong><br>
					795 Folsom Ave, Suite 600<br>
					San Francisco, CA 94107<br>
					<abbr title="Phone">P:</abbr> (123) 456-7890
				</address>
				<address>
					<strong>Full Name</strong><br>
					<a href="mailto:#">first.last@example.com</a>
				</address>
			</div>
			<div class="col-md-6">
				<h3>Misc Collection</h3>
				<p>Lorem Ipsum is simply dummy text and <a href="#">here is a link example.</a></p>
				<p><del>Use a tag del lorem Ipsum is simply dummy text</del></p>
				<p>Some <sup>sup example</sup> and some more <sub>sub example</sub></p>
				<p><abbr title="attribute">attr distribution</abbr> of letters as opposed <abbr title="attribute">attr</abbr> to using</p>
				<p><span style="text-decoration: underline;">Use a tag span lorem Ipsum is simply dummy text</span></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h3>Blockquote-Examples</h3>
			</div>
			<div class="col-md-6">
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				</blockquote>
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>
			</div>
			<div class="col-md-6">
				<blockquote class="blockquote-reverse">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- LIST-STYLES -->
	<div id="lists">
		<div class="row">
			<div class="col-md-12">
				<h2>Listen</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<h3>Description</h3>
				<dl>
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
				</dl>
			</div>
			<div class="col-md-6">
				<h3>Horizontal Description</h3>
				<dl class="dl-horizontal">
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
					<dt>Felis euismod semper eget lacinia</dt>
					<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum</dd>
				</dl>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<h3>Unordered Lists</h3>
				<ul>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
						<ul>
							<li>Phasellus iaculis neque</li>
							<li>Purus sodales ultricies</li>
							<li>Vestibulum laoreet porttitor</li>
							<li>Ac tristique libero volutpat at</li>
						</ul>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h3>Unstyled Lists</h3>
				<ul class="list-unstyled">
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
						<ul>
							<li>Phasellus iaculis neque</li>
							<li>Purus sodales ultricies</li>
							<li>Vestibulum laoreet porttitor sem</li>
							<li>Ac tristique libero volutpat at</li>
						</ul>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h3>Ordered Lists</h3>
				<ol>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
						<ol>
							<li>Phasellus iaculis neque</li>
							<li>Purus sodales ultricies</li>
							<li>Vestibulum laoreet porttitor</li>
							<li>Ac tristique libero volutpat at</li>
						</ol>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h3>Inline Lists</h3>
				<ul class="list-inline">
					<li>1. <a href="#">Home</a></li>
					<li>2. <a href="#">About</a></li>
					<li>3. <a href="#">Services</a></li>
					<li>4. <a href="#">Work</a></li>
					<li>5. <a href="#">Blog</a></li>
					<li>6. <a href="#">Portfolio</a></li>
					<li>7. <a href="#">Contacts</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- IMAGE-STYLES -->
	<div id="images">
		<div class="row">
			<div class="col-md-12">
				<h2>Images</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h3>Image in text left</h3>
				<div class="clearfix">
					<img class="thumbnail pull-left img-responsive" src="http://lorempixel.com/300/200/business/">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at aut dolore earum illo impedit perferendis suscipit? A, aperiam asperiores autem culpa, delectus deserunt doloribus, explicabo facilis labore laboriosam mollitia quisquam voluptatibus? Adipisci doloremque eaque earum enim fuga ipsam modi, perspiciatis porro possimus provident quia quo, sapiente suscipit ullam voluptatem. Impedit minima nostrum quae repellat saepe. Accusamus, distinctio ducimus eaque eius et illo laborum, libero magni modi obcaecati officiis quibusdam repudiandae similique tenetur ullam unde velit voluptatem. Excepturi, quam, voluptas!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at aut dolore earum illo impedit perferendis suscipit? A, aperiam asperiores autem culpa, delectus deserunt doloribus, explicabo facilis labore laboriosam mollitia quisquam voluptatibus? Adipisci doloremque eaque earum enim fuga ipsam modi, perspiciatis porro possimus provident quia quo, sapiente suscipit ullam voluptatem. Impedit minima nostrum quae repellat saepe. Accusamus, distinctio ducimus eaque eius et illo laborum, libero magni modi obcaecati officiis quibusdam repudiandae similique tenetur ullam unde velit voluptatem. Excepturi, quam, voluptas!</p>
				</div>
				<h3>Image in text right</h3>
				<div class="clearfix">
					<img class="thumbnail pull-right img-responsive" src="http://lorempixel.com/300/200/business/">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at aut dolore earum illo impedit perferendis suscipit? A, aperiam asperiores autem culpa, delectus deserunt doloribus, explicabo facilis labore laboriosam mollitia quisquam voluptatibus? Adipisci doloremque eaque earum enim fuga ipsam modi, perspiciatis porro possimus provident quia quo, sapiente suscipit ullam voluptatem. Impedit minima nostrum quae repellat saepe. Accusamus, distinctio ducimus eaque eius et illo laborum, libero magni modi obcaecati officiis quibusdam repudiandae similique tenetur ullam unde velit voluptatem. Excepturi, quam, voluptas!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at aut dolore earum illo impedit perferendis suscipit? A, aperiam asperiores autem culpa, delectus deserunt doloribus, explicabo facilis labore laboriosam mollitia quisquam voluptatibus? Adipisci doloremque eaque earum enim fuga ipsam modi, perspiciatis porro possimus provident quia quo, sapiente suscipit ullam voluptatem. Impedit minima nostrum quae repellat saepe. Accusamus, distinctio ducimus eaque eius et illo laborum, libero magni modi obcaecati officiis quibusdam repudiandae similique tenetur ullam unde velit voluptatem. Excepturi, quam, voluptas!</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- MEDIA-STYLES -->
	<div id="media">
		<div class="row">
			<div class="col-md-12">
				<h2>Media</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h3>Media default</h3>
				<div>
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTlmMzk1MiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWYzOTUyIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>
							Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTllZTJjMSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWVlMmMxIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>
							Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
							<div class="media">
								<div class="media-left">
									<a href="#">
										<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTlmMDdjOSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWYwN2M5Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
									</a>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Nested media heading</h4>
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
								</div>
							</div>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>
							Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
						</div>
						<div class="media-right">
							<a href="#">
								<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTlmMzYyMSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWYzNjIxIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
							</a>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTllZmQzNSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWVmZDM1Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>
							Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
						</div>
						<div class="media-right">
							<a href="#">
								<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTllZjMwYyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWVmMzBjIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h3>Media alignment</h3>
				<div>
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTllZTdiOSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWVlN2I5Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Top aligned media</h4>
							<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
							<p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>
					<div class="media">
						<div class="media-left media-middle">
							<a href="#">
								<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTllZjUxMyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWVmNTEzIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Middle aligned media</h4>
							<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
							<p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>
					<div class="media">
						<div class="media-left media-bottom">
							<a href="#">
								<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTllZWE3ZiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWVlYTdmIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Bottom aligned media</h4>
							<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
							<p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h3>Media alignment</h3>
				<div>
					<ul class="media-list">
						<li class="media">
							<div class="media-left">
								<a href="#">
									<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTlmMGE3MCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWYwYTcwIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
								</a>
							</div>
							<div class="media-body">
								<h4 class="media-heading">Media heading</h4>
								<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
								<!-- Nested media object -->
								<div class="media">
									<div class="media-left">
										<a href="#">
											<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTlmMGQ1ZiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWYwZDVmIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
										</a>
									</div>
									<div class="media-body">
										<h4 class="media-heading">Nested media heading</h4>
										Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
										<!-- Nested media object -->
										<div class="media">
											<div class="media-left">
												<a href="#">
													<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTlmM2M1YyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWYzYzVjIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Nested media heading</h4>
												Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
											</div>
										</div>
									</div>
								</div>
								<!-- Nested media object -->
								<div class="media">
									<div class="media-left">
										<a href="#">
											<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTA0MTlmMjU2NCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MDQxOWYyNTY0Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
										</a>
									</div>
									<div class="media-body">
										<h4 class="media-heading">Nested media heading</h4>
										Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- BUTTON-STYLES -->
	<div id="buttons">
		<div class="row">
			<div class="col-md-12">
				<h2>Buttons</h2>
			</div>
		</div>
		<div class="row" style="margin-bottom: 20px;">
			<div class="col-md-12">
				<!-- Standard button -->
				<button type="button" class="btn btn-default">Default</button>

				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
				<button type="button" class="btn btn-primary">Primary</button>

				<!-- Indicates a successful or positive action -->
				<button type="button" class="btn btn-success">Success</button>

				<!-- Contextual button for informational alert messages -->
				<button type="button" class="btn btn-info">Info</button>

				<!-- Indicates caution should be taken with this action -->
				<button type="button" class="btn btn-warning">Warning</button>

				<!-- Indicates a dangerous or potentially negative action -->
				<button type="button" class="btn btn-danger">Danger</button>

				<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
				<button type="button" class="btn btn-link">Link</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered table-striped">
					<thead>
					<tr>
						<th>Button</th>
						<th>class=""</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><button class="btn btn-default" type="button">Default</button></td>
						<td><code>btn btn-default</code></td>
						<td>Standard gray button with gradient</td>
					</tr>
					<tr>
						<td><button class="btn btn-primary" type="button">Primary</button></td>
						<td><code>btn btn-primary</code></td>
						<td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
					</tr>
					<tr>
						<td><button class="btn btn-info" type="button">Info</button></td>
						<td><code>btn btn-info</code></td>
						<td>Used as an alternative to the default styles</td>
					</tr>
					<tr>
						<td><button class="btn btn-success" type="button">Success</button></td>
						<td><code>btn btn-success</code></td>
						<td>Indicates a successful or positive action</td>
					</tr>
					<tr>
						<td><button class="btn btn-warning" type="button">Warning</button></td>
						<td><code>btn btn-warning</code></td>
						<td>Indicates caution should be taken with this action</td>
					</tr>
					<tr>
						<td><button class="btn btn-danger" type="button">Danger</button></td>
						<td><code>btn btn-danger</code></td>
						<td>Indicates a dangerous or potentially negative action</td>
					</tr>
					<tr>
						<td><button class="btn btn-link" type="button">Link</button></td>
						<td><code>btn btn-link</code></td>
						<td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- LISTGROUPS-STYLES -->
	<div id="listgroups">
		<div class="row">
			<div class="col-md-12">
				<h2>Listgroups</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
				<h3>Basic example</h3>
				<ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Badges</h3>
				<ul class="list-group">
					<li class="list-group-item">
						<span class="badge">14</span>
						Cras justo odio
					</li>
					<li class="list-group-item">
						<span class="badge">14</span>
						Cras justo odio
					</li>
					<li class="list-group-item">
						<span class="badge">14</span>
						Cras justo odio
					</li>
					<li class="list-group-item">
						<span class="badge">14</span>
						Cras justo odio
					</li>
					<li class="list-group-item">
						<span class="badge">14</span>
						Cras justo odio
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Linked items</h3>
				<div class="list-group">
					<a href="#" class="list-group-item active">
						Cras justo odio
					</a>
					<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
					<a href="#" class="list-group-item">Morbi leo risus</a>
					<a href="#" class="list-group-item">Porta ac consectetur ac</a>
					<a href="#" class="list-group-item">Vestibulum at eros</a>
				</div>
			</div>
			<div class="col-md-3">
				<h3>Button items</h3>
				<div class="list-group">
					<button type="button" class="list-group-item">Cras justo odio</button>
					<button type="button" class="list-group-item">Dapibus ac facilisis in</button>
					<button type="button" class="list-group-item">Morbi leo risus</button>
					<button type="button" class="list-group-item">Porta ac consectetur ac</button>
					<button type="button" class="list-group-item">Vestibulum at eros</button>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<h3>Disabled items</h3>
				<div class="list-group">
					<a href="#" class="list-group-item disabled">
						Cras justo odio
					</a>
					<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
					<a href="#" class="list-group-item">Morbi leo risus</a>
					<a href="#" class="list-group-item">Porta ac consectetur ac</a>
					<a href="#" class="list-group-item">Vestibulum at eros</a>
				</div>
			</div>
			<div class="col-md-4">
				<h3>Contextual classes</h3>
				<ul class="list-group">
					<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
					<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
					<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
					<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
				</ul>
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
					<a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
					<a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
					<a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
				</div>
			</div>
			<div class="col-md-4">
				<h3>Custom content</h3>
				<div class="list-group">
					<a href="#" class="list-group-item active">
						<h4 class="list-group-item-heading">List group item heading</h4>
						<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">List group item heading</h4>
						<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">List group item heading</h4>
						<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- TABLE-STYLES -->
	<div id="tables">
		<div class="row">
			<div class="col-md-12">
				<h2>Tables</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h3>Default table</h3>
				<table class="table">
					<caption>Optional table caption.</caption>
					<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
					</tbody>
				</table>

				<h3>Striped table</h3>
				<table class="table table-striped">
					<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
					</tbody>
				</table>

				<h3>Bordered table</h3>
				<table class="table table-bordered">
					<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
					</tbody>
				</table>

				<h3>Hover table</h3>
				<table class="table table-hover">
					<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
					</tbody>
				</table>

				<h3>Condensed table</h3>
				<table class="table table-condensed">
					<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td colspan="2">Larry the Bird</td>
						<td>@twitter</td>
					</tr>
					</tbody>
				</table>

				<h3>Contextual table</h3>
				<table class="table">
					<thead>
					<tr>
						<th>#</th>
						<th>Column heading</th>
						<th>Column heading</th>
						<th>Column heading</th>
					</tr>
					</thead>
					<tbody>
					<tr class="active">
						<th scope="row">1</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="success">
						<th scope="row">3</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="info">
						<th scope="row">5</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr>
						<th scope="row">6</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="warning">
						<th scope="row">7</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr>
						<th scope="row">8</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="danger">
						<th scope="row">9</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- TOOLTIP-STYLES -->
	<div id="tooltips">
		<div class="row">
			<div class="col-md-12">
				<h2>Tooltips</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<p>Passages of <a href="#" class="tooltips" data-toggle="tooltip" data-original-title="Default tooltip">Lorem Ipsum I am a tooltip</a> on the other hand we denounce with <a class="tooltips-show" href="#" data-toggle="tooltip" data-original-title="Tooltip example">Hover over me</a> righteous but the majority have suffered alteration in some form, by injected humour, or <span class="text-border text-border-blue tooltips" data-toggle="tooltip" data-original-title="Default tooltip">Another Tooltip Example</span> words which don't look even slightly believable.</p><br><br>
				<p>Passages of <span class="text-border text-border-red tooltips-show" data-toggle="tooltip" data-original-title="Default tooltip" aria-describedby="tooltip224459">Another Tooltip Example</span> on the other hand we denounce with Hover over me <span class="text-highlights text-highlights-purple rounded tooltips" data-toggle="tooltip" data-original-title="Default tooltip">Another Tooltip Example</span> majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p><br>
				<p>
					<button type="button" class="tooltips btn-u btn-brd rounded btn-u-xs btn-u-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Tooltip on left</button>
					<button type="button" class="tooltips btn-u btn-brd rounded btn-u-xs btn-u-red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Tooltip on top</button>
					<button type="button" class="tooltips btn-u btn-brd rounded btn-u-xs btn-u-blue" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</button>
					<button type="button" class="tooltips btn-u btn-brd rounded btn-u-xs btn-u-green" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Tooltip on right</button>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- BREADCRUMB-STYLES -->
	<div id="breadcrumb">
		<div class="row">
			<div class="col-md-12">
				<h2>Breadcrumb</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Library</a></li>
					<li class="active">Data</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- PAGINATION-STYLES -->
	<div id="pagination">
		<div class="row">
			<div class="col-md-12">
				<h2>Pagination</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h3>Pagination left</h3>
				<nav>
					<ul class="pagination">
						<li class="disabled">
							<a href="#" aria-label="Zurück">
								<span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
							</a>
						</li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Weiter">
								<span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-md-12">
				<h3>Pagination center</h3>
				<nav class="text-center">
					<ul class="pagination">
						<li class="disabled">
							<a href="#" aria-label="Zurück">
								<span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
							</a>
						</li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Weiter">
								<span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-md-12">
				<h3>Pagination right</h3>
				<nav class="text-right">
					<ul class="pagination">
						<li class="disabled">
							<a href="#" aria-label="Zurück">
								<span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
							</a>
						</li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Weiter">
								<span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- TAB-STYLES -->
	<div id="tabs">
		<div class="row">
			<div class="col-md-12">
				<h2>Tabs</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#highlights-1" data-toggle="tab" data-original-title="" title="">Highlights #1</a></li>
					<li><a href="#highlights-2" data-toggle="tab" data-original-title="" title="">Highlights #2</a></li>
					<li><a href="#highlights-3" data-toggle="tab" data-original-title="" title="">Highlights #3</a></li>
					<li><a href="#highlights-4" data-toggle="tab" data-original-title="" title="">@ Usage of Rounded Classes</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="highlights-1">
						<p>Passages of Lorem Ipsum <span class="text-highlights rounded">on the other hand we denounce</span> with righteous but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. <span class="text-highlights text-highlights-green">If you are going to use a passage</span> of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat <span class="text-highlights text-highlights-blue">predefined chunks as necessary</span> making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. Contrary to popular belief, Lorem Ipsum is not simply random text. <span class="text-highlights text-highlights-red rounded-2x">It has roots in a piece of classical Latin</span> literature from 45 BC.</p>
					</div>
					<div class="tab-pane fade" id="highlights-2">
						<p>At vero eos et accusamus et iusto odio <span class="text-highlights text-highlights-dark-blue">dignissimos ducimus qui blanditiis praesentium</span> voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum <span class="text-highlights text-highlights-light-green rounded">fuga harum quidem rerum facilis est</span> et expedita distinctio.</p>
					</div>
					<div class="tab-pane fade" id="highlights-3">
						<p><span class="text-highlights text-highlights-sea rounded-2x">On the other hand, we denounce with righteous</span> indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the <span class="text-highlights text-highlights-orange">pain and trouble that are bound</span> to ensue; and equal blame belongs to those <span class="text-highlights text-highlights-purple">who fail in their duty through weakness</span> of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is <span class="text-highlights text-highlights-aqua">untrammelled and when nothing</span> prevents our being <span class="text-highlights text-highlights-brown rounded">able to do what we like best</span> every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations.</p>
					</div>
					<div class="tab-pane fade" id="highlights-4">
						<h3 class="heading-sm">Rounded Highlights</h3>
						<p>You should add rounded classes to highlights <code>.rounded</code> and <code>.rounded-2x</code></p>
						<p>At vero eos et accusamus et iusto odio <span class="text-highlights text-highlights-yellow rounded">.rouned highlight</span> voluptatum deleniti atque corrupti quos dolores et quas molestias sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum <span class="text-highlights text-highlights-red rounded-2x">.rouned-2x highlight</span> et expedita distinctio.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- COLLAPSIBLE-STYLES -->
	<div id="collapsible">
		<div class="row">
			<div class="col-md-12">
				<h2>Collapsible</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Collapsible Group Item #1
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Collapsible Group Item #2
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Collapsible Group Item #3
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>

	<!-- COLLAPSIBLE-STYLES -->
	<div id="panels">
		<div class="row">
			<div class="col-md-12">
				<h2>Panels</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi earum eius esse excepturi facere ipsam iure laboriosam minima officiis, placeat ratione rem, repellat sed sequi! Asperiores, eos est! Deleniti.
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi earum eius esse excepturi facere ipsam iure laboriosam minima officiis, placeat ratione rem, repellat sed sequi! Asperiores, eos est! Deleniti.
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi earum eius esse excepturi facere ipsam iure laboriosam minima officiis, placeat ratione rem, repellat sed sequi! Asperiores, eos est! Deleniti.
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi earum eius esse excepturi facere ipsam iure laboriosam minima officiis, placeat ratione rem, repellat sed sequi! Asperiores, eos est! Deleniti.
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi earum eius esse excepturi facere ipsam iure laboriosam minima officiis, placeat ratione rem, repellat sed sequi! Asperiores, eos est! Deleniti.
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi earum eius esse excepturi facere ipsam iure laboriosam minima officiis, placeat ratione rem, repellat sed sequi! Asperiores, eos est! Deleniti.
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="#top" class="pull-right">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="divider"></div>
			</div>
		</div>
	</div>
</div>
<?php include('_footer_js.php'); ?>
</body>
</html>