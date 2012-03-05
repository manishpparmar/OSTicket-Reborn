<? header("Content-type: text/css"); ?>
/*
	Design by Free CSS Templates
	http://www.freecsstemplates.org
				Modified by Mauricio Terrats <mterrats@gmail.com>
				http://xux.in/blog
	Released for free under a Creative Commons Attribution 2.5 License
*/

/* Basic */

*
{
	margin: 0em;
	padding: 0em;
}

h1,h2,h3,h4,h5,h6
{
	color: #444;
}

body,input,textarea,select
{
	font-family: tahoma, sans-serif;
	font-size: 10pt;
	color: #777;
}

select
{
	padding: 2px;
}

input.button
{
	border-top: solid 1px #fff;
	border-left: solid 1px #fff;
	border-bottom: solid 1px #888;
	border-right: solid 1px #888;
	background-color: #eaeaea;
	color: #555;
	font-size: 0.8em;
	padding: 0.35em;
}

input.text,textarea.text
{
	border-top: solid 1px #888;
	border-left: solid 1px #888;
	border-bottom: solid 1px #fff;
	border-right: solid 1px #fff;
	padding: 0.1em;
	margin-top: 0.25em;
	margin-bottom: 0.5em;
}

a
{
	color: #006699;
	text-decoration: underline;
}

a:hover
{
	text-decoration: none;
}

/* Outer */

#outer
{
	margin: 1.5em auto 0em auto;
	width: 100%;
}

/* Header */

#header
{
	padding: 4.5em 4.5em 0em 4.5em;
}

#header h2
{
	font-size: 0.8em;
	font-weight: normal;
	color: #949494;
	display: inline;
	padding-left: 0.5em;
}

#header h1
{
	font-size: 1.9em;
	display: inline;
	letter-spacing: -0.05em;
}

#header h1 a
{
	color: #343434;
	text-decoration: none;
}

/* Menu */

#menu
{
	position: absolute;
	top: 0px;
	left: 0px;
	background-color: #404040;
	border-bottom: solid 4px #006699;
	width: 100%;
}

#menu ul
{
	padding: 1em 4.5em 1em 4.5em;
	list-style: none;
}

#menu li
{
	display: inline;
	padding-right: 2.5em;
	font-size: 0.8em;
}

#menu li a
{
	color: #fff;
	background-color: inherit;
}

#menu li a:hover
{
	border-bottom: solid 1px #444444;
}

/* Content */

#content
{
	padding-left: 2em;
	padding-right: 2em;
}

.box
{
	margin-bottom: 1.25em;
}

.boxContent
{
	margin-top: 0.5em;
	padding: 1.25em 1em 0.25em 1em;
	background: #ffffff url('<?=$_REQUEST['ctheme_url']?>images/a1.gif') top left repeat-x;
}

.boxSubContent
{
				margin-top: 0.5em;
				padding: 1.25em 1em 0.25em 1em;
				background: #ffffff url('<?=$_REQUEST['ctheme_url']?>images/a1.gif') top left repeat-x;
	font-size: 0.8em;
}


/** boxA **/

.boxA .boxContent
{
	margin-top: 0em;
	color: #fff;
	border-bottom: solid 1px #bb6600;
		//background: #ff8800;
	background: #fcb713;
	padding: 1em 1.5em 1em 1em;
}

.boxA h3
{
				font-weight: bold;
				font-size: 14px;
	color: #fff;
}

.boxA span
{
	font-weight: bold;
	font-size: 0.8em;
}

.boxA a
{
	background-color: inherit;
	color: #fff;
	font-size: 0.8em;
}

.boxA a:hover
{
	text-decoration: none;
	border-bottom: solid 1px #ff9900;
}

.boxA input.button
{
	margin-top: 0.25em;
	vertical-align: middle;
}

.boxA input.text
{
	width: 100%;
}

/** boxB **/

.boxB .boxContent
{
	margin-top: 0em;
	color: #fff;
	border-bottom: solid 1px #004466;
	background: #007799;
	padding: 1em 1.5em 1em 1em;
}

.boxB span
{
	font-weight: bold;
	font-size: 0.8em;
}

.boxB a
{
	background-color: inherit;
	color: #fff;
	font-size: 0.8em;
}

