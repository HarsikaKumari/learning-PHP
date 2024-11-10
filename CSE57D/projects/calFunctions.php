<?php

function getPage($limit, $total) {
    if ($total > $limit) {
        $remainder = $total % $limit;
        $quotient = ($total - $remainder) / $limit;
        $page = !empty($remainder) ? $quotient + 1 : $quotient;
    } else {
        $page = 1;
    }
    return (int)$page;
}
