<?

/*
 * ScummVM Compatibility Page
 *
 */

// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_header("ScummVM :: Compatibility - CVS");
sidebar_start();

//display welcome table
echo html_round_frame_start("Compatibility","");


?>
	<h1>Compatibility</h1>
<?
if ($details)
{

}
else
{
?>
	<p>
	  This page lists the progress of ScummVM as it relates to individual game compatibility.<br>
	  Click on the game name to view the complete notes of a game.

	  <br><br>Please note this list applies to the English versions of games, we attempt to test many versions of games, however there are occasionally problems with other languages.
	  This is the compatibility of the current WIP CVS version, <B>not of the
	  0.7.1 stable release</B> (Please see the  <a href="compatibility_stable.php">Stable Compatibility</A> chart for this version).
	  <br><br>
	  As this is the status of the Work In Progress version, occasional temporary bugs
	  may be introduced with new changes, thus this list refects the 'best case' scenario. 
	  It is highly recommended to use the latest stable release, where possible.
	  <br><br>
	  <small>Last Updated: <? echo date("F d, Y",getlastmod()); ?></small>
	</p>

<?
	// Display the Color Key Table
	echo html_frame_start("Color Key","50%",1,1,"color4");
	$pcts = array(0,5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90,95,100);
	while (list($key,$num) = each($pcts))
	{
		$keyTD .= html_frame_td($num,'align=center class="pct'.$num.'"');
	}
	echo html_frame_tr($keyTD);
	echo html_frame_end(),html_br();
}

// This array defines the games and their ratings, etc.
$gamesLucas = array(
		'Maniac Mansion (original)'				=> array('1','maniac','90'),
		'Maniac Mansion (enhanced)'				=> array('2','maniac','95'),
		'Zak McKracken and the Alien Mindbenders (original)'	=> array('1','zak','85'),
		'Zak McKracken and the Alien Mindbenders (enhanced)'	=> array('2','zak','90'),
		'Zak McKracken and the Alien Mindbenders (FM-TOWNS)'	=> array('3','zaktowns','90'),
		'Indiana Jones and the Last Crusade'			=> array('3','indy3ega','90'),
		'Indiana Jones and the Last Crusade (256)'		=> array('3','indy3','90'),
		'Indiana Jones and the Last Crusade (FM-TOWNS)'		=> array('3','indy3towns','90'),
		'Loom'							=> array('3','loom','95'),
		'Loom (FM-TOWNS)'					=> array('3','loomtowns','75'),
		'The Secret of Monkey Island (EGA)'			=> array('4','monkeyega','95'),
		'Passport to Adventure (Indy3, Monkey and Loom demos)'  => array('4','pass','95'),
		'Loom (256 color CD version)'                           => array('5','loomcd','95'),
		'The Secret of Monkey Island (VGA Floppy)'		=> array('5','monkeyvga','95'),
		'The Secret of Monkey Island (VGA CD)'			=> array('5','monkey','95'),
		'The Secret of Monkey Island (Alternative VGA CD)'	=> array('5','monkey1','95'),
		'The Secret of Monkey Island (Sega CD)'			=> array('5','game','85'),
		'Monkey Island 2: LeChuck\'s revenge'			=> array('5','monkey2','95'),
		'Monkey Island 2: LeChuck\'s revenge (DOS Demo)'	=> array('5','mi2demo','10'),
		'Indiana Jones 4 and the Fate of Atlantis'		=> array('5','atlantis','95'),
		'Indiana Jones 4 and the Fate of Atlantis (FM-TOWNS)'	=> array('5','indy4','95'),
		'Indiana Jones 4 and the Fate of Atlantis (Demo)'	=> array('5','playfate','95'),
		'Day Of The Tentacle'					=> array('6','tentacle','95'),
		'Day Of The Tentacle (Demo)'				=> array('6','dottdemo','95'),
		'Sam & Max'                                             => array('6','samnmax','95'),
		'Sam & Max (Demo)'					=> array('6','samdemo','95'),
		'Full Throttle'						=> array('7','ft','85'),
		'The Dig'                                               => array('7','dig','90'),
		'Curse of Monkey Island'				=> array('8','comi','85'),
	      );

