<p>This is a tiny attempt to develop a Universal Text Editor.</p>

<h1>Usage:</h1>
<p>The salient feature is the custom buttons. A custom button can be defined to do various types of text manipulation.</p>
<p>For example:</p>
<ol>
<li>
<p>If the <kbd class="button">General</kbd> button has a <code>start</code> value <code>&lt;span class="quote"&gt;</code> and <code>end</code> value of <code>&lt;/span&gt;</code>
then by clicking it you can simply enter the whole string as <code>start</code> <code>end</code> or if you perform this action on
a selected text, it will replace the text with <code>&lt;span class="quote"&gt;text&lt;/span&gt;</code> i.e <code>start</code>text<code>end</code></p>
</li>
<li>
<p>If you define the <code>start</code> value with <code>&lt;!-- </code> and <code>end</code> value with <code> --&gt;</code>, you will get HTML Comment.</p>
</li>
<li>
<p>If you define the <code>start</code> value with <code>//</code> and leave <code>end</code> empty, you will get single line comment which is the same for several languages.</p>
</li>
<li>
<p>If you define the start value with <code>/*</code> and end value with <code>*/</code>, you get a multiline comment.</p>
</li>
<li>
<p>You can put your code snippet in the <code>start</code> and <code>end</code> boxes and insert them into editor by simply clicking on the corresponding button.</p>
</li>
<li>You can even put an entire file content into those two boxes and insert them anywhere in the editor by simple button click.</li>
<li>To edit properties of a button, right click on that button and select <q>edit</q>.</li>
<li>To delete a button, right click on that button and select <q>delete</q>.</li>
<li>You can set keyboard shortcuts for your custom buttons. To set a keyboard shortcut for an existing button, right click on the button and fill the fileds marked by the name <span class="quote">KBDS</span>. The same applies for adding a new button too.</li>
</ol>	

<div id="kbd-shortcuts"><br></div>
#Keyboard Shortcuts

## Line Operations

| Windows/Linux                  | Mac                            | Action                         |
|:-------------------------------|:-------------------------------|:-------------------------------|
| Ctrl-D | Command-D | Remove line |
| Alt-Shift-Down | Command-Option-Down | Copy lines down |
| Alt-Shift-Up | Command-Option-Up | Copy lines up |
| Alt-Down | Option-Down | Move lines down |
| Alt-Up | Option-Up | Move lines up |
| Alt-Delete | Ctrl-K | Remove to line end |
| Alt-Backspace | Command-Backspace | Remove to line start |
| Ctrl-Backspace | Option-Backspace, Ctrl-Option-Backspace | Remove word left |
| Ctrl-Delete | Option-Delete | Remove word right |
| --- | Ctrl-O | Split line |


## Selection

| Windows/Linux                  | Mac                            | Action                         |
|:-------------------------------|:-------------------------------|:-------------------------------|
| Ctrl-A | Command-A | Select all |
| Shift-Left | Shift-Left | Select left |
| Shift-Right | Shift-Right | Select right |
| Ctrl-Shift-Left | Option-Shift-Left | Select word left |
| Ctrl-Shift-Right | Option-Shift-Right | Select word right |  
| Shift-Home | Shift-Home | Select line start |
| Shift-End | Shift-End | Select line end |
| Alt-Shift-Right | Command-Shift-Right | Select to line end |
| Alt-Shift-Left | Command-Shift-Left | Select to line start |
| Shift-Up | Shift-Up | Select up |
| Shift-Down | Shift-Down | Select down |
| Shift-PageUp | Shift-PageUp | Select page up |
| Shift-PageDown | Shift-PageDown | Select page down |
| Ctrl-Shift-Home | Command-Shift-Up | Select to start |
| Ctrl-Shift-End | Command-Shift-Down | Select to end |
| Ctrl-Shift-D | Command-Shift-D | Duplicate selection |
| Ctrl-Shift-P | --- | Select to matching bracket |


## Multicursor

| Windows/Linux                  | Mac                            | Action                         |
|:-------------------------------|:-------------------------------|:-------------------------------|  
| Ctrl-Alt-Up | Ctrl-Option-Up | Add multi-cursor above |
| Ctrl-Alt-Down | Ctrl-Option-Down | Add multi-cursor below |
| Ctrl-Alt-Right | Ctrl-Option-Right | Add next occurrence to multi-selection |
| Ctrl-Alt-Left | Ctrl-Option-Left | Add previous occurrence to multi-selection |
| Ctrl-Alt-Shift-Up | Ctrl-Option-Shift-Up | Move multicursor from current line to the line above |
| Ctrl-Alt-Shift-Down | Ctrl-Option-Shift-Down | Move multicursor from current line to the line below |
| Ctrl-Alt-Shift-Right | Ctrl-Option-Shift-Right | Remove current occurrence from multi-selection and move to next |
| Ctrl-Alt-Shift-Left | Ctrl-Option-Shift-Left | Remove current occurrence from multi-selection and move to previous |
| Ctrl-Shift-L | Ctrl-Shift-L | Select all from multi-selection |


