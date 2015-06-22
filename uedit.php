<!DOCTYPE html>
<html xml:lang="en_US" lang="en_US" manifest="uedit.appcache">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>


<script>
	if (window.location.protocol != "http:")
		window.location.href = "http:" + window.location.href.substring(window.location.protocol.length);
</script>

<link href="http://gmpg.org/xfn/11" rel="profile">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- CSS -->

<meta name="author" content="Jahidul Hamid" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style/mycss.css" />
<!--<link rel="stylesheet" href="style/mycss.min.css" />-->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<script src="script/jquery.min.1.7.1.custom.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="script/myjs.js"></script>
<!--<script src="script/myjs.min.js"></script>-->


<link rel="stylesheet" href="Highlightjs/styles/github.css">
<script src="Highlightjs/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<link rel="shortcut icon" href="img/logo48.png" type="image/x-icon" />


		
		<script src="uedit/scripts/src-noconflict/ace.js" type="text/javascript"></script>
		<script src="uedit/scripts/src-noconflict/ext-language_tools.js"></script>
		<script src="uedit/scripts/src-noconflict/mode-php.js"></script>
		<script src="uedit/scripts/src-noconflict/ext-spellcheck.js"></script>
		<script src="uedit/scripts/src-noconflict/ext-searchbox.js"></script>
		<script src="uedit/scripts/src-noconflict/theme-eclipse.js"></script>
		<script src="uedit/scripts/uedit.js" type="text/javascript"></script>
		<!--<script src="uedit/scripts/uedit.min.js" type="text/javascript"></script>-->
		<script src="uedit/scripts/FileSaver.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="uedit/scripts/swfobject.js"></script>
		<script type="text/javascript" src="uedit/scripts/downloadify.min.js"></script>
		<meta name="description" content="Universal Text Editor">
		<meta name="keywords" content="neurobin,text,editor,uedit" />
		<title>Uedit @ Neurobin</title>
	</head>
	<body onload="startTime()">

		<?php
		require_once ('header.php');
		?>

		<?php
		require_once ('fixedsharebutton.php');
		require_once ('fixed-content-share-button.php');
		?>
		<!-- fixed share button end-->
		
<div id="openModal" class="modalDialog">
	<div>
		<a onclick="closeModalDialog()" title="Close" class="close">X</a>
		<h2></h2>
		<p></p>
		<button name="No" value="left" id="openModal-btn-left" onclick="processModalDialgButtonEvent(this.id)"></button>
		<button name="Yes" value="right" id="openModal-btn-right" onclick="processModalDialgButtonEvent(this.id)"></button>
		</div>
</div>
<div id="messageDialog" class="modalDialog">
	<div>
		<a onclick="closeMessageDialog()" title="Close" class="close">X</a>
		<h2></h2>
		<p></p>
		<button name="Ok" value="ok" id="messageDialog-btn-ok" onclick="closeMessageDialog()"></button>
		</div>
</div>


<nav id="context-menu">
  <ul class="context-menu-items">
    <li class="context-menu-btn-item">
      <a name="edit" class="context-menu-link">
        <i class="fa fa-edit"></i> Edit
      </a>
    </li>
    <li class="context-menu-btn-item">
      <a name="delete" class="context-menu-link warningcolor">
        <i class="fa fa-minus"></i> Delete
      </a>
    </li>
    <li class="context-menu-btn-item">
      <a name="show-info" class="context-menu-link disabled-link">
        <i class="fa fa-suitcase"></i> Show Info
      </a>
    </li>
  </ul>
</nav>
		
		
		

<div class="input-dialog" id="uedit-add-button-dialog">

<p>Add Button</p>
<table class="noborder"><tr><td>
Lang: </td><td>
<input name="uedit-add-button-dialog" type="text" id="uedit-add-button-dialog-lang" placeholder="Language/Section" value="html" title="Language/section name" maxlength="30" class="input-dialog-input-field">
</td></tr><tr><td>
Start: </td><td>
<input name="uedit-add-button-dialog" type="text" id="uedit-add-button-dialog-start" placeholder="Start" value="" title="Start tag" class="input-dialog-input-field">
</td></tr><tr><td>End: </td><td>
<input name="uedit-add-button-dialog" type="text" id="uedit-add-button-dialog-end" placeholder="End" value="" title="End tag" class="input-dialog-input-field">
</td></tr><tr><td>Title: </td><td>
<input name="uedit-add-button-dialog" type="text" id="uedit-add-button-dialog-title" placeholder="Title" value="Custom Button" title="Title" class="input-dialog-input-field">

