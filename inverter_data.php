<?php
function inverter($data) {
    $newdata = explode("-", $data);
    $newdata = array_reverse($newdata);
    $newdata = implode("/", $newdata);

    return $newdata;
}

function reverter($data) {
    $newdata = explode("/", $data);
    $newdata = array_reverse($newdata);
    $newdata = implode("-", $newdata);

    return $newdata;
}