<?php

function template(string $template_name) {
    echo file_get_contents('template/' . $template_name . '.html');
}

?>