## Go to

| Windows/Linux                  | Mac                            | Action                         |
|:-------------------------------|:-------------------------------|:-------------------------------|  
| Left | Left, Ctrl-B | Go to left |
| Right | Right, Ctrl-F | Go to right |
| Ctrl-Left | Option-Left | Go to word left |
| Ctrl-Right | Option-Right | Go to word right |
| Up | Up, Ctrl-P | Go line up |
| Down | Down, Ctrl-N | Go line down |
| Alt-Left, Home | Command-Left, Home, Ctrl-A | Go to line start |
| Alt-Right, End | Command-Right, End, Ctrl-E | Go to line end |
| PageUp | Option-PageUp | Go to page up |
| PageDown | Option-PageDown, Ctrl-V | Go to page down |
| Ctrl-Home | Command-Home, Command-Up | Go to start |
| Ctrl-End | Command-End, Command-Down | Go to end |
| Ctrl-L | Command-L | Go to line |
| Ctrl-Down | Command-Down | Scroll line down |
| Ctrl-Up | --- | Scroll line up |
| Ctrl-P | --- | Go to matching bracket |
| --- | Option-PageDown | Scroll page down |
| --- | Option-PageUp | Scroll page up |


## Find/Replace

| Windows/Linux                  | Mac                            | Action                         |
|:-------------------------------|:-------------------------------|:-------------------------------|  
| Ctrl-F | Command-F | Find |
| Ctrl-R | Command-Option-F | Replace |
| Ctrl-K | Command-G | Find next |
| Ctrl-Shift-K | Command-Shift-G | Find previous |


## Folding

| Windows/Linux                  | Mac                            | Action                         |
|:-------------------------------|:-------------------------------|:-------------------------------|  
| Alt-L, Ctrl-F1 | Command-Option-L, Command-F1 | Fold selection |
| Alt-Shift-L, Ctrl-Shift-F1 | Command-Option-Shift-L, Command-Shift-F1 | Unfold |
| Alt-0 | Command-Option-0 | Fold all |
| Alt-Shift-0 | Command-Option-Shift-0 | Unfold all |


## Other

| Windows/Linux                  | Mac                            | Action                         |
|:-------------------------------|:-------------------------------|:-------------------------------|  
| Ctrl-S | Command-S | Save |
| Tab | Tab | Indent |
| Shift-Tab | Shift-Tab | Outdent |
| Ctrl-Z | Command-Z | undo |
| Ctrl-Shift-Z, Ctrl-Y | Command-Shift-Z, Command-Y | Redo |
| Ctrl-, | Command-, | Show the settings menu |
| Ctrl-/ | Command-/ | Toggle comment |
| Ctrl-T | Ctrl-T | Transpose letters |
| Ctrl-Enter | Command-Enter | Enter full screen |
| Ctrl-Shift-U | Ctrl-Shift-U | Change to lower case |
| Ctrl-U | Ctrl-U | Change to upper case |
| Insert | Insert | Overwrite |
| Ctrl-Shift-E | Command-Shift-E | Macros replay |
| Ctrl-Alt-E | --- | Macros recording |
| Delete | --- | Delete |
| --- | Ctrl-L | Center selection |

<div id="btn-custom-skey"></div>
#Custom Keyboard Shortcuts:

You can set custom keyboard shortcuts for buttons (i.e tasks) which you require more often for your editing. Keyboard shortcuts are limited to 3 primary modifiers (Ctrl, Alt, Shift). The secondary modifier is optional and it's limited to 30 options. The third one is the key and you can put almost anything here (1 character only). Thus combining 1 mandatory modifier and one optional modifier and a key, you can create suitable keyboard shortcuts as you like. When creating keyboard shortcuts you need to consider certain things:

