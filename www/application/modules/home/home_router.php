<?php

function home_router() {
    $r = Router::getInstance();
    $r->get("/Home", function() {
        print('Welcome to the home page');
    });


} 