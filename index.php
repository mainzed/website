<?php
	include_once 'php/common.php';
?>
	<!DOCTYPE html>
	<html lang="<?php echo $lang['lang']; ?>" xmlns="http://www.w3.org/1999/xhtml" prefix="foaf: http://xmlns.com/foaf/0.1/ vcard: http://www.w3.org/2006/vcard/ns#">

	<head>
	<title>
		<?php echo $lang['PAGE_TITLE']; ?>
	</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Website des mainzed - Mainzer Zentrum für Digitalität in den Geistes- und Kulturwissenschaften."
	/>
	<meta property="dc:title" content="<?php echo $lang['MAINZED_NAME']; ?>" />
	<meta property="dc:creator" content="Matthias Dufner, Florian Thiery" />
	<meta property="dc:contributor" content="Kai-Christian Bruhn, Matthias Dufner, Anne Klammt" />
	<meta property="dc:date" content="2015-11-06" />
	<meta property="dc:description" content="mainzed - Mainzer Zentrum für Digitalit&auml;t in den Geistes- und Kulturwissenschaften"
	/>
	<meta property="dc:format" content="text/html;charset=utf-8" />
	<meta property="dc:language" content="<?php echo $lang['lang']; ?>" />
	<meta property="dc:rights" content="http://creativecommons.org/licenses/by/4.0/" />
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	<meta name="google" content="notranslate" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
	<link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="../styles/mainzed.css">
	<link rel='stylesheet' media='screen and (min-width: 1351px) and (max-width: 1600px)' href='../styles/laptop.css' />
	<link rel='stylesheet' media='screen and (min-width: 801px) and (max-width: 1350px)' href='../styles/medium.css' />
	<link rel='stylesheet' media='screen and (min-width: 601px) and (max-width: 800px) and (orientation: portrait)' href='../styles/portrait.css'
	/>
	<link rel='stylesheet' media='screen and (min-width: 601px) and (max-width: 800px) and (orientation: landscape)' href='../styles/small.css'
	/>
	<link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 600px)' href='../styles/small.css' />
	<link rel="stylesheet" href="../styles/stylesheet.css" type="text/css" />

	<script>
		! function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0],
				p = /^http:/.test(d.location) ? 'http' : 'https';
			if (!d.getElementById(id)) {
				js = d.createElement(s);
				js.id = id;
				js.src = p + "://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js, fjs);
			}
		}(document, "script", "twitter-wjs");
	</script>
	</head>

	<body class="hyphenate">
		<div id="overline">
			<a href="#">
				<span><img alt="mainzed" width="30" id="mainzedicon" src="../mainzedicon.svg" /></span>
			</a>

			<div id="mobilenavswitch">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
				<div class="close"></div>
			</div>

			<ul id="nav">
				<li class="current">
					<a href="#top">
						<?php echo $lang['about']; ?>
					</a>
				</li>
				<li id="newslink">
					<a href="#twitter-placeholder">
						<?php echo $lang['news']; ?>
					</a>
				</li>
				<li>
					<a href="#network">
						<?php echo $lang['network']; ?>
					</a>
				</li>
				<li>
					<a href="#studiengang">
						<?php echo $lang['studiengang']; ?>
					</a>
				</li>
				<li>
					<a href="#verbund">
						<?php echo $lang['verbund']; ?>
					</a>
				</li>
				<li>
					<a href="#imprint">
						<?php echo $lang['imprint']; ?>
					</a>
				</li>
			</ul>
		</div>

		<div id="top"></div>

		<div id="intro" class="section">
			<img id="logo" alt="mainzed logo" src="../mainzedlogo.svg" />
			<div id="subtitle">
				<?php echo $lang['subtitle']; ?>
			</div>
			<div id="langswitch">
				<?php if($lang['lang']=="de") {
			//"/mainzed/" wird zu "/"
			echo '<a href="/en">EN</a>';
			echo '<a class="activelang" href="/de">DE</a>';
			} else {
			echo '<a class="activelang" href="/en">EN</a>';
			echo '<a href="/de">DE</a>';
			} ?>
			</div>

			<div id="introtexts">
				<div class="introtext">
					<p class="bigtext">
						<?php echo $lang['introtext1']; ?>
					</p>
				</div>
				<div class="introtext inline">
					<p class="bigtext inline">
						<?php echo $lang['introtext2']; ?>
					</p>
				</div>
				<h2>
					<?php echo $lang['h2intro']; ?>
				</h2>
				<div class="box">
					<p class="jbtext">
						<?php echo $lang['introtext3']; ?>
					</p>
				</div>
				<div class="box">
					<p class="jbtext">
						<?php echo $lang['introtext4']; ?>
					</p>
				</div>
				<div class="box">
					<p class="jbtext">
						<?php echo $lang['introtext5']; ?>
					</p>
				</div>
			</div>

		</div>

		<div id="twitter-placeholder" class="section"></div>

		<div id="twitter" class="section">
			<a class="twitter-timeline" href="https://twitter.com/search?q=%28from%3A_mainzed%29"
			    data-widget-id="658617257451474945">Load Twitter</a>
		</div>

		<div id="network" class="section">
	   	<h1><?php echo $lang['networkheader']; ?></h1>
	    <p class="bigtext clear">
	  	 	<?php echo $lang['networktext']; ?>
	    </p>
	    	<h2><?php echo $lang['h2network']; ?></h2>

        <div class="box first">
	        <div about="#bartz" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/hans-werner-bartz.html" property="foaf:homepage">Hans-Werner Bartz</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infobartz']; ?>
			        </span>
	        </div>
        </div>

		<div class="box">
	        <div about="#cramer" typeof="foaf:Person">
			        <a class="person" href="http://web.rgzm.de/no_cache/ueber-uns/team/m/anja-cramer/" property="foaf:homepage">Dipl.-Ing. (FH) Anja Cramer</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infocramer']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#deicke" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/aline-deicke.html" property="foaf:homepage">Aline Deicke M.A.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infodeicke']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#dufner" typeof="foaf:Person">
			        <a class="person" href="https://i3mainz.hs-mainz.de/de/personal/matthias.dufner" property="foaf:homepage">Matthias Dufner B.A.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infodufner']; ?>
			        </span>
	        </div>
        </div>

       	<div class="box">
        	<div about="#eitelmann" typeof="foaf:Person">
        		<a class="person" href="http://www.english-linguistics.uni-mainz.de/269.php" property="foaf:homepage">Dr. Matthias Eitelmann</a>
		        <br>
		        <span class="personinfo">
		        	<?php echo $lang['infoeitelmann']; ?>
		        </span>
					</div>
	  		</div>

        <div class="box">
        	<div about="#engel" typeof="foaf:Person">
		        <a class="person" href="https://i3mainz.hs-mainz.de/de/personal/thomas.engel" property="foaf:homepage">Thomas Engel M.A.</a>
		        <br>
		        <span class="personinfo">
		        	<?php echo $lang['infoengel']; ?>
		        </span>
					</div>
	  		</div>

        <div class="box">
	        <div about="#gräf" typeof="foaf:Person">
			        <a class="person" href="http://www.musikwissenschaft.uni-mainz.de/Musikinformatik/ag.php" property="foaf:homepage">Dr. Albert Gräf</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infograef']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#grund" typeof="foaf:Person">
			        <a class="person" href="http://www.ieg-mainz.de/institut/personen/grund" property="foaf:homepage">Dr. Ines Grund</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infogrund']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#grüntgens" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/max-gruentgens.html" property="foaf:homepage">Max Grüntgens</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infogruentgens']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#haft" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/michael-haft.html" property="foaf:homepage">Michael Haft B.Sc.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infohaft']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#hambuch" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/dipl-inf-fh-joerg-hambuch.html" property="foaf:homepage">Dipl. Inf. Jörg Hambuch M.A.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infohambuch']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#heinz" typeof="foaf:Person">
			        <a class="person" href="http://web.rgzm.de/en/no_cache/about-us/staff/staff-details/guido-heinz/" property="foaf:homepage">Dipl.-Ing. (FH) Guido Heinz M.Eng.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infoheinz']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#kasper" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/dominik-kasper.html" property="foaf:homepage">Dominik Kasper M.A.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infokasper']; ?>
			        </span>
	        </div>
        </div>

		<div class="box">
	        <div about="#kissinger" typeof="foaf:Person">
			        <a class="person" href="http://www.digitale-akademie.de/profil/" property="foaf:homepage">Timo Kissinger</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infokissinger']; ?>
			        </span>
	        </div>
        </div>
 		
        <div class="box">
	        <div about="#kollatz" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/drs-thomas-kollatz.html" property="foaf:homepage">drs Thomas Kollatz</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infokollatz']; ?>
			        </span>
	        </div>
        </div>

		<div class="box">
	        <div about="#kuczera" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/dr-andreas-kuczera.html" property="foaf:homepage">Dr. Andreas Kuczera</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infokuczera']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#kuroczynski" typeof="foaf:Person">
			        <a class="person" href="http://architekturinstitut.hs-mainz.de/team/piotr_kuroczynski/" property="foaf:homepage" >Prof. Dr.-Ing. Piotr Kuroczyński</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infokuroczynski']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#mahmoodzada" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/marjam-mahmoodzada.html" property="foaf:homepage">Marjam Mahmoodzada M.A.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infomahmoodzada']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#mees" typeof="foaf:Person">
			        <a class="person" href="http://web.rgzm.de/no_cache/ueber-uns/team/m/allard-mees/" property="foaf:homepage">Dr. Allard Mees</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infomees']; ?>
			        </span>
	        </div>
        </div>

		<div class="box">
	        <div about="#mondorf" typeof="foaf:Person">
			        <a class="person" href="http://www.english-linguistics.uni-mainz.de/320.php" property="foaf:homepage">Univ.-Prof. Dr. Britta Mondorf</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infomondorf']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#neovesky" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/anna-neovesky.html" property="foaf:homepage">Anna Neovesky M.A.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infoneovesky']; ?>
			        </span>
	        </div>
        </div>

		<div class="box">
	        <div about="#niedermueller" typeof="foaf:Person">
			        <a class="person" href="http://www.musikwissenschaft.uni-mainz.de/musikwissenschaft/personen/niederm.htm" property="foaf:homepage">PD Dr. Peter Niedermüller</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infoniedermueller']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#pagel" typeof="foaf:Person">
			        <a class="person" href="https://www.hs-mainz.de/personenverzeichnis/person/sven-pagel/" property="foaf:homepage">Prof. Dr. Sven Pagel </a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infopagel']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#pfeiffer" typeof="foaf:Person">
			        <a class="person" href="http://www.igl.uni-mainz.de/institut/mitarbeiter/" property="foaf:homepage">Simeon Pfeiffer M.A. </a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infopfeiffer']; ?>
			        </span>
	        </div>
        </div>

	  <div class="box">
	        <div about="#schrade" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/prof-torsten-schrade.html" property="foaf:homepage">Prof. Torsten Schrade M.A.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infoschrade2']; ?>
			        </span>
	        </div>
        </div>

		<div class="box">
	        <div about="#schneider" typeof="foaf:Person">
			        <a class="person" href="http://www.english-linguistics.uni-mainz.de/354.php" property="foaf:homepage">Dr. Ulrike Schneider</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infoschneider']; ?>
			        </span>
	        </div>
        </div>
		
				<div class="box">
	        <div about="#simon" typeof="foaf:Person">
			        <a class="person" href="https://www.hs-mainz.de/personenverzeichnis/person/tobias-simon/" property="foaf:homepage">Tobias Simon M.A.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infosimon']; ?>
			        </span>
	        </div>
        </div>

		<div class="box">
	        <div about="#summers" typeof="foaf:Person">
			        <a class="person" href="https://www.geku.uni-mainz.de/studienbuero-kunstgeschichte-und-musik-wissenschaft2/" property="foaf:homepage">Stephan Summers</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infosummers']; ?>
			        </span>
	        </div>
        </div>
		
        <div class="box">
	        <div about="#thiery" typeof="foaf:Person">
			        <a class="person" href="https://i3mainz.hs-mainz.de/de/personal/florian.thiery" property="foaf:homepage">Florian Thiery M.Sc.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infothiery']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#unold" typeof="foaf:Person">
			        <a class="person" href="https://i3mainz.hs-mainz.de/de/personal/martin.unold" property="foaf:homepage">Martin Unold M.Sc.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infounold']; ?>
					</span>
	        </div>
        </div>

		<div class="box">
	        <div about="#vlahovits" typeof="foaf:Person">
			        <a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/frederic-von-vlahovits.html" property="foaf:homepage">Frederic von Vlahovits M.A.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infovlahovits']; ?>
			        </span>
	        </div>
        </div>

        <div class="box">
	        <div about="#wefers" typeof="foaf:Person">
			        <a class="person" href="https://i3mainz.hs-mainz.de/de/personal/stefanie.wefers" property="foaf:homepage">Dr. Stefanie Wefers</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infowefers']; ?>
			        </span>
	        </div>
        </div>

		<div class="box marginbottom">
	        <div about="#wegner" typeof="foaf:Person">
			        <a class="person" href="http://www.igl.uni-mainz.de/institut/mitarbeiter/" property="foaf:homepage">Maximilian Wegner B.A.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infowegner']; ?>
			        </span>
	        </div>
        </div>
		
	<h2><?php echo $lang['h2alumni']; ?></h2>

       	<div class="box first">
       		<div about="#Čulo" typeof="foaf:Person">
			        <a class="person" >Univ.-Prof. Dr. Oliver Čulo</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infoculo']; ?>
			        </span>
	        </div>
        </div>

		<div class="box">
	        <div about="#dressler" typeof="foaf:Person">
			        <a class="person" >Christiane Dressler M.A.</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infodressler']; ?>
			        </span>
	        </div>
        </div>

        <div class="box marginbottom">
	        <div about="#piotrowski" typeof="foaf:Person">
			        <a class="person" >Prof. Dr.-Ing. Michael Piotrowski</a>
			        <br>
			        <span class="personinfo">
			        	<?php echo $lang['infopiotrowski']; ?>
			        </span>
	        </div>
        </div>

    </div>

		<div id="studiengang" class="section reduced">
			<h1>
				<?php echo $lang['studiengangheader']; ?>
			</h1>

			<p class="bigtext clear">
				<?php echo $lang['studiengangtext']; ?>
			</p>
		</div>

		<div id="verbund" class="section">
			<h1>
				<?php echo $lang['verbundheader']; ?>
			</h1>

			<p class="bigtext clear">
				<?php echo $lang['verbundtext']; ?>
			</p>


			<div id="organisationlist">

				<div class="organisation">
					<!--Die Akademie der Wissenschaften und der Literatur Mainz (http://www.adwmainz.de/)-->
					<div class="organisationname">
						<span typeof="foaf:Organization" property="foaf:name" about="#adwmainz"><a href="http://www.adwmainz.de/zentrum-fuer-digitalitaet.html" property="foaf:homepage"><?php echo $lang['titleadw']; ?></a></span>
						<span class="linktext"><a href="http://www.adwmainz.de/zentrum-fuer-digitalitaet.html"><?php echo $lang['linktext']; ?></a></span>
						<span typeof="foaf:Organization" property="foaf:name" about="#digitaleakademie" hidden>Digitale Akademie</span>
						<div about="#digitaleakademie" hidden>
							<a href="http://www.digitale-akademie.de" property="foaf:homepage" hidden>http://www.digitale-akademie.de</a>
						</div>
						<div about="#digidatalakademie" rev="foaf:member" hidden>
							<span about="#adwmainz" hidden></span>
						</div>
					</div>
					<div class="organisationlogos"><img alt="logo adw" class="adwlogo" width="200" src="../logos/adwmin.png" /></div>
				</div>


				<div class="organisation floatright">
					<!--Hochschule Mainz University of Applied Sciences-->
					<div class="organisationname">
						<span typeof="foaf:Organization" property="foaf:name" about="#hsmainz"> <a href="https://www.hs-mainz.de/forschung/forschungtransfer/allianzen/mainzed/uebersicht/" property="foaf:homepage">Hochschule Mainz <br>University of Applied Sciences</a></span>
						<span class="linktext"><a href="https://www.hs-mainz.de/forschung/forschungtransfer/allianzen/mainzed/uebersicht/"><?php echo $lang['linktext']; ?></a></span>
						<span typeof="foaf:Organization" property="foaf:name" about="#i3mainz" hidden>i3mainz</span>
						<div about="#i3mainz" hidden>
							<a href="http://www.i3mainz.hs-mainz.de" property="foaf:homepage" hidden>http://www.i3mainz.hs-mainz.de</a>
						</div>
						<div about="#i3mainz" rev="foaf:member" hidden>
							<span about="#hsmainz" hidden></span>
						</div>
					</div>
					<div class="organisationlogos"><img alt="logo hsmainz" class="hsmainzlogo" width="200" src="../logos/hsmainzmin.png" /></div>
				</div>



				<div class="organisation">
					<!--Institut für geschichtliche Landeskunde an der Universität Mainz (http://www.igl.uni-mainz.de/)-->
					<div class="organisationname">
						<span typeof="foaf:Organization" property="foaf:name" about="#igl"><a href="http://www.igl.uni-mainz.de/institut/kooperationen/mainzed.html" property="foaf:homepage"><?php echo $lang['titleigl']; ?></a></span>
						<span class="linktext"><a href="http://www.igl.uni-mainz.de/institut/kooperationen/mainzed.html"><?php echo $lang['linktext']; ?></a></span>
					</div>
					<div class="organisationlogos"><img alt="logo igl" class="igllogo" width="200" src="../logos/iglmin.png" /></div>
				</div>


				<div class="organisation floatright">
					<!--Johannes-Gutenberg-Universität Mainz-->
					<div class="organisationname">
						<span typeof="foaf:Organization" property="foaf:name" about="#jgu"><a href=" http://www.mainzed.uni-mainz.de/" property="foaf:homepage"><?php echo $lang['titlejgu']; ?></a></span>
						<span class="linktext"><a href="http://www.mainzed.uni-mainz.de/"><?php echo $lang['linktext']; ?></a></span>
					</div>
					<div class="organisationlogos"><img alt="logo jgu" class="jgulogo" width="200" src="../logos/jgumin.png" /></div>
				</div>


				<div class="organisation">
					<!--Leibniz-Institut für Europäische Geschichte (http://www.ieg-mainz.de/)-->
					<div class="organisationname">
						<span typeof="foaf:Organization" property="foaf:name" about="#ieg"><a href="http://www.ieg-mainz.de" property="foaf:homepage"><?php echo $lang['titleieg']; ?></a></span>
						<span class="linktext"><a href="http://www.ieg-mainz.de/mainzed"><?php echo $lang['linktext']; ?></a></span>
					</div>
					<div class="organisationlogos"><img alt="logo ieg" class="ieglogo" width="200" src="../logos/iegmin.png" /></div>
				</div>


				<div class="organisation floatright">
					<!--Römisch-Germanisches Zentralmuseum und Leibniz-Forschungsstelle für Archäologie (http://web.rgzm.de/)-->
					<div class="organisationname">
						<span typeof="foaf:Organization" property="foaf:name" about="#rgzm"><a href="http://web.rgzm.de/forschung/kooperationen-und-forschungsverbuende/kooperationen-und-verbuende/mainzed.html" property="foaf:homepage"><?php echo $lang['titlergzm']; ?></a></span>
						<span class="linktext"><a href="http://web.rgzm.de/forschung/kooperationen-und-forschungsverbuende/kooperationen-und-verbuende/mainzed.html"><?php echo $lang['linktext']; ?></a></span>
					</div>
					<div class="organisationlogos"><img class="rgzmlogo" alt="logo rgzm" width="200" src="../logos/rgzmmin.png" /></div>
				</div>
			</div>

			<h2>
				<?php echo $lang['h2directors']; ?>
			</h2>
			<div class="box first">
				<div about="#bruhn" typeof="foaf:Person">
					<span class="function" property="vcard:title"><?php echo $lang['functiondirector']; ?></span>
					<span property="vcard:title" hidden>Professor für interdisziplinäre Anwendungen raumbezogener Mess- und Informationstechnik</span>
					<a class="person" href="http://i3mainz.hs-mainz.de/de/personal/kai-christian.bruhn" property="foaf:homepage">
				 	<span property="foaf:title">Prof. Dr.</span>
				 	<span property="foaf:givenName">Kai-Christian</span>
				 	<span property="foaf:familyName">Bruhn</span>
			 	</a>
					<a rel="foaf:mbox" href="mailto:kai-christian.bruhn@hs-mainz.de"></a>
					<span class="personinfo">
					<?php echo $lang['infoi3']; ?>
				</span>
					<div rev="foaf:member">
						<span about="#mainzed"></span>
					</div>
				</div>
			</div>

			<div class="box marginbottom">
				<div about="#pietschmann" typeof="foaf:Person">
					<span class="function" property="vcard:title"><?php echo $lang['functionvicedirector']; ?></span>
					<a class="person" href="http://www.musikwissenschaft.uni-mainz.de/musikwissenschaft/personen/pietschmann.htm" property="foaf:homepage">
					<span property="foaf:title">Univ.-Prof. Dr.</span>
					<span property="foaf:givenName">Klaus</span>
					<span property="foaf:familyName">Pietschmann</span>
				</a>
					<br>
					<span class="personinfo">
					<?php echo $lang['infopietschmann']; ?>
				</span>
				</div>
			</div>

			<h2>
				<?php echo $lang['h2advisoryboard']; ?>
			</h2>

			<div class="box first">
				<div about="#böhm" typeof="foaf:Person">
					<a class="person" href="https://i3mainz.hs-mainz.de/de/personal/klaus.b%C3%B6hm" property="foaf:homepage">
		        	Prof. Dr.-Ing. Klaus Böhm
		        </a>
					<br>
					<span class="personinfo">
		        	<?php echo $lang['infoi3']; ?>
		        </span>
				</div>
			</div>

			<div class="box">
				<div about="#busch" typeof="foaf:Person">
					<a class="person" href="https://web.rgzm.de/no_cache/ueber-uns/team/m/alexandra-busch/" property="foaf:homepage">Dr. Alexandra Busch</a>
					<br>
					<span class="personinfo">
		        	<?php echo $lang['infobusch']; ?>
		        </span>
				</div>
			</div>

			<div class="box">
				<div about="#paulmann" typeof="foaf:Person">
					<a class="person" href="http://www.ieg-mainz.de/institut/personen/paulmann" property="foaf:homepage">Univ.-Prof. Dr. Johannes Paulmann</a>
					<br>
					<span class="personinfo">
		        	<?php echo $lang['infopaulmann']; ?>
		        </span>
				</div>
			</div>

			<div class="box">
				<div about="#rogge" typeof="foaf:Person">
					<a class="person" href="http://www.geschichte.uni-mainz.de/Mittelalter/159.php" property="foaf:homepage">Univ.-Prof. Dr. Jörg Rogge</a>
					<br>
					<span class="personinfo">
		        	<?php echo $lang['inforogge']; ?>
		        </span>
				</div>
			</div>

			<div class="box">
				<div about="#schrade" typeof="foaf:Person">
					<a class="person" href="http://www.adwmainz.de/mitarbeiterinnen/profil/prof-torsten-schrade.html" property="foaf:homepage">Prof. Torsten Schrade M.A.</a>
					<br>
					<span class="personinfo">
		        	<?php echo $lang['infoschrade']; ?>
		        </span>
				</div>
			</div>

			<div class="box marginbottom">
				<div about="#sprenger" typeof="foaf:Person">
					<a class="person" href="http://www.igl.uni-mainz.de/institut/mitarbeiter/dr-kai-sprenger.html" property="foaf:homepage">Dr. Kai-Michael Sprenger</a>
					<br>
					<span class="personinfo">
		        	<?php echo $lang['infosprenger']; ?>
		        </span>
				</div>
			</div>

			<h2>
				<?php echo $lang['h2contact']; ?>
			</h2>

			<div class="box">
				<div about="#klammt" typeof="foaf:Person">
					<a class="person" href="https://i3mainz.hs-mainz.de/de/personal/anne.klammt" property="foaf:homepage">

					<span property="foaf:title">Dr. </span>
					<span property="foaf:givenName">Anne</span>
					<span property="foaf:familyName">Klammt</span>
					</a>
					<br>
					<span class="personinfo">
					<?php echo $lang['infoi3']; ?>
				</span>
				</div>
			</div>
		</div>

		<div id="imprint" class="section">

			<h1>
				<?php echo $lang['imprintheader']; ?>
			</h1>
			<p>
				<?php echo $lang['tmg']; ?>
			</p>


			<div class="address" about="#mainzed" typeof="foaf:Organization">
				<span class="organisationnameimprint" property="foaf:name">
				<?php echo $lang['MAINZED_NAME']; ?>
			</span><br>
				<div rel="vcard:hasAddress">
					<address>
						c/o Hochschule Mainz University of Applied Sciences<br>
						<div property="vcard:street-address">Lucy-Hillebrand-Straße 2</div>
						<span property="vcard:postal-code">55128</span> <span property="vcard:locality">Mainz</span>, <span property="vcard:country-name">Germany</span>
					</address>
				</div>
				<p>
					<?php echo $lang['contactheader']; ?>
				</p>

				<?php echo $lang['contactdata']; ?>
			</div>

			<p>
				<?php echo $lang['imprintorganisations']; ?>
				<br><br><br>
			</p>

			<p>
				<?php echo $lang['vertreten']; ?>
			</p>


			<p class="float clear small">
				<br><br><br>
				<?php echo $lang['disclaimer']; ?>
			</p>
			<br>

			<div class="float clear margintop small">
				<br>
				<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
				<img alt="Creative Commons Lizenzvertrag" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png"/>
			</a><br>

				<?php echo $lang['cc']; ?>

			</div>
		</div>

		<div id="footer"><a href="#">top</a></div>

		<!-- jquery & plugins-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Hyphenator/5.1.0/Hyphenator.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Hyphenator/5.1.0/patterns/de.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Hyphenator/5.1.0/patterns/en.min.js"></script>
		<script src="../app.js"></script>

	</body>

	</html>
