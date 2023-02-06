<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Typhography";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");
?>

<style>
	/*
	 * Examples
	 *
	 * Isolated sections of example content for each component or feature. Usually
	 * followed by a code snippet.
	 */

	.bs-example {
		position: relative;
		padding: 15px 15px 15px;
		margin: 0 0px 15px;
		background-color: #fafafa;
		border-color: #e5e5e5 #eee #eee;
		border-style: solid;
		border-width: 1px;
	}
	/* Echo out a label for the example */
	.bs-example:after {
		content: "";
		position: absolute;
		top: 15px;
		left: 15px;
		font-size: 12px;
		font-weight: bold;
		color: #bbb;
		text-transform: uppercase;
		letter-spacing: 1px;
	}

	/* Tweak display of the code snippets when following an example */
	.bs-example + .highlight {
		margin: -15px 0px 15px;
		border-radius: 0;
		border-width: 0 0 1px;
	}

	/* Make the examples and snippets not full-width */
	@media (min-width: 768px) {
		.bs-example {
			margin-left: 0;
			margin-right: 0;
			background-color: #fff;
			border-width: 1px;
			border-color: #ddd;
			border-radius: 4px 4px 0 0;
			box-shadow: none;
		}
		.bs-example + .highlight {
			margin-top: -16px;
			margin-left: 0;
			margin-right: 0;
			border-width: 1px;
			border-bottom-left-radius: 4px;
			border-bottom-right-radius: 4px;
		}
	}

	/* Undo width of container */
	.bs-example .container {
		width: auto;
	}

	/* Tweak content of examples for optimum awesome */
	.bs-example > p:last-child, .bs-example > ul:last-child, .bs-example > ol:last-child, .bs-example > blockquote:last-child, .bs-example > .form-control:last-child, .bs-example > .table:last-child, .bs-example > .navbar:last-child, .bs-example > .jumbotron:last-child, .bs-example > .alert:last-child, .bs-example > .panel:last-child, .bs-example > .list-group:last-child, .bs-example > .well:last-child, .bs-example > .progress:last-child, .bs-example > .table-responsive:last-child > .table {
		margin-bottom: 0;
	}
	.bs-example > p > .close {
		float: none;
	}

	/* Typography */
	.bs-example-type .table .info {
		color: #999;
		vertical-align: middle;
		background:none;
	}
	.bs-example-type .table td {
		padding: 15px 0;
		border-color: #eee;
		vertical-align: top !important;
	}
	.bs-example-type .table tr:first-child td {
		border-top: 0;
		vertical-align: top;
	}
	.bs-example-type h1, .bs-example-type h2, .bs-example-type h3, .bs-example-type h4, .bs-example-type h5, .bs-example-type h6 {
		margin-top: 0;
	}

	/* Images */
	.bs-example > .img-circle, .bs-example > .img-rounded, .bs-example > .img-thumbnail {
		margin: 5px;
	}

	/* Tables */
	.bs-example > .table-responsive > .table {
		background-color: #fff;
	}

	/* Buttons */
	.bs-example > .btn, .bs-example > .btn-group {
		margin-top: 5px;
		margin-bottom: 5px;
	}
	.bs-example > .btn-toolbar + .btn-toolbar {
		margin-top: 10px;
	}

	/* Forms */
	.bs-example-control-sizing select, .bs-example-control-sizing input[type="text"] + input[type="text"] {
		margin-top: 10px;
	}
	.bs-example-form .input-group {
		margin-bottom: 10px;
	}
	.bs-example > textarea.form-control {
		resize: vertical;
	}

	/* List groups */
	.bs-example > .list-group {
		max-width: 400px;
	}

	/* Navbars */
	.bs-example .navbar:last-child {
		margin-bottom: 0;
	}
	.bs-navbar-top-example, .bs-navbar-bottom-example {
		z-index: 1;
		padding: 0;
		overflow: hidden; /* cut the drop shadows off */
	}
	.bs-navbar-top-example .navbar-header, .bs-navbar-bottom-example .navbar-header {
		margin-left: 0;
	}
	.bs-navbar-top-example .navbar-fixed-top, .bs-navbar-bottom-example .navbar-fixed-bottom {
		position: relative;
		margin-left: 0;
		margin-right: 0;
	}
	.bs-navbar-top-example {
		padding-bottom: 45px;
	}
	.bs-navbar-top-example:after {
		top: auto;
		bottom: 15px;
	}
	.bs-navbar-top-example .navbar-fixed-top {
		top: -1px;
	}
	.bs-navbar-bottom-example {
		padding-top: 45px;
	}
	.bs-navbar-bottom-example .navbar-fixed-bottom {
		bottom: -1px;
	}
	.bs-navbar-bottom-example .navbar {
		margin-bottom: 0;
	}
	@media (min-width: 768px) {
		.bs-navbar-top-example .navbar-fixed-top, .bs-navbar-bottom-example .navbar-fixed-bottom {
			position: absolute;
		}
		.bs-navbar-top-example {
			border-radius: 0 0 4px 4px;
		}
		.bs-navbar-bottom-example {
			border-radius: 4px 4px 0 0;
		}
	}

	/* Pagination */
	.bs-example .pagination {
		margin-top: 10px;
		margin-bottom: 10px;
	}

	/* Pager */
	.bs-example > .pager {
		margin-top: 0;
	}

	/* Example modals */
	.bs-example-modal {
		background-color: #f5f5f5;
	}
	.bs-example-modal .modal {
		position: relative;
		top: auto;
		right: auto;
		left: auto;
		bottom: auto;
		z-index: 1;
		display: block;
	}
	.bs-example-modal .modal-dialog {
		left: auto;
		margin-left: auto;
		margin-right: auto;
	}

	/* Example dropdowns */
	.bs-example > .dropdown > .dropdown-menu {
		position: static;
		display: block;
		margin-bottom: 5px;
	}

	/* Example tabbable tabs */
	.bs-example-tabs .nav-tabs {
		margin-bottom: 15px;
	}

	/* Tooltips */
	.bs-example-tooltips {
		text-align: center;
	}
	.bs-example-tooltips > .btn {
		margin-top: 5px;
		margin-bottom: 5px;
	}

	/* Popovers */
	.bs-example-popover {
		padding-bottom: 24px;
		background-color: #f9f9f9;
	}
	.bs-example-popover .popover {
		position: relative;
		display: block;
		float: left;
		width: 260px;
		margin: 20px;
	}

	/* Scrollspy demo on fixed height div */
	.scrollspy-example {
		position: relative;
		height: 200px;
		margin-top: 10px;
		overflow: auto;
	}

	/*
	 * Code snippets
	 *
	 * Generated via Pygments and Jekyll, these are snippets of HTML, CSS, and JS.
	 */

	.highlight {
		display: none; /* hidden by default, until >480px */
		padding: 9px 14px;
		margin-bottom: 14px;
		background-color: #f7f7f9;
		border: 1px solid #e1e1e8;
		border-radius: 4px;
	}
	.highlight pre {
		padding: 0;
		margin-top: 0;
		margin-bottom: 0;
		background-color: transparent;
		border: 0;
		white-space: nowrap;
	}
	.highlight pre code {
		font-size: inherit;
		color: #333; /* Effectively the base text color */
	}
	.highlight pre .lineno {
		display: inline-block;
		width: 22px;
		padding-right: 5px;
		margin-right: 10px;
		text-align: right;
		color: #bebec5;
	}

	/* Show code snippets when we have the space */
	@media (min-width: 481px) {
		.highlight {
			display: block;
		}
	}

	.hll {
		background-color: #ffffcc
	}
	/*{ background: #f0f3f3; }*/
	.c {
		color: #999;
	}/* Comment */
	.err {
		color: #AA0000;
		background-color: #FFAAAA
	}/* Error */
	.k {
		color: #006699;
	}/* Keyword */
	.o {
		color: #555555
	}/* Operator */
	.cm {
		color: #0099FF;
		font-style: italic
	}/* Comment.Multiline */
	.cp {
		color: #009999
	}/* Comment.Preproc */
	.c1 {
		color: #999;
	}/* Comment.Single */
	.cs {
		color: #999;
	}/* Comment.Special */
	.gd {
		background-color: #FFCCCC;
		border: 1px solid #CC0000
	}/* Generic.Deleted */
	.ge {
		font-style: italic
	}/* Generic.Emph */
	.gr {
		color: #FF0000
	}/* Generic.Error */
	.gh {
		color: #003300;
	}/* Generic.Heading */
	.gi {
		background-color: #CCFFCC;
		border: 1px solid #00CC00
	}/* Generic.Inserted */
	.go {
		color: #AAAAAA
	}/* Generic.Output */
	.gp {
		color: #000099;
	}/* Generic.Prompt */
	.gs {
	}/* Generic.Strong */
	.gu {
		color: #003300;
	}/* Generic.Subheading */
	.gt {
		color: #99CC66
	}/* Generic.Traceback */
	.kc {
		color: #006699;
	}/* Keyword.Constant */
	.kd {
		color: #006699;
	}/* Keyword.Declaration */
	.kn {
		color: #006699;
	}/* Keyword.Namespace */
	.kp {
		color: #006699
	}/* Keyword.Pseudo */
	.kr {
		color: #006699;
	}/* Keyword.Reserved */
	.kt {
		color: #007788;
	}/* Keyword.Type */
	.m {
		color: #FF6600
	}/* Literal.Number */
	.s {
		color: #d44950
	}/* Literal.String */
	.na {
		color: #4f9fcf
	}/* Name.Attribute */
	.nb {
		color: #336666
	}/* Name.Builtin */
	.nc {
		color: #00AA88;
	}/* Name.Class */
	.no {
		color: #336600
	}/* Name.Constant */
	.nd {
		color: #9999FF
	}/* Name.Decorator */
	.ni {
		color: #999999;
	}/* Name.Entity */
	.ne {
		color: #CC0000;
	}/* Name.Exception */
	.nf {
		color: #CC00FF
	}/* Name.Function */
	.nl {
		color: #9999FF
	}/* Name.Label */
	.nn {
		color: #00CCFF;
	}/* Name.Namespace */
	.nt {
		color: #2f6f9f;
	}/* Name.Tag */
	.nv {
		color: #003333
	}/* Name.Variable */
	.ow {
		color: #000000;
	}/* Operator.Word */
	.w {
		color: #bbbbbb
	}/* Text.Whitespace */
	.mf {
		color: #FF6600
	}/* Literal.Number.Float */
	.mh {
		color: #FF6600
	}/* Literal.Number.Hex */
	.mi {
		color: #FF6600
	}/* Literal.Number.Integer */
	.mo {
		color: #FF6600
	}/* Literal.Number.Oct */
	.sb {
		color: #CC3300
	}/* Literal.String.Backtick */
	.sc {
		color: #CC3300
	}/* Literal.String.Char */
	.sd {
		color: #CC3300;
		font-style: italic
	}/* Literal.String.Doc */
	.s2 {
		color: #CC3300
	}/* Literal.String.Double */
	.se {
		color: #CC3300;
	}/* Literal.String.Escape */
	.sh {
		color: #CC3300
	}/* Literal.String.Heredoc */
	.si {
		color: #AA0000
	}/* Literal.String.Interpol */
	.sx {
		color: #CC3300
	}/* Literal.String.Other */
	.sr {
		color: #33AAAA
	}/* Literal.String.Regex */
	.s1 {
		color: #CC3300
	}/* Literal.String.Single */
	.ss {
		color: #FFCC33
	}/* Literal.String.Symbol */
	.bp {
		color: #336666
	}/* Name.Builtin.Pseudo */
	.vc {
		color: #003333
	}/* Name.Variable.Class */
	.vg {
		color: #003333
	}/* Name.Variable.Global */
	.vi {
		color: #003333
	}/* Name.Variable.Instance */
	.il {
		color: #FF6600
	}/* Literal.Number.Integer.Long */

	.css .o, .css .o + .nt, .css .nt + .nt {
		color: #999;
	}
	
	/*
	 * DEMO
	 */
	
	.eg-1 td:first-child {
		width: 70%;
		text-align:left;
	}
	
	.eg-1 td:last-child {
		width: 30%;
		text-align:right;
	}

