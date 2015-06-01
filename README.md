This is a tiny attempt to develop a Universal Text Editor.

#Goal:

1. To support syntax highlighting for different languages.

2. Create Language specific buttons and categorize them.

3. Highly customizable.

#Features Available:

1. Syntax highlighting for  PHP HTML CSS and JavaScript.

2. Buttons can be defined to modify text.

3. Default button set for HTML and PHP.

4. Buttons are customizable (create and delete).


#Usage:
The salient feature is the custom buttons. A custom button can be defined to do various types of text manipulation.

For example:

If the <kbd class="button">General</kbd> button has a start value `<span class="quote">` and end value of `</span>`
then by click it you can simply enter the whole string as `start``end` or if you perform this action on
a selected text, it will replace the text with `<span class="quote">text</span>`

If you define the start value with `//` and leave end empty, you will get single line comment which is used in several languages

if you define the start value with `/*` and end value with `*/`, you get a multiline comment.



