<?php

    $r = Router::getInstance();
    $r->get("", function() {
        print('Welcome to the home page');
    });

    $r->get('/Client/:memberName', function($memberName) {
        print( 'I\'m viewing ' . $memberName . '\'s profile.' );
    });

    $r->post('/ContactUs', function() {
        print( 'This action will be fired only if a POST request will occure');
    });