$gamesHE = array(
		'Backyard Baseball 2001 (Demo)'						=> array('n/a','bb2demo','40'),
		'Backyard Football 2002 (Demo)'						=> array('n/a','footdemo','10'),
		'Blue\'s ABC Time (Demo)'						=> array('n/a','BluesABCTimeDemo','90'),
		'Big Thinkers First Grade (Demo)'					=> array('n/a','1grademo','50'),
		'Big Thinkers Kindergarten (Demo)'					=> array('n/a','kinddemo','50'),
		'Big Thinkers Kindergarten'						=> array('n/a','thinkerk','50'),
		'Fatty Bears Birthday Surprise (Demo)'					=> array('n/a','fbdemo','95'),
		'Fatty Bears Birthday Surprise'						=> array('n/a','fbear','93'),
		'Fatty Bears Fun Pack'							=> array('n/a','fbpack','95'),
		'Freddi Fish 1: The Case of the Missing Kelp Seeds (Demo)'		=> array('n/a','freddemo','90'),
		'Freddi Fish 1: The Case of the Missing Kelp Seeds'			=> array('n/a','freddi','80'),
		'Freddi Fish 2: The Case of the Haunted Schoolhouse (Demo)'		=> array('n/a','ff2-demo','70'),
		'Freddi Fish 2: The Case of the Haunted Schoolhouse'			=> array('n/a','freddi2','70'),
		'Freddi Fish 3: The Case of the Stolen Conch Shell (Demo)'		=> array('n/a','f3-mdemo','95'),
		'Freddi Fish 3: The Case of the Stolen Conch Shell'			=> array('n/a','freddi3','95'),
		'Freddi Fish 4: The Case of the Hogfish Rustlers of Briny Gulch (Demo)'	=> array('n/a','f4-demo','95'),
		'Freddi Fish 4: The Case of the Hogfish Rustlers of Briny Gulch'	=> array('n/a','freddi4','85'),
		'Freddi Fish 5: The Case of the Creature of Coral Cave (Demo)'		=> array('n/a','ff5demo','20'),
		'Freddi Fish 5: The Case of the Creature of Coral Cave'			=> array('n/a','freddicove','20'),
		'Freddi Fish and Luther\'s Maze Madness'				=> array('n/a','maze','50'),
		'Freddi Fish and Luther\'s Water Worries'				=> array('n/a','water','50'),
		'Let\'s Explore the Airport with Buzzy (Demo)'				=> array('n/a','airdemo','85'),
		'Let\'s Explore the Airport with Buzzy'					=> array('n/a','airport','85'),
		'Let\'s Explore the Farm with Buzzy (Demo)'				=> array('n/a','farmdemo','85'),
		'Let\'s Explore the Farm with Buzzy'					=> array('n/a','farm','85'),
		'Let\'s Explore the Jungle with Buzzy'					=> array('n/a','jungle','85'),
		'Pajama Sam 1: No Need to Hide When It\'s Dark Outside (Demo)'		=> array('n/a','pjs-demo','90'),
		'Pajama Sam 1: No Need to Hide When It\'s Dark Outside'			=> array('n/a','pajama','70'),
		'Pajama Sam 2: Thunder and Lightning Aren\'t so Frightening (Demo)'	=> array('n/a','pj2demo','90'),
		'Pajama Sam 2: Thunder and Lightning Aren\'t so Frightening'		=> array('n/a','pajama2','80'),
		'Pajama Sam 3: You Are What You Eat From Your Head to Your Feet (Demo)'	=> array('n/a','pj3-demo','80'),
		'Pajama Sam 3: You Are What You Eat From Your Head to Your Feet'	=> array('n/a','pajama3','50'),
		'Pajama Sam\'s Lost & Found (Demo)'					=> array('n/a','smaller','40'),
		'Pajama Sam\'s Lost & Found'						=> array('n/a','lost','40'),
		'Pajama Sam\'s Sock Works'						=> array('n/a','socks','50'),
		'Putt-Putt Enters the Race (Demo)'					=> array('n/a','racedemo','85'),
		'Putt-Putt Enters the Race'						=> array('n/a','puttrace','50'),
		'Putt-Putt Goes To The Moon (Demo)'					=> array('n/a','moondemo','95'),
		'Putt-Putt Goes To The Moon'						=> array('n/a','puttmoon','95'),
		'Putt-Putt Joins the Circus (Demo)'					=> array('n/a','circdemo','95'),
		'Putt-Putt Joins the Circus'						=> array('n/a','puttcircus','40'),
		'Putt-Putt Joins the Parade (Demo)'					=> array('n/a','puttdemo','95'),
		'Putt-Putt Joins the Parade'						=> array('n/a','puttputt','95'),
		'Putt-Putt Saves the Zoo (Demo)'					=> array('n/a','zoodemo','70'),
		'Putt-Putt Saves the Zoo'						=> array('n/a','puttzoo','70'),
		'Putt-Putt Travels Through Time (Demo)'					=> array('n/a','timedemo','70'),
		'Putt-Putt Travels Through Time'					=> array('n/a','putttime','70'),
		'Putt-Putt and Pep\'s Balloon-O-Rama'					=> array('n/a','balloon','50'),
		'Putt-Putt and Pep\'s Dog on a Stick'					=> array('n/a','dog','50'),
		'Putt-Putts Fun Pack'							=> array('n/a','funpack','95'),
		'Spyfox 1: Dry Cereal (Demo)'						=> array('n/a','spydemo','95'),
		'Spyfox 1: Dry Cereal'							=> array('n/a','spyfox','85'),
		'Spyfox 2: Some Assembly Required (Demo)'				=> array('n/a','sf2-demo','95'),
		'Spyfox 2: Some Assembly Required'					=> array('n/a','spyfox2','85'),
		'Spyfox 3: Operation Ozone (Demo)'					=> array('n/a','sf3-demo','85'),
		'Spyfox 3: Operation Ozone'						=> array('n/a','spyozon','40'),
		'Spy Fox in Cheese Chase Game'						=> array('n/a','chase','40'),
		'Spy Fox in Hold the Mustard'						=> array('n/a','mustard','10'),
	      );