1. Keyboard shortcut, which tries to overwrite any existing shortcut, may or may not work depending on the environment and priority.
2. Keyboard shortcut, which conflicts with basic functions (such as <kbd>shift+a</kbd> and such, which is actually capitalizaion or writing printable characters)  won't be allowed and you will be rendered with an error message.
3. Watch out for spaces. If you have space in the third key field  it will show error message and you may not find what's causing this error because the white space is not visible (that's why it is called white space in the first place).
4. There are two types of shortcuts. One is three keys and other is two keys. There are some predefined keys in the second modifier field which forces the shrotcut to be two keys, i.e it will show error if you try to use a third key.
These keys are:
<kbd>Space Bar</kbd> <kbd>Tab</kbd> <kbd>Enter</kbd> <kbd>Esc</kbd> <kbd>Insert</kbd> <kbd>Home</kbd> <kbd>End</kbd> <kbd>Del</kbd> <kbd>PgUp</kbd> <kbd>PgDn</kbd> <kbd>Arrow Keys</kbd> <kbd>F1...F12</kbd>
<script>
function getPageURLById(id) {
	var dir,file;
	dir=window.location.href.substr(0,window.location.href.lastIndexOf("/")+1);
	file=window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	if (file.lastIndexOf("#")>-1) {
var filename=file.substr(0,file.lastIndexOf("#"));
}
var showInfoURL=dir+filename+"#"+id;
return showInfoURL;
}
</script>
5. There are some default keyboard shortcuts which are not allowed to be changed. <a href="uedit/showinfo.php#btn-invalid-custom-skey">This is a list of these keyboard shortcuts.</a>
6. There are some keyboard shortcuts which are not allowed to be set, because they are system default or browser default or some other reasons. <a href="uedit/showinfo.php#btn-invalid-custom-skey-others">This is a list of these keyboard shortcuts.</a>


<div id="btn-invalid-custom-skey"></div>
##Default Shortcuts That Are Not Allowed To Be Changed:


| Windows/Linux                  | Mac                            | Action                         |
|:-------------------------------|:-------------------------------|:-------------------------------|  
| Ctrl-S | Command-S | Save |
| Ctrl-Z | Command-Z | undo |
| Ctrl-Shift-Z | Command-Shift-Z | Redo |
| Ctrl-A | Command-A | Select all |
| Ctrl-F | Command-F | Find |
| Ctrl-R | Command-Option-F | Replace |
| Ctrl-K | Command-G | Find next |
| Ctrl-Shift-K | Command-Shift-G | Find previous |
| Shift-Left | Shift-Left | Select left |
| Shift-Right | Shift-Right | Select right |
| Shift-Up | Shift-Up | Select up |
| Shift-Down | Shift-Down | Select down |
| Shift-Home | Shift-Home | Select line start |
| Shift-End | Shift-End | Select line end |
| Shift-PageUp | Shift-PageUp | Select page up |
| Shift-PageDown | Shift-PageDown | Select page down |
| Ctrl-Shift-Home | Command-Shift-Up | Select to start |
| Ctrl-Shift-End | Command-Shift-Down | Select to end |
| Ctrl-C | Command-C | Copy to clipboard |
| Ctrl-V | Command-V | Paste From clipboard |
| Ctrl-X | Command-X | Cut to clipboard |
| Ctrl-Space | Command-Space | Content Assist|



<div id="btn-invalid-custom-skey-others"></div>
##Other Invalid Custom Shortcuts:


| Windows/Linux                  | Mac                            | Possible Action                         |
|:-------------------------------|:-------------------------------|:-------------------------------|  
| Ctrl-D | Command-D | May be a browser default |
| Ctrl-Tab | Command-Tab | May be a browser default |
| Alt-Tab | Option-Tab | OS default|
| Alt-Space | Option-Space | Possible OS default |



<div id="btn-valid-markups"></div>
#Markups In Button Names!!

You can use HTML Markups in custom button name. That means you get to design your own custom button with
HTML Markup. For example, if you put `<b>buttonName</b>` as the button name then your button will
show with text <b>buttonName</b> bolded. You can put inline styling as well. The funny thing is, you can even put
JavaScript code in the name field so that it executes onmouseout or onmouseover or on whatever 
property it is defined on. The catch is, you have to put all of that in a single line.

##Valid Markups In Custom Buttons:

| Markup                         | Interpretation/Preview         |
|:-------------------------------|:-------------------------------|
| `<span></span>` | <span>Span</span> |
| `<kbd></kbd>` | <kbd>Keyboard key</kbd> |
| `<var></var>` | <var>Variable</var> |
| `<s></s>` | <s>Deleted text</s> |
| `<del></del>` | <del>Deleted text</del> |
| `<q></q>` | <q>Short quotation</q> |
| `<b></b>` | <b>Bold text</b> |
| `<i></i>` | <i>Italic text</i> |
| `<u></u>` | <u>Underlined text</u> |
| `<code></code>` | <code>Code</code> |
| `<em></em>` | <em>Emphasis</em> | 
| `<small></small>` | <small>Small text</small> |
| `<sub></sub>` | <sub>Subscript</sub> |
| `<sup></sup>` | <sup>Superscript</sup> |
| `<mark></mark>` | <mark>Mark</mark> |