.boxB a:hover
{
	text-decoration: none;
	border-bottom: solid 1px #007799;
}

.boxB input.button
{
	margin-top: 0.25em;
	vertical-align: middle;
}

.boxB input.text
{
	width: 100%;
}

/** Content **/

#content p
{
	margin-bottom: 1em;
	text-align: justify;
	line-height: 1.5em;
}

#content strong
{
	color: #444;
}

#content h2,h3,h4,h5,h6
{
}

#content h2,h3
{
}

#content h3
{
	font-size: 1.0em;
}

#content h2
{
	font-size: 1.25em;
}

#content ul
{
	margin-bottom: 1em;
	padding-left: 1em;
	line-height: 1.8em;
}

#content blockquote
{
	padding: 1em;
	margin-bottom: 1.5em;
	border-left: solid 6px #558800;
}

#content blockquote p
{
	margin-bottom: 0em;
	line-height: 1.5em;
}

#content table
{
	margin-bottom: 1.5em;
}

#content table th
{
	text-align: left;
	font-weight: bold;
	padding: 0.5em;
	color: #444;
}

#content table td
{
	padding: 0.5em;
}

#content table tr.rowA
{
	background-color: #efefef;
	color: inherit;
}

#content table tr.rowB
{
	background-color: #fafafa;
	color: inherit;
}

/* Primary Content */

#primaryContentContainer
{
	float: right;
	margin-left: -19em;
	width: 100%;
}

#primaryContent
{
	margin: 0em 0em 0em 15em;
	padding: 2.5em 2.5em 1.5em 2.5em;
}

/* Secondary Content */

#secondaryContent
{
	float: left;
	width: 13em;
	padding: 2.5em 2.5em 1.5em 2.5em;
}

/* Footer */

#footer
{
	border-top: solid 1px #e5e5e5;
	text-align: center;
	padding: 1.5em 0em 1.5em 0em;
}

.clear
{
	clear: both;
}

/* Osticket custom */

/* Osticket icons */

.Icon {
		width: auto;
		padding-left:20px;
		background-position: left center;
		background-repeat: no-repeat;
		/* color:#006699; */
		text-decoration: none;
}

a.Icon { }

a.Icon:hover {
		text-decoration: underline;
}

.Icon.Ticket { background:url(<?=$_REQUEST['ctheme_url']?>images/page_white.gif) 0 0px no-repeat; }
.Icon.webTicket { background:url(<?=$_REQUEST['ctheme_url']?>images/world.gif) 0 0px no-repeat; }
.Icon.emailTicket { background:url(<?=$_REQUEST['ctheme_url']?>images/email.gif) 0 0px no-repeat; }
.Icon.phoneTicket { background:url(<?=$_REQUEST['ctheme_url']?>images/telephone.gif) 0 0px no-repeat; }
.Icon.attachment { background-image: url(<?=$_REQUEST['ctheme_url']?>images/attach.gif); }
.Icon.file { background-image: url(<?=$_REQUEST['ctheme_url']?>images/attach.gif); }
.Icon.refresh { background-image: url(<?=$_REQUEST['ctheme_url']?>images/arrow_refresh.gif); }
.Icon.thread {
		font-weight: bold;
		/* font-size: 1em; */
		background-image: url(<?=$_REQUEST['ctheme_url']?>images/folder.gif);
}


#content table.message
{
				background-color: #fafafa;
				color: inherit;
}

#content table.response
{
				background-color: #efefef;
				color: inherit;
}

/* Message boxes */

.error {
	/* color: red; */
}

.errormessage {
	clear: both;
	margin: 0 0 15px;
	padding: 0 10px;
	background: #ffebe8;
	border: 1px solid #f0baa2;
	line-height: 25px;
	color: #222;
}

.warnmessage {
	clear: both;
	margin: 0 0 15px;
	padding: 0 10px;
	background: #fffbcc;
	border: 1px solid #e6db55;
	line-height: 25px;
	color: #222;
}

.infomessage {
	clear: both;
	margin: 0 0 15px;
	padding: 0 10px;
	background: #d1ecb8;
	border: 1px solid #81c445;
	line-height: 25px;
	color: #222;
}
