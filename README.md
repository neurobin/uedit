This is a tiny attempt to develop a Universal Text Editor.


#Features Available:

<ol>
<li>You never need to worry about saving your content. It's always saved, even if your pc shuts down suddenly due to power failure or other unexpected events (As long as you don't uninstall your browser it's available).</li>
<li>Syntax highlighting for  PHP HTML CSS and JavaScript.</li>

<li>Content Assist for PHP HTML CSS and JavaScript.</li>

<li>Buttons can be defined to modify text.</li>

<li>Default button set for HTML and PHP.</li>

<li>Buttons are customizable (create and delete).</li>
</ol>
<div id="usage"></div>
#Usage:
The salient feature is the custom buttons. A custom button can be defined to do various types of text manipulation.

For example:

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
</ol>