</td></tr><tr><td>Class: </td><td>
<input name="uedit-add-button-dialog" type="text" id="uedit-add-button-dialog-class" placeholder="Class" value="" title="Class name (CSS)" class="input-dialog-input-field">
</td></tr><tr><td><span title="Keyboard Shortcut">KBDS: </span></td><td>
<select name="uedit-add-button-dialog" id="uedit-add-button-dialog-firstkey" title="First Modifier" class="input-dialog-input-field uedit-skey-select">
    <option value="" title="Blank" selected="selected">Unset</option>
    <option value="Ctrl-" title="Ctrl">Ctrl</option>
    <option value="Alt-" title="Alt">Alt</option>
    <option value="Shift-" title="Shift">Shift</option>
</select>
<select name="uedit-add-button-dialog" id="uedit-add-button-dialog-secondkey" title="Second Modifier" class="input-dialog-input-field uedit-skey-select">
    <option value="" title="Blank" selected="selected">Unset</option>
    <option value="Ctrl-" title="Ctrl">Ctrl</option>
    <option value="Alt-" title="Alt">Alt</option>
    <option value="Shift-" title="Shift">Shift</option>
    <option value="Tab" title="Tab">Tab</option>
    <option value="Space" title="Space Bar">Space</option>
    <option value="Enter" title="Enter">Enter</option>
    <option value="Esc" title="Escape">Esc</option>
    <option value="Insert" title="Insert">Insert</option>
    <option value="Delete" title="Delete">Del</option>
    <option value="End" title="End">End</option>
    <option value="Home" title="Home">Home</option>
    <option value="PageUp" title="Page Up">PgUp</option>
    <option value="PageDown" title="Page Down">PgDn</option>
    <option value="Up" title="Arrow Up">Arrow Up</option>
    <option value="Left" title="Arrow Left">Arrow Left</option>
    <option value="Right" title="Arrow Right">Arrow Right</option>
    <option value="Down" title="Arrow Down">Arrow Down</option>
    <option value="F1" title="F1">F1</option>
    <option value="F2" title="F2">F2</option>
    <option value="F3" title="F3">F3</option>
    <option value="F4" title="F4">F4</option>
    <option value="F5" title="F5">F5</option>
    <option value="F6" title="F6">F6</option>
    <option value="F7" title="F7">F7</option>
    <option value="F8" title="F8">F8</option>
    <option value="F9" title="F9">F9</option>
    <option value="F10" title="F10">F10</option>
    <option value="F11" title="F11">F11</option>
    <option value="F12" title="F12">F12</option>
    
</select>
<input name="uedit-add-button-dialog" type="text" id="uedit-add-button-dialog-skey" placeholder="Key" value="" title="Shortcut Key" maxlength="1" class="input-dialog-input-field uedit-skey-select">
</td></tr><tr><td>Name: </td><td>
<input name="uedit-add-button-dialog" type="text" id="uedit-add-button-dialog-innerhtml" placeholder="Button name" value="" title="Button name (HTML Markup Allowed)" required="true" class="input-dialog-input-field">
<span class="glyphicon glyphicon-asterisk warning"></span>
</td></tr><tr><td>Type: </td><td>
<select name="uedit-add-button-dialog" id="uedit-add-button-dialog-type" title="Type of input box" class="input-dialog-input-field">
    <option value="input" title="Single Line Input">Text Field</option>
    <option value="textarea" title="Multi Line Input">Text Area</option>
