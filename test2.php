<!DOCTYPE html>
<html xml:lang="en_US" lang="en_US">
	<head>
		<base href="../" />
		<?php chdir("../"); ?>
		<?php
		require_once 'head.php';
		?>
		
		<script src="uedit/scripts/src-noconflict/ace.js" type="text/javascript"></script>
		<script src="uedit/scripts/src-noconflict/ext-language_tools.js"></script>
		<script src="uedit/scripts/src-noconflict/mode-php.js"></script>
		<script src="uedit/scripts/src-noconflict/ext-spellcheck.js"></script>
		<script src="uedit/scripts/uedit.js" type="text/javascript"></script>
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
		
		
		

<div class="input-dialog" id="uedit-add-button-dialog">
<p>Add Button</p>
<input type="text" id="uedit-add-button-dialog-lang" placeholder="Language/Section" value="html" title="Put the language/section name" maxlength="30">

<br>
<input type="text" id="uedit-add-button-dialog-start" placeholder="Start" value="" title="Put the start tag">
<br>
<input type="text" id="uedit-add-button-dialog-end" placeholder="End" value="" title="Put the end tag">
<br>
<input type="text" id="uedit-add-button-dialog-title" placeholder="Title" value="Custom Button" title="Put the title" required="true">
<span class="required-flag"> *</span>
<br>
<input type="text" id="uedit-add-button-dialog-class" placeholder="Class" value="" title="Put the class name">
<br>
<input type="text" id="uedit-add-button-dialog-innerhtml" placeholder="Button name" value="" title="Put the button name" required="true">
<span class="required-flag"> *</span>
<br>
<input type="number" id="uedit-add-button-dialog-position" placeholder="Position" value="" title="Put the position index">
<br>
<button id="uedit-add-button-dialog-cancel-button" formnovalidate="true" onclick="itemGone('uedit-add-button-dialog')">Close</button>
<button id="uedit-add-button-dialog-submit-button" onclick="validateForm('uedit-add-button-dialog','toolBar1')">Add</button>



</div>




<div class="container" id="ueditor" >
<div class="row" id="ueditor-row">

<div class="col-xs-3" >
<div class="row">
<div class="col-xs-12" id="settings-bar">
<button id="uedit-settings" title="Settings" class="options-button"></button>
<button id="add-button" title="Add new button" class="options-button" onclick="showInputDialog('uedit-add-button-dialog')"></button>
<button id="reset-toolBar1-button" title="Reset To Default" class="options-button" onclick="resetButtonsToDefault('toolBar1','html','editor-buttons')"></button>
<br>
</div>
</div>
<div class="row">
<div class="col-xs-12" id="toolBox">
<div id="toolBar1">


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
initAceEditor();
createButtonFromJSON('toolBar1',"html","editor-buttons");
getFromStorage();
setMainContentFromStorage();

</script>
	</body>
</html>