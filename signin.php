<!DOCTYPE html>
<html lang="en">
	<style>
	htmlShadow { color:white; text-shadow: 1px 1px #000000; }
	redShadow { color:red; text-shadow: 1px 1px #000000; }
	</style>
	<meta name="google-signin-client_id" content="599730189065-7rvno7a8a1ntrlmlsvil6ca51vp2mqfn.apps.googleusercontent.com">
       	<div id="vk_api_transport"></div>
	<head>
		<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
		

		<link rel="stylesheet" href="https://use.typekit.net/eng0wez.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="This is the official website for the no-download browser based FPS Battle Royale shooter War Brokers.">
		<meta name="keywords" content="io game,krunker,.io,online game,free game,browser fps,roblox">

		<title>War Brokers</title>

		<!-- Bootstrap core CSS -->
		<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">	 -->

		<!-- Font Awesome core CSS -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom styles for this template -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;800&display=swap" rel="stylesheet">
		<!--<link href="css/main.css" rel="stylesheet">-->
		<link href="css/style.css" rel="stylesheet">
		
		
	</head>

	<body class="desert-2">

<!-- <div style="position:absolute; top:0; left:0; z-index:-1"> -->
			
		<!-- </div> -->
	
		<!--
		<select id="language_dropdown" onchange="changeLanguage(this.value);">
			<option value="en">English</option>
			<option value="ru">Russian</option>
			<option value="es">Español</option>
			<option value="fr">Fran&#231;ais</option>
			<option value="de">Deutsche</option>
			<option value="nl">Nederlands</option>
			<option value="it">Italiano</option>
			<option value="pt">Portugu&#234;s</option>
			<option value="ja">Japanese</option>
			<option value="zh">Chinese</option>
			<option value="ko">Korean</option>
		</select>
		<br>
		-->
		<!-- Page Content -->
		<!-- BEGIN # Play button INFO -->	
		
	<div class="main-content">
		<div class="video-wrap video">
			<video id="background-video" poster="/img/homepage/desert-2.jpg" preload="auto" loop=true autoplay=true muted=true >
				<source id="mp4" src="/video/desert-2.mp4" type="video/mp4">	
				<source id="webm" src="/video/desert-2.webm" type="video/webm">	
			</video>
		</div>
		
			<div class="channel left">
				<!-- <div class="column"> -->
				<div class="header" id="login-create-account-header">Log in</div>
				<div class="header" id="logged-in-container">
					<div id="user-name"></div>
					<div id="logout">Logout</div>
				</div>
				<div class="header">Game Modes</div>
				<div class="mode-select-container">
					<div id="play-4-v-4" class="mode-select-button border-bottom">
						<img class="icon-game-mode" src="img/game-mode-icons/4v4.png" alt="">
						<div>SPEED 4v4 <span style="background-color:var(--color-1)">&nbsp;NEW!&nbsp;</span></div>
					</div>
					<div id="play-team-battle" class="mode-select-button border-bottom">
						<img class="icon-game-mode" src="img/game-mode-icons/team-battle.png" alt="">
						<div>CLASSIC 8v8</div>
					</div>	

					<div id="play-br" class="mode-select-button border-bottom">
						<img class="icon-game-mode" src="img/game-mode-icons/battle-royale.png" alt="">
						<div>BATTLE ROYALE</div>
					</div>	

					<div id="play-survival-death-match" class="mode-select-button">
						<img class="icon-game-mode" src="img/game-mode-icons/survival.png" alt="">
						<div>SURVIVAL</div>
					</div>

				</div>
				<!-- <div class="fixed-body body-color icons" id="login-icons">
					<div id="google_custom_signin" title="Google Login!" style="height:40px;"></div>
					<img id="vkpopup" class="icon" src="img/vk_logo.png" style="cursor:pointer" title="VK Login">
					<img id="fbpopup" class="icon" src="img/f_logo.png" style="cursor:pointer" title="Facebook Login">
					<img id="stpopup" class="icon" src="img/s_logo.png" style="cursor:pointer" title="Steam Login">
					<img id="twpopup" class="icon" src="img/t_logo.png" style="cursor:pointer" title="Twitch Login">
					<img id="y8popup" class="icon" src="img/y8_logo.png" style="cursor:pointer"title="S8 Login" > 							
				</div> -->
				<div class="header">Friends</div>
				<div id="friend-timer" class="countdown-bar" data-style="smooth" style="--duration: 10;">
					<div></div>
				</div>
				<div id="friends" class="flex-body body-color friends scrollbar">
					
					<div id="friend-list">
					
						<div v-for="friend of friends" class='friend border-bottom' :class=friend.serverName :data-id=friend.uid :data-join=friend.joinText>
								<div class="friend-info">
									<div class="join-status" :class=friend.joinText> 
									</div>
									<div class="friend-details">
										<div class='name'>{{friend.name}}</div>
										<div v-if="friend.gameMode" class='server game-mode'>{{friend.gameMode}}</div>
										<div v-if="friend.gameMode" class='server join-text' :class=friend.joinText>Click to {{friend.joinText}}</div>					
									</div>
								</div>
						</div>
						
					</div>
					
					<div id="log-in-friend-msg">
						Logged in players can build a friend list to make it easier to play together.
					</div>
				</div>
					
				<div class="header discord-community">
					<a class="icon-href" href="https://discord.gg/zBEzZQMG2J" target=""><img class="icon" src="img/discord_support_icon.png" alt=""></a>
					<a href="https://discord.gg/zBEzZQMG2J" target="" style="text-decoration: none; color: white;"><div style="margin-left:10px;">Discord</div></a>
				</div>
				<!-- <div class="fixed-body body-color support-text">
					<a class="icon" href="https://discord.gg/zBEzZQMG2J" target=""><img class="icon" src="img/social-media/discord.png" alt=""></a>
					<div style="margin-left:10px">Discord community</div>
				</div>				 -->
				<!-- </div> -->
			</div>
			<div class="center-channel">
				<img class="wb-logo" src="/img/ui_logo_200.png" alt="">	
				<div class="play-now-container">
					<div id="play-now" class="mode-select-play-now">
						<div class="play-now">PLAY NOW!</div>
					</div>
				</div>

				<!--
				<div class="wb-promo-container">
					<div id="promo-header" class="header">Zombie Battle Royale!</div>
					<div class="promo-details-background">
						<img src="https://stats.warbrokers.io/images/event/zombie2.gif" id="wb-promo" class="wb-promo">
					</div>
				</div>
				-->
				
				<!-- <div class="login-button-div-container" id="fbpopup">
					<div id="google_custom_signin" title="Google Login!"></div>
				</div> -->
				<div class="login-overlay">
					<!-- <div class="login-container"> -->
						
						<!-- google -->
						<div class="login-button-div-container" id="gpopup">
							<div class="login-icon-container">
								<!--
								<img class="login-icon" src="img/g_logo.png" alt="">
								-->
								<div class="g_id_signin" data-type="icon"></div>
							</div>
							<!--
							<div class="login-button-div google" id="googleLoginButton">Sign in with Google</div>
							-->
							<div class="login-button-div google">
								<div class="g_id_signin" data-type="standard"></div>
							</div>
						</div>
						<!-- facebook -->
						<div class="login-button-div-container" id="fbpopup">
							<div class="login-icon-container">
								<img class="login-icon" src="img/f_logo.png" alt="">
							</div>
							<div class="login-button-div facebook" >Sign in with Facebook</div>
						</div>
						<!-- steam -->
						<div class="login-button-div-container" id="stpopup">
							<div class="login-icon-container">
								<img class="login-icon" src="img/st_logo.png" alt="">
							</div>
							<div class="login-button-div steam" >Sign in with Steam</div>
						</div>
						<!-- twitch -->
						<div class="login-button-div-container" id="twpopup">
							<div class="login-icon-container">
								<img class="login-icon" src="img/t_logo.png" alt="">
							</div>
							<div class="login-button-div twitch" >Sign in with Twitch</div>
						</div>
						<!-- vk -->
						<div class="login-button-div-container" id="vkpopup">
							<div class="login-icon-container">
								<img class="login-icon" src="img/vk_logo.png" alt="">
							</div>
							<div class="login-button-div vk" >Sign in with VK</div>
						</div>
						<!-- y8 -->
						<div class="login-button-div-container" id="y8popup" style="display:none">
							<div class="login-icon-container">
								<img class="login-icon" src="img/y8_logo.png" alt="">
							</div>
							<div class="login-button-div y8" >Sign in with Y8</div>
						</div>
					<!-- </div> -->
				</div>
			</div>

			<div class="channel right">
				<div class="header discord-community">
					<a class="icon-href" href="https://discord.gg/zBEzZQMG2J" target=""><img class="icon" src="img/discord_support_icon.png" alt=""></a>
					<a href="https://discord.gg/zBEzZQMG2J" target="" style="text-decoration: none; color: white;"><div style="margin-left:10px;">Discord</div></a>
				</div>
				<div class="twitch-streamers-container">
					<div class="header">Streaming</div>
					<div id="twitchStreamers" class="flex-body body-color twitch-streamers scrollbar">
							
					</div>
				</div>
				<!-- <div class="stats-container"> -->
					<div id="stats-header" class="header">Stats & More</div>
					<div id="stats-header-sm" class="header">Stats</div>
					<div id="stats" class="flex-body body-color scrollbar">
						<a class="stat-link text-box border-bottom" href="https://stats.warbrokers.io" id="my-stats" target="_blank">MY STATS</a>
						<a class="stat-link text-box border-bottom" style="display:none" href="#" id="my-stats-not-logged-in">LOG IN FOR YOUR STATS</a>
						<a class="stat-link text-box border-bottom stat-link-secondary" href="https://stats.warbrokers.io/top/daily?type=weaponKills" target="_blank">DAILY LEADERS</a>
						<a class="stat-link text-box border-bottom stat-link-secondary" href="https://stats.warbrokers.io/top/killsPerWeapon" target="_blank">ALL TIME LEADERS</a>
						<a class="stat-link text-box border-bottom stat-link-secondary" href="https://stats.warbrokers.io/media/maps" target="_blank">MAPS</a>
						<a class="stat-link text-box border-bottom stat-link-secondary" href="https://stats.warbrokers.io/game/inventory" target="_blank">BATTLE ROYALE ITEMS</a>
						<a class="stat-link text-box border-bottom stat-link-secondary" href="https://stats.warbrokers.io/media/videos" target="_blank">VIDEOS</a>
						<a class="stat-link text-box border-bottom stat-link-secondary" href="https://stats.warbrokers.io/media/comics" target="_blank">COMICS</a>
						<a class="stat-link text-box border-bottom stat-link-secondary" href="//support.html" target="_blank">SUPPORT</a>
					<!-- </div> -->
				</div>
				<div class="header social-media">
					<!-- <div class="social-media-icons-container"> -->
						<a class="icon-href" href="https://www.reddit.com/r/warbrokers/" target='_blank'><img class="icon" src="img/social-media/reddit.png" alt=""></a>
						<a class="icon-href" href="https://www.instagram.com/warbrokers.io" target='_blank'><img class="icon" src="img/social-media/instagram.png" alt=""></a>
						<a class="icon-href" href="https://twitter.com/WarBrokers" target='_blank'><img class="icon" src="img/social-media/twitter.png" alt=""></a>
						<a class="icon-href" href="https://www.facebook.com/warbrokers/" target='_blank'><img class="icon" src="img/social-media/facebook.png" alt=""></a>
					<!-- </div> -->
				</div>
				<div class="ad-1-square-container">
					<!-- <img src="img/ad1.png" class="ad-1"> -->
					<!-- <img src="img/ad1_sm.png" class="ad-1"> -->
					<div id="warbrokers-io_300x250" class="ad-1"></div>
				</div>
			</div>

			<div class="ad-2-banner-small-container">
				<!-- <img src="img/ad2.png" class="ad-2-banner-small"> -->
				<!-- <div id="warbrokers-io_970x250" class="ad-2-banner-small"></div> -->	
				<div id="warbrokers-io_728x90" class="ad-2-banner-small"></div>
			</div>
			
	</div>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/popper/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/lodash/4.13.1/lodash.min.js"></script>
		<!--
		<script src="js/main.js"></script>
		-->
		<script src="message.js"></script>
		<script src="filtered_words.js"></script>


		<script>
			var fromPoki = false;
			try {
				if (window.parent.location.href.includes("poki")) {
					fromPoki = true;
				}
			} catch(err) {
			}
			
			var fromFrame = false;
			try {
				fromFrame = (window.self !== window.top);
			} catch (e) {
				fromFrame = true;
			}

			var game_token;
							game_token = getCookie("game_token");
						var nick = "guest";
			var uid = "";
			var production = "1";
			
			if (game_token !== null) {
				gameLogin(game_token, nick, 0)
			}

			var langCode = "en";
			var urlParams = "";
			if (game_token == null) {
				urlParams = "&autoJoin=true";
			}
			var agent = navigator.userAgent;
			var playSessionCount = "";
			var playersOnline = "";
			var game3d = "game3d.php";
			if (agent.includes("Firefox")) {
				//urlParams = "&firefox=true";
			}
			if (agent.includes("Macintosh")) {
				//urlParams = urlParams + "&ssl=true";
			}
			if (agent.match(/Mobi/i)) {
				game3d = "mobile.php";
			}
			var showCompMode = true;

			// if (friends.length == 0){
			// // if (0 == 0){
			// 	document.getElementById('friend-list').style.display="none"
			// 	document.getElementById('log-in-friend-msg').style.display="flex"
			// } 
			// else {
			// 	debugger
			// }

			// function hasGameToken(inToken,inNick,inSteam) {
			// 	urlParams = urlParams + "&autoJoin=true";				
			// 	document.getElementById('friend-list').style.display="block"
			// 	document.getElementById('my-stats').href = `https://stats.warbrokers.io/players/i/${uid}`

			// 	$('#logged-in-container #user-name').text(inNick);
			// 	$('#logged-in-container #user-name').css('display', 'flex');
			// 	$('#logged-in-container #logout').css('display', 'flex');
			// 	$('#logged-in-container').css('display', 'flex');
			// 	$('#login-create-account-header').css('display', 'none');
			// }

			// function noGameToken() {
			// 	document.getElementById('log-in-friend-msg').style.display="flex"
			// 	document.getElementById('friend-list').style.display="none"
			// 	document.getElementById('my-stats').style.display="none"
			// 	document.getElementById('my-stats-not-logged-in').style.display="flex"
			// }

			
			// if (game_token == null) {
			// 	noGameToken();
			// } else {
			// 	hasGameToken();
			// }

			if (fromPoki) {
				urlParams = urlParams + "&poki=true";
				$(".ad-1-square-container").css('display', 'none')
				$(".ad-2-banner-small-container").css('display', 'none')
				$(".social-media").css('display', 'none')
				$(".discord-community").css('display', 'none')
			}

			if (!fromFrame) {
				$("#y8popup").css('display', 'flex');
				// *********************** *********************** *********************** ***********************
				// document.getElementById('twitchStreamers').hidden = false;
				// *********************** *********************** *********************** ***********************

//				document.getElementById('stats_banner').hidden = false;

				// document.getElementById('socialMedia').hidden = false;
			}

			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}
			
			function getPlayersOnline() {
				$.get(
					"players_online.php",
					function(data,status) {
						if (status == "success") {
							playersOnline = data;
							document.getElementById("playersOnline").innerHTML = "<div>" + playersOnline + " " + Message("PLAYERS ONLINE") + "</div>";
						}
					}
				);
			}

			function changeLanguage(code) {
//				//console.log("code is " + code);
//				langCode = code;
//				if (fromPoki) {
//					document.getElementById("playContainer").innerHTML = Message("Play Now!");
//				} else {
//					document.getElementById("playContainer").innerHTML = Message("Play Free Now!");
//				}
//				//document.getElementById("steam").innerHTML = Message("Sign in with Steam");
//				document.getElementById("steam").innerHTML = "<span><i class='fa fa-steam fa-fw' aria-hidden='true'></i></span><span style='font-size: 1.00rem;'>&nbsp; " + Message("Sign in with Steam") + "</span>";
//				//document.getElementById("vkpopup").innerHTML = Message("Sign in with VK");
//				document.getElementById("vkpopup").innerHTML = "<span><i class='fa fa-vk fa-fw' aria-hidden='true'></i></span><span style='font-size: 1.00rem;'>&nbsp; " + Message("Sign in with VK") + "</span>";
//				//document.getElementById("twitch").innerHTML = Message("Sign in with Twitch");
//				document.getElementById("twitch").innerHTML = "<span><i class='fa fa-twitch fa-fw' aria-hidden='true'></i></span><span style='font-size: 1.00rem;'>&nbsp; " + Message("Sign in with Twitch") + "</span>";
//				document.getElementById("playGuest").innerHTML = Message("Play as Guest");
//				document.getElementById("signout").innerHTML = Message("Sign Out");
//				document.getElementById("do_not_save").innerHTML = Message("Do not save my progress:");
////				document.getElementById("do_not_save_x").innerHTML = Message("Do not save my progress:");
////				document.getElementById("text-login-msg").innerHTML = Message("Enter a nickname:");
//				document.getElementById("text-signedin-msg").innerHTML = Message("Enter a nickname:");
//				//document.getElementById("save-progress").innerHTML = Message("Save my progress, log me in using:");
//				document.getElementById("save-progress").innerHTML = Message("Sign in and save my progress:");
//				if (fromPoki) {
//					document.getElementById("playButton").innerHTML = "<span>&nbsp; " + Message("Play Now!") + "</span>";
//				} else {
//					document.getElementById("playButton").innerHTML = "<span>&nbsp; " + Message("Play Free Now!") + "</span>";
//				}
//				document.getElementById("stats-page").innerHTML = Message("View Stats");
//				document.getElementById("playerCount").innerHTML = "<br><htmlShadow>" + playSessionCount + " " + Message("play sessions and counting...") + "</htmlShadow>";
//				if (googleLogin || facebookLogin || steamLogin || twitchLogin || vkLogin || idnetLogin) {
//					setLoggedIn();
//				}
//				value = 0;
//				if (code == "ru") value = 1;
//				if (code == "es") value = 2;
//				if (code == "fr") value = 3;
//				if (code == "de") value = 4;
//				if (code == "nl") value = 5;
//				if (code == "it") value = 6;
//				if (code == "pt") value = 7;
//				if (code == "ja") value = 8;
//				if (code == "zh") value = 9;
//				if (code == "ko") value = 10;
//				document.getElementById("language_dropdown").selectedIndex = value;
			}

			$("#play-now").hover(function(){
				$(".mode-select-button").addClass('red-background')
			},function(e){
				$(".mode-select-button").removeClass('red-background')
			});

			$(document).on('mouseenter', '.friend', function () {
				$(this, ".friend").find('.game-mode').css('display', 'none')
				$(this, ".friend").find('.join-text').css('display', 'flex')
			});
			$(document).on('mouseleave', '.friend', function () {
				$(this, ".friend").find('.game-mode').css('display', 'flex')
				$(this, ".friend").find('.join-text').css('display', 'none')
			});
		

			$(".mode-select-button").hover(function(){
				$(this).addClass('red-background')
			},function(e){
				$(this).removeClass('red-background')
			});

			
			
			
			
			$("#logout").click(
				function() {
					document.location.href = `/reset_cookies.php`;
				}
			);
			$(document).on('click', '.friend', function () {
				if(!$(this).hasClass("Offline")) {
					document.location.href = game3d + "?nick=" + encodeURIComponent(nick) + urlParams + "&friend=" + $(this).data('id');
				}
			});
			$("#play-now").click(
				function() {
					document.location.href = game3d + "?nick=" + encodeURIComponent(nick) + urlParams + "&classic=true";
				}
			);
			$("#play-4-v-4").click(
				function() {
					document.location.href = game3d + "?nick=" + encodeURIComponent(nick) + urlParams + "&fvf=true&autoJoin=true";
				}
			);
			$("#play-team-battle").click(
				function() {
					document.location.href = game3d + "?nick=" + encodeURIComponent(nick) + urlParams + "&classic=true";
				}
			);
			$("#play-br").click(
				function() {
					document.location.href = game3d + "?nick=" + encodeURIComponent(nick) + urlParams + "&battleRoyale=true";
				}
			);
			$("#play-survival-death-match").click(
				function() {
					document.location.href = game3d + "?nick=" + encodeURIComponent(nick) + urlParams + "&dead=true&autoJoin=true";
				}
			);


			$(".wb-promo-container").click(
				function() {
					document.location.href = game3d + "?nick=" + encodeURIComponent(nick) + urlParams + "&battleRoyale=true";
				}
			);


			//langCode = navigator.language.slice(0,2);
			changeLanguage(langCode);

			$("#discord_popup").click(
				function() {
					window.open("https://discordapp.com/invite/warbrokers");
				}
			);
			$("#reddit_popup").click(
				function() {
					window.open("https://www.reddit.com/r/warbrokers/");
				}
			);
			$("#insta_popup").click(
				function() {
					window.open("https://www.instagram.com/warbrokers.io/");
				}
			);
			$("#twitter_popup").click(
				function() {
					window.open("https://twitter.com/warbrokers");
				}
			);
			$("#facebook_popup").click(
				function() {
					window.open("https://www.facebook.com/warbrokers/");
				}
			);

			// Cookie functions

			function setCookie(cname, cvalue, exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays*24*60*60*1000));
				var expires = "expires="+ d.toUTCString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}

			function setGlobalCookie(cname, cvalue, exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays*24*60*60*1000));
				var expires = "expires="+ d.toUTCString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}

			function getCookie(key) {
				var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
				return keyValue ? keyValue[2] : null;
			}

			// Insert ads and analytics

			function insertGoogleStuff() {
				// Google analytics
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
				ga('create','UA-109067681-1','auto');
				ga('send','pageview');
			}

			// Save prefrerred servers if we have a storage permission

			function saveLocation(doGoogs) {
				// Read location and save cookies and local storage
				$.get(
					"get_location.php",
					function(data,status) {
						if (status == "success") {
							var result = data.split(',');
							// console.log("Continent code is " + result[0]);
							// console.log("Country code is " + result[1]);
							// console.log("State code is " + result[2]);
							// console.log("Server code is " + result[3]);
							// console.log("BR Server code is " + result[4]);
							// console.log("Comp Server code is " + result[5]);
							try {
								localStorage.setItem("continent",result[0]);
								localStorage.setItem("country",result[1]);
								localStorage.setItem("state",result[2]);
								localStorage.setItem("server",result[3]);
								localStorage.setItem("brServer",result[4]);
								localStorage.setItem("compServer",result[5]);
								localStorage.setItem("deadServer",result[6]);
								localStorage.setItem("fvfServer",result[7]);
							} catch (e) {
							}
							if (doGoogs) {
								if ((result[0] != "EU") && !fromPoki) {
									// Setup adinplay
									window.aiptag = window.aiptag || {cmd: []};
									aiptag.cmd.display = aiptag.cmd.display || [];
									// Use adinplay ad, from frame, no CMP
									aiptag.cmd.display.push(function() { aipDisplayTag.display('warbrokers-io_728x90'); });
									//aiptag.cmd.display.push(function() { aipDisplayTag.display('warbrokers-io_970x250'); });
									aiptag.cmd.display.push(function() { aipDisplayTag.display('warbrokers-io_300x250'); });
								}
								insertGoogleStuff();
							}
						}
					}
				);
			}

			// Set an interval until we get consent

			if (!fromFrame) {
				// Get location, store it
				saveLocation(false);
				// Use adinplay
				window.aiptag = window.aiptag || {cmd: []};
				aiptag.cmd.display = aiptag.cmd.display || [];
				// CMP tool settings
				aiptag.cmp = {
					show: true,
					position: "centered",  //centered, bottom
					button: true,
					buttonText: "Privacy settings",
					buttonPosition: "bottom-right" //bottom-left, bottom-right, top-left, top-right
				}
				// Use adinplay ad
				aiptag.cmd.display.push(function() { aipDisplayTag.display('warbrokers-io_728x90'); });
				//aiptag.cmd.display.push(function() { aipDisplayTag.display('warbrokers-io_970x250'); });
				aiptag.cmd.display.push(function() { aipDisplayTag.display('warbrokers-io_300x250'); });
				// Insert google analytics
				insertGoogleStuff();
			} else {
				// From frame, display ad if not in EU and not from Poki
				saveLocation(true);
			}

		// Show/hide sign-in buttons
		var token = getCookie("game_token");
		var hasSteam = 0;
		// var signInVisible = false;
		// function hideSignInButtons() {
		// 	document.getElementById('google_custom_signin').hidden = true;
		// 	document.getElementById('vkpopup').hidden = true;
		// 	document.getElementById('fbpopup').hidden = true;
		// 	document.getElementById('stpopup').hidden = true;
		// 	document.getElementById('twpopup').hidden = true;
		// 	document.getElementById('y8popup').hidden = true;
		// 	signInVisible = false;
		// 	// if (hasSteam == 0) {
		// 	// 	document.getElementById('atpopup').hidden = false;
		// 	// } else {
		// 	// 	document.getElementById('atpopup').hidden = true;
		// 	// }
		// }
		// function showSignInButtons() {
		// 	if (token == null) {
		// 		document.getElementById('google_custom_signin').hidden = false;
		// 		document.getElementById('vkpopup').hidden = false;
		// 		document.getElementById('fbpopup').hidden = false;
		// 		document.getElementById('stpopup').hidden = false;
		// 		document.getElementById('twpopup').hidden = false;
		// 		document.getElementById('y8popup').hidden = fromFrame;
		// 		signInVisible = true;
		// 	} else {
		// 		hideSignInButtons();
		// 	}
		// }


		// Game login
		function gameLogin(inToken,inNick,inSteam) {
			$('.login-overlay').css('display', 'none');
			token = inToken;

			urlParams = "";
			
			//urlParams = urlParams + "&autoJoin=true";
			// document.getElementById('log-in-friend-msg').style.display="none"
			document.getElementById('my-stats').href = `/view_stats.php?token=${inToken}`

			$('#log-in-friend-msg').text("Loading friend list...");
			$('#logged-in-container #user-name').text(inNick);
			$('#logged-in-container #user-name').css('display', 'flex');
			$('#logged-in-container #logout').css('display', 'flex');
			$('#logged-in-container').css('display', 'flex');
			$('#login-create-account-header').css('display', 'none');
			
			setGlobalCookie("game_token",token,30);
			hasSteam = inSteam;
			if (inSteam != 0) {
				console.log("User has steam attached");
			} else {
				console.log("User does not have steam attached");
			}

			if (fromFrame) {
				urlParams = urlParams + "&token=" + token;
			}
		}




		// // Google sign-in while playing
		// function onGoogleSignIn(googleUser) {
		// 	if (!signInVisible) {
		// 		return;
		// 	}
		// 	var profile = googleUser.getBasicProfile();
		// 	console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
		// 	console.log('Name: ' + profile.getName());
		// 	console.log('Image URL: ' + profile.getImageUrl());
		// 	console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
		// 	var id_token = googleUser.getAuthResponse().id_token;
		// 	console.log('Token: ' + id_token);
		// 	$.get(
		// 		"login.php?google_token=" + id_token,
		// 		function(data,status) {
		// 			if (status == "success") {
		// 				var json = JSON.parse(data);
		// 				if (typeof json.error === 'undefined') {
		// 					gameLogin(json.token,json.nick,json.hasSteam);
		// 				}
		// 			}
		// 		}
		// 	);
		// }
		// function onGoogleFailure(error) {
		// }
		// function renderGoogleButton() {
		// 	gapi.signin2.render(
		// 		'google_custom_signin', {
		// 			'scope': 'profile email',
		// 			'height': 80,
		// 			'width': 400,
		// 			'longtitle': true,
		// 			'theme': 'dark',
		// 			'onsuccess': onGoogleSignIn,
		// 			'onfailure': onGoogleFailure
		// 		}
		// 	);
		// }
		// VK sign in while playing
		function doVKLogin(data) {
			$.get(
				"login.php?vkexpire=" + data.session.expire +
					"&vkmid=" + data.session.mid +
					"&vksecret=" + data.session.secret +
					"&vksid=" + data.session.sid +
					"&vksig=" + data.session.sig,
				function(data,status) {
					if (status == "success") {
						var json = JSON.parse(data);
						if (typeof json.error === 'undefined') {
							gameLogin(json.token,json.nick,json.hasSteam);
						}
					}
				}
			);
		}
		try {
			$("#vkpopup").click(
				function() {
					if (typeof(VK) === 'undefined') {
				       		// Load VK asynchronously
				       		window.vkAsyncInit = function() {
				       			VK.init({apiId: 5954993});
				       			VK.Observer.subscribe("auth.login", function f(data) {
				       				//doVKLogin(data);
				       			})
							VK.Auth.login(
								function(data) {
									//console.log("login");
									if (data.session !== null) {
										doVKLogin(data);
									}
								},
								0 //4194304
							);
				       		};
				       		setTimeout(function() {
				       			var el = document.createElement("script");
				       			el.type = "text/javascript";
				       			el.src = "//vk.com/js/api/openapi.js";
				       			el.async = true;
				       			document.getElementById("vk_api_transport").appendChild(el);
				       		},0);
					} else {
						VK.Auth.login(
							function(data) {
								//console.log("login");
								if (data.session !== null) {
									doVKLogin(data);
								}
							},
							0 //4194304
						);
					}
				}
			);
		} catch(err) {
		}

		// FB signin while playing
		function setFacebookToken(fb_token) {
			$.get(
				"login.php?facebook_token=" + fb_token,
				function(data,status) {
					if (status == "success") {
						var json = JSON.parse(data);
						if (typeof json.error === 'undefined') {
							gameLogin(json.token,json.nick,json.hasSteam);
						}
					}
				}
			);
		}
		try {
			$("#fbpopup").click(
				function() {
					var that = this;
					that._oauthWindow = window.open(
					    	"https://www.facebook.com/v3.0/dialog/oauth?client_id=751381665027173&redirect_uri=//inline_redirect.php&state=true&response_type=token",
						"Connect with Facebook",
						'location=0,status=0,width=1024,height=768,top=' + ((window.screen.height - 768) / 2) + ',left=' + ((window.screen.width - 1024) / 2)
					);
					that._oauthInterval = window.setInterval(
						function() {
							if (that._oauthWindow.closed) {
								window.clearInterval(that._oauthInterval);
								//onFacebookClose();
							}
						},
						1000
					);
				}
			);
		} catch(err) {
		}
		// Steam siginin while playing
		var attachingSteam = false;
		function setSteamLogin(inToken,inNick) {
			if (attachingSteam) {
				$.get(
					"attach_steam_v2.php?token=" + token + "&steamToken=" + inToken,
					function(data,status) {
						if (status == "success") {
							//gameLogin(inToken,inNick,1);
							hasSteam = true;
							document.getElementById('atpopup').hidden = true;
						}
					}
				);
			} else {
				gameLogin(inToken,inNick,1);
			}
		}
		try {
			$("#stpopup").click(
				function() {
					var that = this;
					attachingSteam = false;
					that._oauthWindow = window.open(
					    	"//login_steam.php",
						"Sign in with Steam",
						'location=0,status=0,width=800,height=600,top=' + ((window.screen.height - 600) / 2) + ',left=' + ((window.screen.width - 800) / 2)
					);
					that._oauthInterval = window.setInterval(
						function() {
							if (that._oauthWindow.closed) {
								window.clearInterval(that._oauthInterval);
							}
						},
						1000
					);
				}
			);
		} catch(err) {
		}
		// Attach steam to other account while playing
		try {
			$("#atpopup").click(
				function() {
					var that = this;
					attachingSteam = true;
					that._oauthWindow = window.open(
					    	"//login_steam.php",
						"Attach Steam to account",
						'location=0,status=0,width=800,height=600,top=' + ((window.screen.height - 600) / 2) + ',left=' + ((window.screen.width - 800) / 2)
					);
					that._oauthInterval = window.setInterval(
						function() {
							if (that._oauthWindow.closed) {
								window.clearInterval(that._oauthInterval);
							}
						},
						1000
					);
				}
			);
		} catch(err) {
		}
		// Twitch signin while playing
		function setTwitchLogin(inToken,inNick,inSteam) {
			gameLogin(inToken,inNick,inSteam);
		}
		try {
			$("#twpopup").click(
				function() {
					var that = this;
					that._oauthWindow = window.open(
					    	"//login_twitch.php",
						"Sign in with Steam",
						'location=0,status=0,width=800,height=600,top=' + ((window.screen.height - 600) / 2) + ',left=' + ((window.screen.width - 800) / 2)
					);
					that._oauthInterval = window.setInterval(
						function() {
							if (that._oauthWindow.closed) {
								window.clearInterval(that._oauthInterval);
							}
						},
						1000
					);
				}
			);
		} catch(err) {
		}
		// Y8 while playing
		var idCallback = function(response) {
			if (response) { // That means that the server processed the response
				console.log(response);
				// authResponse.code
				// authResponse.redirect_uri
				if (response.authResponse != null) {
					response.authResponse.redirect_uri = '';
					$.get(
						"login.php?idnet_code=" + response.authResponse.code,
						function(data,status) {
							if (status == "success") {
								var json = JSON.parse(data);
								if (typeof json.error === 'undefined') {
									gameLogin(json.token,json.nick,json.hasSteam);
								}
							}
						}
					);
				}
			}
		}
		try {
			if (!fromFrame) {
				$('#y8popup').click(
					function() {
						// No more full screen
						if (typeof(ID) === 'undefined') {
							// Load api
							(function(d, s, id){
								var js, fjs = d.getElementsByTagName(s)[0];
								if (d.getElementById(id)) {return;}
								js = d.createElement(s); js.id = id;
								js.src =  document.location.protocol == 'https:' ? "https://scdn.id.net/api/sdk.js" : "http://cdn.id.net/api/sdk.js";
								fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'id-jssdk'));
							// On init of API do this...
							window.idAsyncInit = function() {
								// use an id.net event to wait until after init
								ID.Event.subscribe('id.init', function(){
									ID.login(idCallback);
								});
								// init the JS interface
								ID.init({
									appId : '5a022b9ed559308e1e51291a',
									status : true,
									responseType  : 'code',
									redirectUri : ''
								});
							}
						} else {
							ID.login(idCallback);
						}
					}
				);
			}
		} catch(err) {
		}
		// showSignInButtons();


		var modes = [
			{modeId: 0, modeName: 'Death Match'},
			{modeId: 7, modeName: 'Capture Point'},
			{modeId: 8, modeName: 'Vehicle Escort'},
			{modeId: 9, modeName: 'Package Drop'},
			{modeId: 10, modeName: 'Missile Launch'},
			{modeId: 11, modeName: 'Battle Royale'},
			{modeId: 12, modeName: 'Competitive'},
			{modeId: 13, modeName: 'Competitive Lobby'},
			{modeId: 14, modeName: 'Battle Royale Lobby'}
		]
		

		var vm = new Vue({
		el: '#friend-list',
		data: () => ({
			friends: [
				{
					name: '',
					uid: '',
					online: '',
					serverName: '',
					serverAddress: '',
					playerCount: '',
					unique: ''
				}
			]
		}),
		created: function () {
			var x = 0
			this.getFriends()
			setInterval(() => {
				this.getFriends(x)
			}, 10000);
		},
		methods: {
			getGameToken: function() {
				cookie = document.cookie.split(";");
				for (cookieValue of cookie){
					items = cookieValue.split('=') 
					if(items[0].trim() == 'game_token'){
						return items[1].trim()
					}
				}	
				return null
			},
			getFriends: function() {
				var viewObject = this
				if(production){
					let game_token = this.getGameToken()
					if(game_token !== null) {
						$.ajax({
							type: "get",
							headers: {
								"Access-Control-Allow-Origin":"*"
							},
							url: `//get_friend_list.php?token=${game_token}`,
							success: function(data,status) {
								viewObject.processFriends(data.split("\n"))
							},
							error: function(XMLHttpRequest, textStatus, errorThrown) { 
								console.log("Status: " + textStatus);
								console.log("Error: " + errorThrown); 
							}
						})
					}
				} else {
					var responseData = "``";
					if(responseData !== null) {
						this.processFriends(responseData)
					}
					
				}
				
			},
			processFriends: function(data) {
				data.shift()
				// console.log(data);
				// x = x == 0 ? 1 : 0
				// console.log('after:', x)

				let limit = (data.length)/7

				let start = 0
				let i = 0
				let friendArray = []
				let friend
				let gameMode,serverName

				while (i < limit){
					friend = data.slice(start, start+8)
					gameMode = friend[5].replace("\n", "")
					serverName = friend[2].replace("\n", "")

					let joinText, gameModeText, teamText
					if(serverName == 'Offline') {
						gameModeText = ''
						joinText = ''
					} else {
						if((gameMode & 128) !== 0){
							teamText = 'Team '
						} else {
							teamText = ''
						}
						gameModeText = teamText + _.find(modes, {modeId: (gameMode & 63)}).modeName
						if((gameMode & 64) == 0) {
							joinText = 'join'
						} else {
							joinText = 'spectate'
						}
					}
					
					// console.log(name, gameMode)
					// if(gameMode == 128) {
					// 	debugger;
					// }
					friendArray.push(
						{
							name: friend[0].replace("\n", ""),
							uid: friend[1].replace("\n", ""),
							online: friend[2].replace("\n", "") == 'Offline' ? 0 : 1,
							serverName: serverName,
							serverAddress: friend[3].replace("\n", ""),
							playerCount: friend[4].replace("\n", ""),
							gameMode: gameModeText,
							unique: friend[6].replace("\n", ""),
							joinText: joinText
						}
					)
					i++
					start+=7
				}
				friendArray = _.orderBy(friendArray, ["online", "name"], ["desc", "asc"])
				// friendArray[0].name= Math.floor((Math.random() * 100) + 1)
				$('#log-in-friend-msg').css('display', 'none');
				$('#friend-list').css('display', 'block');
				var el = $("#friend-timer"),  
				newone = el.clone(true);
				el.before(newone);
				$("." + el.attr("class") + ":last").remove();
				this.friends = friendArray	
			}
		}
	})

	var loginOverlay = $(".login-overlay")
	var loginOverlayActivator = $("#login-create-account-header")

	$(document).on("keydown", function(e) {
		if (e.keyCode === 27) {
			$(loginOverlay).fadeOut("fast");
		}
	});

	$( document ).on( 'click', function( event ) {
		$(loginOverlay).fadeOut("fast");
	});

	$(loginOverlayActivator).on("click", function(e) {
		$(loginOverlay).fadeToggle("fast").css('display', 'flex');
		e.stopPropagation();
	});