</select>
</td></tr><tr><td>Position: </td><td>
<input name="uedit-add-button-dialog" type="number" id="uedit-add-button-dialog-position" placeholder="Position" value="" title="Position index" min="0" class="input-dialog-input-field">
</td></tr>
</table>
<button id="uedit-add-button-dialog-cancel-button" formnovalidate="true" onclick="itemGone('uedit-add-button-dialog')">Close</button>
<button id="uedit-add-button-dialog-submit-button" onclick="validateForm('uedit-add-button-dialog','toolBar1','add')">Add</button>



</div>


<div class="input-dialog" id="uedit-edit-button-dialog">
<p>Edit Button</p>
<table class="noborder"><tr><td>
Lang:</td><td>
<input name="uedit-edit-button-dialog" type="text" id="uedit-edit-button-dialog-lang" placeholder="Language/Section" value="html" title="Language/section name" maxlength="30" class="input-dialog-input-field">
</td></tr><tr><td>Start: </td><td>
<input name="uedit-edit-button-dialog" type="text" id="uedit-edit-button-dialog-start" placeholder="Start" value="" title="Start tag" class="input-dialog-input-field">
</td></tr><tr><td>End: </td><td>
<input name="uedit-edit-button-dialog" type="text" id="uedit-edit-button-dialog-end" placeholder="End" value="" title="End tag" class="input-dialog-input-field">
</td></tr><tr><td>Title: </td><td>
<input name="uedit-edit-button-dialog" type="text" id="uedit-edit-button-dialog-title" placeholder="Title" value="Custom Button" title="Title" class="input-dialog-input-field">

</td></tr><tr><td>Class: </td><td>
<input name="uedit-edit-button-dialog" type="text" id="uedit-edit-button-dialog-class" placeholder="Class" value="" title="Class name (CSS)" class="input-dialog-input-field">
</td></tr><tr><td><span title="Keyboard Shortcut">KBDS: </span></td><td>

<select name="uedit-edit-button-dialog" id="uedit-edit-button-dialog-firstkey" title="First Modifier" class="input-dialog-input-field uedit-skey-select">
    <option value="" title="Blank">Unset</option>
    <option value="Ctrl-" title="Ctrl">Ctrl</option>
    <option value="Alt-" title="Alt">Alt</option>
    <option value="Shift-" title="Shift">Shift</option>
</select>
<select name="uedit-edit-button-dialog" id="uedit-edit-button-dialog-secondkey" title="Second Modifier" class="input-dialog-input-field uedit-skey-select">
    <option value="" title="Blank">Unset</option>
    <option value="Ctrl-" title="Ctrl">Ctrl</option>
    <option value="Alt-" title="Alt">Alt</option>
    <option value="Shift-" title="Shift">Shift</option>
    <option value="Tab" title="Tab">Tab</option>
    <option value="Space" title="Space Bar">Space</option>
    <option value="Enter" title="Enter">Enter</option>
    <option value="Esc" title="Escape">Esc</option>
    <option value="Insert" title="Insert">Insert</option>
    <option value="Delete" title="Delete">Del</option>
    <option value="End" title="End">End</option>
    <option value="Home" title="Home">Home</option>
    <option value="PageUp" title="Page Up">PgUp</option>
    <option value="PageDown" title="Page Down">PgDn</option>
    <option value="Up" title="Arrow Up">Arrow Up</option>
    <option value="Left" title="Arrow Left">Arrow Left</option>
    <option value="Right" title="Arrow Right">Arrow Right</option>
    <option value="Down" title="Arrow Down">Arrow Down</option>
    <option value="F1" title="F1">F1</option>
    <option value="F2" title="F2">F2</option>
    <option value="F3" title="F3">F3</option>
    <option value="F4" title="F4">F4</option>
    <option value="F5" title="F5">F5</option>
    <option value="F6" title="F6">F6</option>
    <option value="F7" title="F7">F7</option>
    <option value="F8" title="F8">F8</option>
    <option value="F9" title="F9">F9</option>
    <option value="F10" title="F10">F10</option>
    <option value="F11" title="F11">F11</option>
    <option value="F12" title="F12">F12</option>
</select>
<input name="uedit-edit-button-dialog" type="text" id="uedit-edit-button-dialog-skey" placeholder="Key" value="" title="Shortcut Key" maxlength="1" class="input-dialog-input-field uedit-skey-select">

