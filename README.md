This is a tiny attempt to develop a Universal Text Editor.


#Features Available:

1. Syntax highlighting for  PHP HTML CSS and JavaScript.

2. Content Assist for PHP HTML CSS and JavaScript.

3. Buttons can be defined to modify text.

4. Default button set for HTML and PHP.

5. Buttons are customizable (create and delete).


#Usage:
The salient feature is the custom buttons. A custom button can be defined to do various types of text manipulation.

For example:

1. If the <kbd class="button">General</kbd> button has a `start` value `<span class="quote">` and `end` value of `</span>`
then by clicking it you can simply enter the whole string as `start` `end` or if you perform this action on
a selected text, it will replace the text with `<span class="quote">text</span>` i.e `stat`text`end`

2. If you define the `start` value with `//` and leave `end` empty, you will get single line comment which is the same for several languages.

3. If you define the start value with `/*` and end value with `*/`, you get a multiline comment.

4. You can put your code snippet in the `start` and `end` boxes and insert them into editor by simply clicking on the corresponding button.

5. You can even put an entire file content into those two boxes and insert them anywhere in the editor by simple button click.


