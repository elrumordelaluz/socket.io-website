<?php
/**
 * The template for displaying the home page.
 *
 * @package socket.io-website
 */
?>

<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main page home" class="site-main" role="main">
		<header class="entry-header">
			<h1 class="entry-title">SOCKET.IO 1.0 IS HERE</h1>
			<h2 class="entry-subtitle">FEATURING THE FASTEST AND MOST RELIABLE REAL-TIME ENGINE</h2>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<p class="centered">
				<i>Socket.IO enables real-time bidirectional event-based communication.</i><br />
				<i class="smaller">It works on every platform, browser or device, focusing equally on reliability and speed.</i>
			</p>

			<div id="examples">
				<div class="example-column left">
					<div class="example-entry analytics">
						<h2>Real-time analytics</h2>
						<p>Push data to clients that gets represented as real-time counters, charts or logs.</p>
					</div>

					<div class="example-entry binary">
						<h2>Binary streaming</h2>
						<p>Starting in 1.0, it's possible to send any blob back and forth: image, audio, video.</p>
					</div>
				</div>

				<div class="example-column right">
					<div class="example-entry chat">
						<h2>Instant messaging and chat</h2>
						<p>Socket.IO's "Hello world" is a chat app in just a few lines of code.</p>
					</div>

					<div class="example-entry collab">
						<h2>Document collaboration</h2>
						<p>Allow users to concurrently edit a document and see each other's changes.</p>
					</div>
				</div>
			</div><!-- #examples -->

			<div id="information">
				<div class="information-column left">
					<div class="information-entry">
						<h2>USED BY EVERYONE</h2>
						<p>From Microsoft Office, Yammer, Zendesk, Trello... to hackathon winners and little startups.</p>
						<p>One of the most powerful JavaScript frameworks on GitHub, and most depended-upon NPM module.</p>
					</div>

					<div class="information-entry">
						<h2>STAY UP TO DATE</h2>
						<p>Leave your email to hear about <b>new releases</b> and important <b>security</b> updates. <b>Very low traffic.</b></p>
					</div>
				</div>

				<div class="information-column right">
					<div class="information-entry">
						<h2>IMMENSELY POWERFUL, YET EASY TO USE</h2>
						<p>Our getting started guide will show you how to create lots of amazing applications in fewer than 200 lines of code.</p>
						<p>We're not making that up. Get started <a href="#">now</a>.</p>
					</div>

					<div class="information-entry">
						<h2>JOIN THE COMMUNITY</h2>
						<p>
						- Post to the <a href="#">mailing list</a> with questions or to show your work<br />
						- Real-time help? Find us on IRC at #socket.io on irc.freenode.net<br />
						- Contribute code or report issues on <a href="https://github.com/LearnBoost/socket.io">GitHub</a>
						</p>
					</div>
				</div>
			</div><!-- #exaples -->
		</div><!-- .entry-content -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