</style>

<?php

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["ui_elements"]["sub"]["typo"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
		<div id="main" role="main">
			<?php
				//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
				//$breadcrumbs["New Crumb"] => "http://url.com"
				$breadcrumbs[$page_nav["ui_elements"]["title"]] = "";
				include("inc/ribbon.php");
			?>
			<!-- MAIN CONTENT -->
			<div id="content">

	<!-- row -->
	<div class="row">
		
		<!-- NEW WIDGET START -->
		<div class="col-sm-6">
			
					<!-- widget content -->
					
						
					<div class="bs-example bs-example-type">
						<h3 class="text-primary" style="margin: 20px 0;">Headers and leads</h3>
						<table class="table eg-1">
							<tbody>
								<tr>
									<td>
										<h1>h1. SmartAdmin heading</h1>
										<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
									</td>
									<td class="info">'Open Sans' 26px Light</td>
								</tr>
								<tr>
									<td>
										<h2>h2. SmartAdmin heading</h2>
										<p>SmartAdmins's global default <code>font-size</code> is <strong>13px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default).</p>
									</td>
									<td class="info">'Open Sans' 22px Light</td>
								</tr>
								<tr>
									<td>
										<h3>h3. SmartAdmin heading</h3>
										<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
										<pre><code class="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"attribute"</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;</span>
</code></pre>
									</td>
									<td class="info">'Open Sans' 18px Light</td>
								</tr>
								<tr>
									<td><h4>h4. SmartAdmin heading</h4></td>
									<td class="info">'Open Sans' 17px Light</td>
								</tr>
								<tr>
									<td><h5>h5. SmartAdmin heading</h5></td>
									<td class="info">'Open Sans' 16px Light</td>
								</tr>
								<tr>
									<td><h6>h6. SmartAdmin heading</h6></td>
									<td class="info">'Open Sans' 14px Bold</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="highlight">
			<pre><code class="html"><span class="nt">&lt;h1&gt;</span>h1. SmartAdmin heading<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. SmartAdmin heading<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. SmartAdmin heading<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. SmartAdmin heading<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. SmartAdmin heading<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. SmartAdmin heading<span class="nt">&lt;/h6&gt;</span>
</code></pre>
					</div>

					<div class="bs-example bs-example-type">
						<table class="table">
							<tbody>
								<tr>
									<td><h1>h1. SmartAdmin heading <small>Secondary text</small></h1></td>
								</tr>
								<tr>
									<td><h2>h2. SmartAdmin heading <small>Secondary text</small></h2></td>
								</tr>
								<tr>
									<td><h3>h3. SmartAdmin heading <small>Secondary text</small></h3></td>
								</tr>
								<tr>
									<td><h4>h4. SmartAdmin heading <small>Secondary text</small></h4></td>
								</tr>
								<tr>
									<td><h5>h5. SmartAdmin heading <small>Secondary text</small></h5></td>
								</tr>
								<tr>
									<td><h6>h6. SmartAdmin heading <small>Secondary text</small></h6></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="highlight">
			<pre><code class="html"><span class="nt">&lt;h1&gt;</span>h1. SmartAdmin heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. SmartAdmin heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. SmartAdmin heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. SmartAdmin heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. SmartAdmin heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. SmartAdmin heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h6&gt;</span>
</code></pre>
					</div>
										
						
					
					<!-- end widget content -->
			
			<!-- Widget ID (each widget will need unique ID)-->

			<div class="well well-sm">
			<h3 class="text-primary">Text and BG color options</h3>
			<table class="table table-bordered">

				<tbody>
					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-green">
							Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh. <span class="label bg-color-green pull-right">.bg-color-green</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-green</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-greenDark">
							Nullam id dolor id nibh ultricies vehicula ut id elit. <span class="label bg-color-greenDark pull-right">.bg-color-greenDark</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-greenDark</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-greenLight">
							Duis mollis, est non commodo luctus, nisi erat porttitor ligula. <span class="label bg-color-greenLight pull-right">.bg-color-greenLight</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-greenLight</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-purple">
							Maecenas sed diam eget risus varius blandit sit amet non magna. <span class="label bg-color-purple pull-right">.bg-color-purple</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-purple</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-magenta">
							Etiam porta sem malesuada magna mollis euismod. <span class="label bg-color-magenta pull-right">.bg-color-magenta</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-magenta</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-pink">
							Donec ullamcorper nulla non metus auctor fringilla. <span class="label bg-color-pink pull-right">.bg-color-pink</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-pink</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-pinkDark">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="label bg-color-pinkDark pull-right">.bg-color-pinkDark</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-pinkDark</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-blue">
							Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. <span class="label bg-color-blue pull-right">.bg-color-blue</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-blue</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-blueLight">
							Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien. <span class="label bg-color-blueLight pull-right">bg-color-blueLight</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-blueLight</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-blueDark">
							Libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros. <span class="label bg-color-blueDark pull-right">.bg-color-blueDark</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-blueDark</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-teal">
							Donec sodales sagittis magna. Sed consequat. <span class="label bg-color-teal pull-right">.bg-color-teal</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-teal</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-yellow">
							Leo eget bibendum sodales, augue velit cursus nunc. <span class="label bg-color-yellow pull-right">.bg-color-yellow</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-yellow</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-orange">
							Sed ut perspiciatis unde omnis iste natus error. <span class="label bg-color-orange pull-right">.bg-color-orange</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-orange</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-orangeDark">
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <span class="label bg-color-orangeDark pull-right">.bg-color-orangeDark</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-orangeDark</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-red">
							Qui dolorem ipsum quia dolor sit amet, consectetur. <span class="label bg-color-red pull-right">.bg-color-red</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-red</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="txt-color-redLight">
							Nam libero tempore, cum soluta nobis est eligendi optio. <span class="label bg-color-redLight pull-right">.bg-color-redLight</span>
						</p></td>

						<td><code class="pull-right">
							.txt-color-redLight</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="text-muted">
							Cumque nihil impedit quo minus id quod maxime placeat facere.
						</p></td>

						<td><code class="pull-right">
							.text-muted</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="text-primary">
							Qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
						</p></td>

						<td><code class="pull-right">
							.text-primary</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="text-success">
							Ducimus qui blanditiis praesentium voluptatum deleniti.
						</p></td>

						<td><code class="pull-right">
							.text-success</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="text-danger">
							Aolorem eum fugiat quo voluptas nulla pariatur?
						</p></td>

						<td><code class="pull-right">
							.text-danger</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="text-warning">
							Ut enim ad minima veniam, quis nostrum exercitationem.
						</p></td>

						<td><code class="pull-right">
							.text-warning</code></td>
					</tr>

					<!-- new tr -->
					<tr>
						<td>
						<p class="text-info">
							Tempora incidunt ut labore et dolore magnam aliquam quaerat.
						</p></td>

						<td><code class="pull-right">
							.text-info</code></td>
					</tr>

				</tbody>

			</table>

		</div>

			<!-- end widget -->

		</div>
		<!-- WIDGET END -->


		<!-- NEW WIDGET START -->
		<div class="col-sm-6">

					<!-- widget content -->
					<div class="well well-sm"> 
						<h3 class="text-primary">All Lists</h3>
						<div class="row">
							
							<div class="col-sm-6">
								
<div class="bs-example">
	
      <ul>
        <li>Unordered List Item </li>
        <li><strong>I am inside a strong tag</strong></li>

        <li><i>I am Italic!</i>
          <ul>
            <li class="text-danger">We can also be red</li>
            <li class="text-success">Or green</li>
            <li class="txt-color-purple">Even purple!</li>

          </ul>
        </li>

        <li><strong><i>I am inside a strong and Italic tag, I may also break into a new line if <u>squized</u></i></strong></li>
        <li><small>I am inside a small tag</small></li>
      </ul>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
							</div>
							
														
							<div class="col-sm-6">
								
<div class="bs-example">

      <ol>
        <li>Ordered List Item </li>
        <li><u>Ordered List Item</u></li>

        <li><strong>Ordered List Item</strong>
          <ul class="list-unstyled">
            <li><i class="fa fa-bell text-danger"></i> Unstyled list with custom icon</li>
            <li class="text-success"><i class="fa fa-check"></i> <strong><u>Unstyled list</u> with custom icon</strong></li>
            <li><i class="fa fa-warning text-warning"></i> <i>Unstyled list with custom icon</i></li>

          </ul>
        </li>

        <li class="text-info"><strong><i>I am inside a strong and Italic tag, I may also break into a new line if squized</i></strong></li>
        <li><span class="label label-danger">I am a label</span></li>
      </ol>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ol&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span>
</code></pre></div>
								
							</div>
							

						</div>
						
						<div class="row">
							
							<div class="col-sm-12">
								
															
								
								<div class="bs-example">
									<ul class="list-inline">
										<li class="text-success">
											<strong>Inline List Item #1</strong>
										</li>
										<li class="text-danger">
											<strong><u>Inline List Item #2</u></strong>
										</li>
										<li class="text-primary">
											<strong><i>Inline List Item #3</i></strong>
										</li>
									</ul>
								</div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
							
							
								
							</div>
							
						</div>
						
					</div>
					<!-- end widget content -->
			
					<div class="well well-sm"> 
						<h3 class="text-primary">Quotes</h3>
						
					<div class="bs-example">
						<blockquote>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
							</p>
							<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
						</blockquote>
					</div>
					<div class="highlight">
						<pre><code class="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;small&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/small&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre>
</div>
							

					<div class="bs-example" style="overflow: hidden;">
						<blockquote class="pull-right">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
							</p>
							<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
						</blockquote>
					</div>
					<div class="highlight">
						<pre><code class="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"pull-right"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre>
</div>

					</div>				

			
					<!-- widget content -->
					

					<div class="well well-sm">
					<h3 class="text-primary">Discription Lists</h3>
					
<div class="bs-example">
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
<div class="highlight"><pre><code class="html"><span class="nt">&lt;dl&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span>
</code></pre></div>


<div class="bs-example">
      <dl class="dl-horizontal">
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
        <dt>Felis euismod semper eget lacinia</dt>
        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
      </dl>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"dl-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span>
</code></pre></div>

					</div>						
					
					<!-- end widget content -->

					<!-- widget content -->
				

						
<div class="bs-example">
	<h3 class="text-primary">Address</h3>
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
	<div class="highlight"><pre><code class="html"><span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Twitter, Inc.<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  795 Folsom Ave, Suite 600<span class="nt">&lt;br&gt;</span>
  San Francisco, CA 94107<span class="nt">&lt;br&gt;</span>
  <span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"Phone"</span><span class="nt">&gt;</span>P:<span class="nt">&lt;/abbr&gt;</span> (123) 456-7890
<span class="nt">&lt;/address&gt;</span>

<span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Full Name<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"mailto:#"</span><span class="nt">&gt;</span>first.last@example.com<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/address&gt;</span>
</code></pre></div>

<hr>



<div class="bs-example">
	<h3 class="text-primary">Alignment</h3>
      <p class="text-left">Left aligned text.</p>
      <p class="text-center">Center aligned text.</p>
      <p class="text-right">Right aligned text.</p>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-left"</span><span class="nt">&gt;</span>Left aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>Center aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Right aligned text.<span class="nt">&lt;/p&gt;</span>
</code></pre></div>
						
					
					<!-- end widget content -->

					<!-- widget content -->
					<div class="well well-sm">
						<h3 class="text-primary">Text sizes</h3>
						<p class="alert alert-info">Take full control over the font by controling the size with the following CSS</p>
						<ul class="list-inline">
							<li>
								<span class="font-xl">.font-xl</span>
							</li>
							<li>
								<span class="font-lg">.font-lg</span>
							</li>
							<li>
								<span class="font-md">.font-md</span>
							</li>
							<li>
								<span class="font-sm">.font-sm</span>
							</li>
							<li>
								<span class="font-xs">.font-xs</span>
							</li>														
						</ul>	
						
					</div>


					<!-- end widget content -->

		</div>
		<!-- WIDGET END -->
		
	</div>

	<!-- end row -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
	// include page footer
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) 
<script src="..."></script>-->

<script>

	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>