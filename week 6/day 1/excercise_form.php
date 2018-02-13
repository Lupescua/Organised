<?php

class form{
    /**
    * generate a select field
    *
    * generate field, put options inside, choses the right options
    * adds additional HTML code
    *
    * @param $name - string, name attribute of the <select>
    * @param $options - array of option where keys are value attributes and
    *                      values are labels, eg. [123=> 'foo', 456=>'bar']
    * @param $selected - value with the options that should be initially selected
    * @param $attributes - string with HTML attributes (eg. onclick class, id) that should be appended to the end of the opening <select> tag
    * @return string - HTML code for the select field
    */

    public static function select($name, $options, $selected, $attributes)
    {
    $html = '<select name="'.$name.'" id="'.$attributes.'">';
        foreach($options as $value=>$label)
        {
            $html .= '<option value="'.$value.' '.($selected==$value ? ' selected': '') .' ">'.$label.'</option>';
        }
    $html .= '</select>';
    return $html;
    }
}

// It will return HTML code for a <select> field that would

// have the $name as value of it's name attribute
// have an <option> for each of the $options (keys are values, values are labels)
// have the <option> with the value equal to $selected selected.
// add the string in $html inside the opening <html> tag
// Then call it like this:

// echo form::select('color', ['red' => 'Red', 'blue' => 'Blue', 'green' => 'Green'], 'blue', 'id="color_select"');

?>
    <?php $selected_number = 3; ?>


    <form action="">
        <select name="number" id="">
            <option value="1" <?php if($selected_number==1) echo ' selected'?>>One</option>
            <option value="2" <?php echo ($selected_number==2 ? ' selected': '')?>>Two</option>
            <option value="3" <?php if($selected_number==3) echo ' selected'?>>Three</option>
        </select>
    </form>
    <?php
    echo form::select('color', ['red' => 'Red', 'blue' => 'Blue', 'green' => 'Green'], 'blue', 'id="color_select"');
    ?>