</script>

<!--
<script src="https://apis.google.com/js/api:client.js"></script>
<script>

	var googleUser = {};
	var startApp = function() {
		gapi.load('auth2', function(){
		// Retrieve the singleton for the GoogleAuth library and set up the client.
		auth2 = gapi.auth2.init({
			client_id: '599730189065-7rvno7a8a1ntrlmlsvil6ca51vp2mqfn.apps.googleusercontent.com',
			cookiepolicy: 'single_host_origin',
			// Request scopes in addition to 'profile' and 'email'
			//scope: 'additional_scope'
		});
		attachSignin(document.getElementById('googleLoginButton'));
		});
	};
	function attachSignin(element) {
		console.log(element.id);
		auth2.attachClickHandler(element, {},
			function(googleUser) {
				var id_token = googleUser.getAuthResponse().id_token;
				console.log('Token: ' + id_token);
				$.get(
					"login.php?google_token=" + id_token,
					function(data,status) {
						if (status == "success") {
							var json = JSON.parse(data);
							if (typeof json.error === 'undefined') {
								gameLogin(json.token,json.nick,json.hasSteam);
							}
						}
					}
				);
			}, function(error) {
				console.log(error)
			});
	}
</script>
-->
<script src="https://accounts.google.com/gsi/client" async defer></script>
<div id="g_id_onload"
	data-client_id="599730189065-7rvno7a8a1ntrlmlsvil6ca51vp2mqfn.apps.googleusercontent.com"
	data-callback="gotGoogleLogin"
	data-auto_prompt="false"
</div>
<script>
	function gotGoogleLogin(googleUser) {
		var id_token = googleUser.credential;
		console.log('Token: ' + id_token);
		$.get(
			"login.php?google_token=" + id_token,
			function(data,status) {
				if (status == "success") {
					var json = JSON.parse(data);
					if (typeof json.error === 'undefined') {
						gameLogin(json.token,json.nick,json.hasSteam);
					}
				}
			}
		);
	}
</script>


<script async src="//api.adinplay.com/libs/aiptag/pub/WBR/warbrokers.io/tag.min.js"></script>
<!-- <script src="https://apis.google.com/js/platform.js?onload=renderGoogleButton" async defer></script> -->
<!--
<script>startApp();</script>
-->
		
</body>
	
</html>
