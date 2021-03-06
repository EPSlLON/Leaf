@extends('layouts.index')

@section('main')
<h2>History</h2>
<div class="well well-large">
	<p class="lead">tsk tsk 343. Where is your API?</p>
	<br />
	<h3>FAQ:</h3>
	<br />
	<strong>Why should I come here? </strong><br />
	Its about 2.2mb less clutter than HaloWaypoint, and we only track Matchmaking to prevent abuse and generally are faster/sexier.
	<br /><br />
	<strong>How often can I update my stats?</strong><br />
	The system does it automatically for our leaderboard every 3-5 hours. Otherwise you are allowed every 5 minutes.
	<br /><br />
	<strong>What about old accounts that don't play Halo anymore?</strong><br />
	Once an account has 40 re-caches, that didn't change anything. We deem that account "frozen", and thus don't update it automatically.
	<br /><br />
	<strong>I have a complaint/bug! </strong><br />
	<a href="https://github.com/TheTree/Leaf/issues">I use GitHub for problems. Go here to report one.</a>
	<br /><br />
	<strong>Whats up with the tooltips everywhere?</strong><br />
	I like them.
	<br /><br />
	<strong>Any new features? </strong><br />
	meh. Tweet me. We can add more stuff.
	<br /><br />
	<strong>Can I have the source? </strong><br />
	<a href="https://github.com/TheTree/Leaf" rel="nofollow">GitHub</a>
	<br /><br />
	<strong>Can you swim in spent fuel water? </strong><br />
	I've got no clue. These <a href="http://what-if.xkcd.com/29/">guys</a> do though.
	<br />
</div>
<br />
@stop

@section('sidebar')
<h2>me</h2>
<div class="well well-large">
	<div class="text-center">
		<img src="http://www.gravatar.com/avatar/{{ md5('ibotpeaches@gmail.com') }}?s=200" class="img-thumbnail img-responsive" />
		<br /><br />
		<a href="https://twitter.com/iBotPeaches" class="twitter-follow-button" data-show-count="false">Follow @iBotPeaches</a>
		<script>!function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (!d.getElementById(id)) {
					js = d.createElement(s);
					js.id = id;
					js.src = "//platform.twitter.com/widgets.js";
					fjs.parentNode.insertBefore(js, fjs);
				}
			}(document, "script", "twitter-wjs");</script>
	</div>
</div>
<h4>What made Leaf?</h4>
<div class="well well-large">
	<ul class="list-unstyled">
		<li><a href="http://getbootstrap.com/" target="_blank" rel="nofollow">Bootstrap</a> -> JS/CSS Framework</li>
		<li><a href="http://laravel.com/" target="_blank" rel="nofollow">Laravel</a> -> PHP Framework</li>
		<li><a href="http://bootswatch.com/cosmo/" target="_blank" rel="nofollow">Cosmo</a> -> Metro</li>
		<li><a href="http://jquery.com/" target="_blank" rel="nofollow">jQuery</a> -> JS Library</li>
		<li><a href="http://msgpack.org/" target="_blank" rel="nofollow">MessagePack</a> -> JSON Evolved</li>
		<li><a href="http://mongodb.org" target="_blank" rel="nofollow">MongoDB</a> -> Storage</li>
		<!--<li><a href="http://twitter.com/iBotPeaches" target="_blank" rel="nofollow">Love</a> -> tis hidden :)</li>-->
	</ul>
</div>
<h4>The Tree</h4>
<div class="well well-large">
	<ul class="list-unstyled">
		<li><a href="http://branchapp.co">Branch</a> <small>(ßeta)</small></li>
		<li><a href="http://leafapp.co">Leaf</a></li>
		<li><a href="http://rootapp.co">Root</a> <small>(tba)</small></li>
		<li><a href="http://stumpapp.co">Stump</a> <small>(tba)</small></li>
		<li><a href="http://treeapp.co">Tree</a> <small>(tba)</small></li>
		<li><a href="http://trunkapp.co">Trunk</a> <small>(tba)</small></li>
		<li><a href="http://twigapp.co">Twig</a> <small>(tba)</small></li>
	</ul>
</div>
@stop