$gamesOther = array(

		'Beneath a Steel Sky'			       		=> array('n/a','sky','98'),
		'Broken Sword I'			       		=> array('n/a','sword1','98'),
		'Broken Sword II'			       		=> array('n/a','sword2','98'),
		'Flight of the Amazon Queen'			       	=> array('n/a','queen','98'),
		'Inherit the Earth'					=> array('n/a', 'ite', '15'),
		'Simon The Sorcerer 1 Talkie'       			=> array('n/a','simon1talkie','93'),
		'Simon The Sorcerer 1 Talkie (Amiga CD32)'     		=> array('n/a','simon1cd32','8'),
 		'Simon The Sorcerer 1 Talkie (Acorn)'			=> array('n/a','simon1acorn','93'),
		'Simon The Sorcerer 1 (DOS)'           			=> array('n/a','simon1dos','93'),
		'Simon The Sorcerer 1 (Amiga)'          		=> array('n/a','simon1amiga','5'),
		'Simon The Sorcerer 1 (Demo)'          			=> array('n/a','simon1demo','93'),
		'Simon The Sorcerer 2 Talkie'       			=> array('n/a','simon2talkie','95'),
		'Simon The Sorcerer 2 (DOS)'           			=> array('n/a','simon2dos','95')
	      );

$notes = array(
"maniac"	=> "No known issues, game is completable.".
		   "<br>- Amiga, Atari ST, Mac, NES and PC versions supported by this target".
		   "<br>- NES version playable but not completable",
"zak"		=> "No known issues, game is completable.".
		   "<br>- Amiga, Atari ST and PC versions supported by this target".
		   "<br>- Some sound effects buggy or missing in Amiga version",
"indy3ega"	=> "Game is completable".
		   "<br>- Amiga, Atari ST, Mac and PC versions supported by this target".
		   "<br>- Indiana may be able to walk in odd places, in some rooms".
		   "<br>- Mac version isn't completable, due to no inventory controls".
		   "<br>- Atari ST and Mac versions require pcjr or pcspk music driver",
"indy3"         => "No known issues, game is completable.",
"indy3towns"    => "No known issues, game is completable.".
                   "<br>- Kanji version requires the FM-TOWNS Font ROM",
"zaktowns"      => "No known issues, game is completable.".
                   "<br>- Kanji version requires the FM-TOWNS Font ROM",
"loom"		=> "No known issues, game is completable.".
		   "<br>- Amiga, Atari ST, Mac and PC versions supported by this target".
		   "<br>- No music or sound effects with Mac version".
		   "<br>- Atari ST and Mac versions require pcjr or pcspk music driver".
		   "<br>- MIDI support requires the Roland update from LucasArts",
"loomtowns"	=> "Game is completable".
		   "<br>- Fades are seemingly different to other versions in some cases".
		   "<br>- Text palette sometimes incorrect".
		   "<br>- Distaff occasionally pink...".
		   "<br>- Difficulty select is via boot param:".

		   "<ul><li>0 practice (default)".
		       "<li>1 standard".
		       "<li>2 expert</ul>".
                   "<br>- Kanji version requires the FM-TOWNS Font ROM",
"monkeyega"	=> "No known issues, game is completable.".
		   "<br>- Atari ST version requires pcjr or pcspk music driver".
		   "<br>- MIDI support requires the Roland update from LucasArts",
"pass"		=> "All three demos are completable.",
"loomcd"        => "No known issues, game is completable.",
"monkeyvga"	=> "Game is completable.".
		   "<br>- Both Amiga and PC versions supported by this target".
		   "<br>- No music or sound effects with Amiga version",
"monkey"	=> "No known issues, game is completable.",
"monkey1"	=> "No known issues, game is completable.".
		   "<br>- Both Mac and PC versions supported by this target",
"game"		=> "No known issues, game is completable.".
		   "<br>- Dialogue choices can be selected with 6 (up) 7 (down) or mousewheel, with mouse button or number to select",
"monkey2"	=> "No known issues, game is completable.".
		   "<br>- Amiga, FM-TOWNS, Mac and PC versions supported by this target".
                   "<br>- Kanji version requires the FM-TOWNS Font ROM",
"mi2demo"	=> "Often crashes due to missing resources, since it was never meant to be playable".
		   "<br>- No support for playing back the recorded file of gameplay",
"atlantis"	=> "No known issues, game is completable.".
		   "<br>- Amiga, Mac and PC versions supported by this target".
		   "<br>- Both disk and cd PC versions are supported by this target".
		   "<br>- Music loud on some systems, run with -m30 to lower music volume.",
"indy4"		=> "No known issues, game is completable.".
		   "<br>- Music loud on some systems, run with -m30 to lower music volume.".
                   "<br>- Kanji version requires the FM-TOWNS Font ROM",
"playfate"	=> "No known issues, game is completable.",
"tentacle"	=> "No known issues, game is completable.".
		   "<br>- Both Mac and PC versions supported by this target".
		   "<br>- Both disk and cd versions are supported by this target".
		   "<br>- Maniac Mansion isn't playable on Ed's computer. To play the included copy, use 'Add Game' from the main ScummVM launcher and select the MANIAC directory inside the DOTT game directory",
"dottdemo"	=> "No known issues, game is completable.",
"samnmax"	=> "No known issues, game is completable.".
		   "<br>- Both Mac and PC versions supported by this target".
		   "<br>- Both disk and cd versions are supported by this target".
                   "<br>- Highway subgame doesn't behave correctly",
"samdemo"	=> "No known problems - should be playable to the end",
"ft"		=> "Game is completable, with minor glitches".
		   "<br>- Both Mac and PC versions supported by this target",
"dig"		=> "Game is completable, with minor glitches".
		   "<br>- Both Mac and PC versions supported by this target",
"comi"		=> "Game is completable, with minor glitches.",

"bb2demo"	=> "Game is playable, with glitches".
		   "<br>- Graphical glitches",
"footdemo"	=> "Only shows introduction",
"BluesABCTimeDemo" => "Game is playable",
"1grademo"	=> "Game is playable, but settings aren't saved".
		   "<br>- Minor graphical glitches",
"kinddemo"	=> "Game is playable, but settings aren't saved".
		   "<br>- Minor graphical glitches",
"thinkerk"	=> "Game is playable, but settings aren't saved".
		   "<br>- Minor graphical glitches",
"fbdemo"	=> "Should be playable to the end".
		   "<br>- Both DOS and Windows versions supported by this target",
"fbear"		=> "Game should be completable, with several glitches".
		   "<br>- 3DO, DOS and Windows versions supported by this target".
		   "<br>- Piano sounds aren't correct pitch in DOS version",
"fbpack"	=> "No known issues, game is completable.".
		   "<br>- Both 3DO and DOS versions supported by this target",
"freddemo"	=> "Game is completable, with minor glitches".
		   "<br>- Inventory bubbles don't pop in older demo",
"freddi"	=> "Game is completable, with minor glitches".
		   "<br>- Sometimes double speech when using objects",
"ff2-demo"	=> "Game is completable, with minor glitches".
		   "<br>- Often uses wrong songs".
		   "<br>- Minor graphical glitches",
"freddi2"	=> "Game is completable, with minor glitches".
		   "<br>- Often uses wrong songs".
		   "<br>- Minor graphical glitches",
"f3-mdemo"	=> "No known issues, game is completable",
"freddi3"	=> "No known issues, game is completable",
"f4-demo"	=> "No known issues, game is completable".
"freddi4"	=> "Game is completable, with minor glitches".
		   "<br>- The seahorse in introduction shouldn't move upwards".
		   "<br>- Need to ESC past the salesmen's introduction",
"ff5demo"	=> "Game is playable but not completable".
		   "<br>- Various issues",
"freddicove"	=> "Game is playable but not completable".
		   "<br>- Various issues",
"maze"		=> "Game is playable, but settings aren't saved".
		   "<br>- Various issues",
"water"		=> "Game is playable, but settings aren't saved".
		   "<br>- Various issues",
"airdemo"	=> "Game is playable".
		   "<br>- Minor graphical glitches",
"airport"	=> "Game is playable".
		   "<br>- Minor graphical glitches",
"farmdemo"	=> "Game is playable".
		   "<br>- Index screen isn't cleared in older demo".
		   "<br>- Minor graphical glitches",
"farm"		=> "Game is playable".
		   "<br>- Minor graphical glitches",
"jungle"	=> "Game is playable".
		   "<br>- Minor graphical glitches",
"pjs-demo"	=> "No known issues, game is completable",
"pajama"	=> "Game is completable, with minor glitches".
		   "<br>- No songs",
"pj2demo"	=> "No known issues, game is completable",
"pajama2"	=> "Game is completable, with minor glitches".
		   "<br>- Minor graphical glitches",
"pj3-demo"	=> "Game is completable, with minor glitches".
		   "<br>- Various issues",
"pajama3"	=> "Game is playable but not completable".
		   "<br>- Various issues",
"smaller"	=> "Game is playable, with glitches".
		   "<br>- Graphical glitches",
"lost"		=> "Game is playable, with glitches".
		   "<br>- Graphical glitches",
"socks"		=> "Game is playable, but settings aren't saved".
		   "<br>- Various issues",
"racedemo"	=> "Game is completable, with minor glitches".
		   "<br>- Minor graphical glitches",
"puttrace"	=> "Game is playable but not completable".
		   "<br>- Can't move around field".
		   "<br>- Ending sequence locks up".
		   "<br>- Minor graphical glitches",
"moondemo"	=> "No known issues, game is completable.".
		   "<br>- Both DOS and Windows versions supported by this target",
"puttmoon"	=> "No known issues, game is completable.".
		   "<br>- 3DO, DOS and Windows versions supported by this target",
"circdemo"	=> "No known issues, game is completable.".
"puttcircus"	=> "Game is playable but not completable".
		   "<br>- Runs out of array pointers".
		   "<br>- No input response in pie and card mini games".
		   "<br>- Minor graphical glitches",
"puttdemo"	=> "No known issues, game is completable.".
		   "<br>- Both DOS and Windows versions supported by this target",
"puttputt"	=> "No known issues, game is completable.".
		   "<br>- 3DO, DOS and Windows versions supported by this target",
"puttzoo"	=> "Game is completable, with minor glitches".
		   "<br>- Often uses wrong songs".
		   "<br>- Inventory background and items are often not redrawn",
"zoodemo"	=> "Game is completable, with minor glitches".
		   "<br>- Inventory background and items are often not redrawn",
"putttime"	=> "Game is completable, with minor glitches".
		   "<br>- Inventory background and items are often not redrawn",
"timedemo"	=> "Game is completable, with minor glitches".
		   "<br>- Inventory background and items are often not redrawn",
"balloon"	=> "Game is playable, but settings aren't saved".
		   "<br>- Various issues",
"dog"		=> "Game is playable, but settings aren't saved".
		   "<br>- Various issues",
"funpack"	=> "No known issues, game is completable.".
		   "<br>- Both 3DO and DOS versions supported by this target",
"spydemo"	=> "No known issues, game is completable.".
"spyfox"	=> "Game is completable, with minor glitches".
		   "<br>- Minor graphical glitches",
"sf2-demo"	=> "No known issues, game is completable.".
"spyfox2"	=> "Game is completable, with minor glitches".
		   "<br>- Various issues",
"sf3-demo"	=> "Game is completable, with minor glitches".
		   "<br>- Minor graphical glitches",
"spyozon"	=> "Game is playable but not completable".
		   "<br>- Various issues",
"chase"		=> "Game is playable, with glitches".
		   "<br>- Graphical glitches",
"mustard"	=> "Only shows introduction ",

"sky"	 	=> "No known issues, game is completable.".
		   "<br>- Requires the <a href=\"SKY.CPT\">SKY.CPT</a> resource file to be placed in the game directory".
		   "<br>- Floppy demos are unsupported".
		   "<br>- Amiga versions aren't supported and probably never will be".
		   "<br>".
		   "<br>There are also bugs which were already present in the original game and which we can't fix:".
		   "<br>- The voice files for some sentences are missing.".
		   "<br>&nbsp;&nbsp;&nbsp;&nbsp;This is especially noticeable in the court- and Mrs. Piermont sequence.".
		   "<br>- The fonts for the LINC terminal are partially incorrect and the text sometimes passes the screen borders".
		   "<br>- Special characters for french and italian subtitles are incorrect sometimes",
"sword1"	=> "No known issues, game is completable.".
		   "<br>- Only the PC version has been tested. We don't have any other versions, so we can't make any promises about them.",
"sword2"	=> "No known issues, game is completable.".
		   "<br>- Only the PC version has been tested. We don't have any other versions, so we can't make any promises about them.",
"queen"		=> "No known issues, game is completable.".
		   "<br>- Some versions may require the <a href=\"http://0x.7fc1.org/fotaq/queen.tbl\">queen.tbl</a> resource file to be placed in the game directory. This is not required for the freeware releases.".
		   "<br>- Amiga version isn't supported.",
"ite"		=> "Game is not completable.".
		   "<br>- Puzzle is missing".
		   "<br>- Converstaions could be performed only with keyboard".
		   "<br>- Minor graphics glitches in ISO mode",
"simon1talkie" 	=> "No known issues, game is completable.".
		   "<br>- Both DOS and Windows versions supported by this target",
"simon1cd32" 	=> "Game is completable, with major graphics glitches".
                   "<br>- Character and background graphics are decoded incorrectly".
                   "<br>- No music",
"simon1acorn" 	=> "No known issues, game is completable.",
"simon1dos" 	=> "No known issues, game is completable.",
"simon1amiga" 	=> "Game works a bit but can't see anything".
                   "<br>- Character and background graphics are decoded incorrectly".
                   "<br>- No music",
"simon1demo" 	=> "No known issues, game demo is completable.",
"simon2talkie"  => "No known issues, game is completable.".
		   "<br>- Amiga, DOS, Macintosh and Windows versions supported by this target".
                   "<br>- Only the default language (English) in Amiga & Mactinosh versions is supported".
                   "<br>- F10 key animation is different in Amiga & Macintosh versions",
"simon2dos"     => "No known issues, game is completable."
);
		
