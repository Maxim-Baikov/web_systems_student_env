<?php

    $r = Router::getInstance();


    $r->get('/Room',function (){
        print('Welcome to the room page');
    });

    $r->get('/Client/:memberName',function ($memberName) {
        print( 'I\'m viewing ' . $memberName . '\'s profile.' );
        });

    $r->get('/ContactUs', function () {
        print( 'This action will be fired only if a GET request will occure');
    });