</td></tr><tr><td>Name: </td><td>
<input name="uedit-edit-button-dialog" type="text" id="uedit-edit-button-dialog-innerhtml" placeholder="Button name" value="" title="Button name (HTML applicable)" required="true" class="input-dialog-input-field">
<span class="glyphicon glyphicon-asterisk warning"></span>
</td></tr><tr><td>Type: </td><td>
<select name="uedit-edit-button-dialog" id="uedit-edit-button-dialog-type" title="Type of input box" class="input-dialog-input-field">
    <option value="input" title="Single Line Input">Text Field</option>
    <option value="textarea" title="Multi Line Input">Text Area</option>
</select>
</td></tr><tr><td>Position: </td><td>
<input name="uedit-edit-button-dialog" type="number" id="uedit-edit-button-dialog-position" placeholder="Position" value="" title="Position index" min="0" class="input-dialog-input-field">
</td></tr>
</table>
<button id="uedit-edit-button-dialog-cancel-button" formnovalidate="true" onclick="itemGone('uedit-edit-button-dialog')">Close</button>
<button id="uedit-edit-button-dialog-submit-button" onclick="validateForm('uedit-edit-button-dialog','toolBar1','edit')">Done</button>

</div>





<div class="container" id="ueditor" >
<div class="row" id="ueditor-row">

<div class="col-xs-3" >
<div class="row">
<div class="col-xs-12" id="settings-bar">
<button id="uedit-settings" title="Settings" class="options-button unavailable"></button>
<button id="add-button" title="Add new button" class="options-button" onclick="showInputDialog('uedit-add-button-dialog')"></button>
<button id="uedit-delete-button" title="Delete button/s" class="options-button unavailable" onclick="showButtonDeleteDialog('uedit-delete-button-dialog')"></button>
<button id="reset-toolBar1-button" title="Reset To Default" class="options-button" onclick="resetButtonsToDefault('toolBar1','html','editor-buttons')"></button>
<button id="uedit-info-button" title="Show Help/Info" class="options-button" onclick="showUeditInfo('')"></button>
<br>
<table id="uedit-save-as-table">
<tr>
<td id="uedit-save-as-table-tr1-td1" style="width:40%;">
<span id="uedit-save-as-button" class="options-button">
<object style="visibility: visible;" data="uedit/media/downloadify.swf" name="downloadify_1433158930117" id="downloadify_1433158930117" type="application/x-shockwave-flash" height="30" width="100">
<param value="always" name="allowScriptAccess">
<param value="transparent" name="wmode">
<param value="queue_name=downloadify_1433158930117&amp;width=100&amp;height=100&amp;downloadImage=uedit/images/download.png" name="flashvars">
</span>
</td>
<td id="uedit-save-as-table-tr1-td2" style="width:60%;">
<textarea id="save-as-path-input-field" style="resize:none;" placeholder="File Name"></textarea>
</td>
</tr>
</table>

</div>
</div>
<div class="row">
<div class="col-xs-12" id="toolBox">
<div >
<table id="toolBar1"></table>


</div>
</div>
</div>


</div>






<div class="col-xs-9">
<div id="editor-container" contenteditable="true" spellcheck="true" lang="en_US">
</div>
</div> 


</div>
			</div>
	












<script>
checkForLocalStorageSupport();
editor=initAceEditor();
checkForFirstRunAndInitializeButtons('toolBar1',"html","editor-buttons");
getFromStorage();
setMainContentFromStorage();
editor.getSession().on('change', function(e) {
fillStorageWithMainContent();
console.log("Main content saved");
});
var filename=document.getElementById("save-as-path-input-field");
if (filename.addEventListener) {
  filename.addEventListener('input', function() {
    fillStorage();
    console.log("fillStorage successful, stored in local storage");
  }, false);
} else if (filename.attachEvent) {
  filename.attachEvent('onpropertychange', function() {
    // IE-specific event handling code
    fillStorage();
    console.log("fillStorage successful, stored in local storage\nIE is not a recommended browser for this editor");
  });
}
initDownloadify();
addCustomKeyBindingsForAce();


</script>

	</body>
</html>