// render the compatibility chart
if ($details)
	echo html_frame_start("Game Compatibility Chart","90%",2,1,"color4");
else
	echo html_frame_start("LucasArts Game Compatibility Chart","90%",2,1,"color4");

echo html_frame_tr(
		   html_frame_td("Game Full Name").
		   html_frame_td("Scumm Ver.").
		   html_frame_td("Game Short Name").
		   html_frame_td("% Completed"),
		   "color4"

		  );
$c = 0;
// Ender - Added this
if ($details) {
	$arrayt = array_merge($gamesLucas, $gamesHE, $gamesOther);
	while (list($name,$array) = each($arrayt))
	{	

		if ($array[1] == $details) {
			$color = "color0";
			echo html_frame_tr(
				html_frame_td($name).
			  	html_frame_td($array[0]).
			    	html_frame_td($array[1]).
		 	    	html_frame_td($array[2]."%", 'align="center" class="pct'.($array[2] - ($array[2]%5)).'"'),
		  	        $color
	  		);
			echo html_frame_tr(html_frame_td(
							 html_br().
							 html_blockquote($notes{$details}).
							 html_br(),
							 "colspan=4")
							);
		}
	}
} else {
	while (list($name,$array) = each($gamesLucas))
	{	
		if ($c % 2 == 0) { $color = "color2"; } else { $color = "color0"; }
		echo html_frame_tr(
				    html_frame_td(html_ahref($name, $PHP_SELF."?details=".$array[1])).
     				    html_frame_td($array[0]).
				    html_frame_td($array[1]).
			 	    html_frame_td($array[2]."%", 'align="center" class="pct'.($array[2] - ($array[2]%5)).'"'),
 			  	    $color
		);
		$c++;
	}		  

	echo html_frame_end("&nbsp;");
	echo html_p();

	echo html_frame_start("Humongous Entertainment Game Compatibility Chart","90%",2,1,"color4");
	echo html_frame_tr(
		   html_frame_td("Game Full Name").
		   html_frame_td("Game Short Name").
		   html_frame_td("% Completed"),
		   "color4"

		  );
	$c = 0;
	while (list($name,$array) = each($gamesHE))
	{	
		if ($c % 2 == 0) { $color = "color2"; } else { $color = "color0"; }
		echo html_frame_tr(
				    html_frame_td(html_ahref($name, $PHP_SELF."?details=".$array[1])).
  				    html_frame_td($array[1]).
			 	    html_frame_td($array[2]."%", 'align="center" class="pct'.($array[2] - ($array[2]%5)).'"'),
 			  	    $color
		);
		$c++;
	}		  

	echo html_frame_end("&nbsp;");
	echo html_p();

	echo html_frame_start("Other Game Compatibility Chart","90%",2,1,"color4");
	echo html_frame_tr(
		   html_frame_td("Game Full Name").
		   html_frame_td("Game Short Name").
		   html_frame_td("% Completed"),
		   "color4"

		  );
	$c = 0;
	while (list($name,$array) = each($gamesOther))
	{	
		if ($c % 2 == 0) { $color = "color2"; } else { $color = "color0"; }
		echo html_frame_tr(
				    html_frame_td(html_ahref($name, $PHP_SELF."?details=".$array[1])).
     				    html_frame_td($array[1]).
			 	    html_frame_td($array[2]."%", 'align="center" class="pct'.($array[2] - ($array[2]%5)).'"'),
 			  	    $color
		);
		$c++;
	}		  
}

echo html_frame_end("&nbsp;");
  
if ($details)
    echo html_p(),html_back_link(1,$PHP_SELF);

echo html_p();
echo html_round_frame_end("&nbsp;");


// end of html
sidebar_end();
html_footer();

?>
