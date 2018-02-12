Here is the form

<!-- 13.
In the form file open and close a <form> element.

The form will be sent to the same page that it appears on and it's method will be post -->
<form method="post">

<!-- 20.
Within the form file, right before the text input field, write an inline PHP foreach loop

It would loop through the array $items and have each key available in the variable $i and each value in the variable $text. -->
</br>
<?php
foreach ($items as $i => $text) {

// 21. Within the loop, put HTML code for a text input field. It will be identical to the one that you already have, except for two things:     It's value will be the value of the variable $text (output with echo).     in it's name the number 0 will be replaced with the current value of variable $i (output with echo)     Make sure that the variable $text is output using the function htmlspeciachars
echo '<input type="text" value="'.htmlspecialchars($text).'"  name="item['.$i.']"> </input>';
echo'<hr>';

}
?>





<!-- 15.
Inide the form add an input field, type text. It's value will be empty, it's name will be item[0]

Write some text within the field and submit the form. -->

<!-- 22.
Change the original text input field (the one outside of the loop) so that in it's name attribute, instead of the number 0, there will be echoed the number of items in the $items array. Use the function count to get it. -->
</br>
<input type="text" value="" name="item[<?php echo count($items); echo'<hr>';?>]"> </input>

<!-- 14.
Inside the form add a submit button. The text on the button will be Add. -->
<button type="submit" value="Submit">Submit</button>
 </form>