##Rules To use Markups in Custom Button Name:

The only rule is to not use any spaces between `<` and `tagname` or `<` and `/` or `/tagname` and `>` or `/` and `tagname`.

Example:

<ol>
<li><code>&lt; span&gt;name&lt;/span&gt;</code> is wrong, space between <code>&lt;</code> and <code>span</code> </li>
<li><code>&lt;span&gt;name&lt; /span&gt;</code> is wrong, space between <code>&lt;</code> and <code>/span</code></li>
<li><code>&lt;span&gt;name&lt;/ span&gt;</code> is wrong, space between <code>/</code> and <code>span</code></li>
<li><code>&lt;span&gt;name&lt;/span &gt;</code> is wrong, space between <code>/span</code> and <code>&gt;</code></li>
<li><code>&lt;span &gt;name&lt;/span&gt;</code> is correct</li>
<li><code>&lt;span class="classname"&gt;name&lt;/span&gt;</code> is correct</li>
</ol>

<span class="quote">Note: To put `<` or `>` literally, you need to use `&lt;` and `&gt;` respectively. 
</span>

HTML Markup is only allowed in Button Name. Other fields in creating new button will take the literal meaning of any input string.

You can apply CSS styling in custom buttons. Either you can use your own inline styling or available CSS classes which is used throughout this website. For example if you put `<span class="warningcolor">buttonName</span>` as the name, the button name will show as `buttonName` with dark red color.

<div id="btn-valid-classname"></div>
##Available CSS Classes:
The following list defines the valid set of CSS class names that are allowed in class field for custom buttons. There's absolutely no restriction in the name field of custom buttons; You can use whatever class you like inside HTML tags for button name (The effect will be your responsibility though :D).<br>

| Class                         | Preview         | Applicable To |
|:------------------------------|:----------------|:--------------|
| `warningcolor` | <span class="warningcolor">Text</span> | Button/Button Name |
| `error` | <span class="error">Text</span> | Button/Button Name |
| `message` | <span class="message">Text</span> | Button/Button Name |
| `button` | <span class="button">Text</span> | Button/Button Name |
| `quote` | <span class="quote">Text</span> | Button/Button Name |
| `light-quote` | <span class="light-quote">Text</span> | Button/Button Name |
| `warning` | <span class="warning">Text</span> | Button/Button Name |
| `edit` | <span class="edit">Text</span> | Button/Button Name |
| `comment` | <span class="comment">Text</span> | Button/Button Name |
| `caret-right` | <span class="caret-right"></span> | Button/Button Name |
| `caret-left` | <span class="caret-left"></span> | Button/Button Name |
| `caret-up` | <span class="caret-up"></span> | Button/Button Name |
| `caret-down` | <span class="caret-down"></span> | Button/Button Name |
| `editor-button` | -- | -- |
| `default` | -- | -- |
| `custom` | -- | -- |
| `dummy` | -- | -- |
| `uedit-btn-custom-*` (*=name) | -- | -- |



<div id="local-storage-not-found"></div>
#Local Storage:
Uedit uses local storage of browser to store user specific data and content. If Local storage is not 
available or disabled in the browser then nothing will be saved and simple reload of the page will make you
lose all of your content. So before starting writing/editing make sure your browser supports the use of local
storage and it is enabled. To check it, you don't have to do anything special, just reload the editor and if it
finds everything right it won't say anything, otherwise it will warn you with a message box.

<div id="local-storage-disabled"></div>
##What will you do if the message box says local storage is disabled:
You just need to go to your browser settings and enable local storage (or cookie in some browsers).

###For firefox:
<ol>
<li>In a new tab type <code>about:config</code> and hit <kbd>Enter</kbd> and confirm action.</li>
<li>Put <code>Dom.storage.enabled</code> in the search bar and hit <kbd>Enter</kbd>.</li>
<li>Check the <code>value</code>, if it's true, local storage is enabled or vice-versa.</li>
<li>Double click on this to change the value.</li>
</ol>
###Chrome:
<ol>
<li>Go to settings, then expand <q>Advanced settings</q>.</li>
<li>navigate to <q>Privacy</q> section</li>
<li>Click on <q>content settings</q></li>
<li>Look in the <q>Cookie</q> section</li>
<li>Check the check box that says <q>Allow local data to be set</q></li>
</ol>
