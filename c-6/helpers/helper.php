<?php 

function form_start($action, $method = 'get'){
    return '<form action="' . $action .'" method="'. $method .'">';
};

function inputField($type, $name, $value = ''){
    return '<input type="'. $type . '" name="'. $name .'" value="'. $value . '">';
}


function form_end(){
    return '</form>';
};