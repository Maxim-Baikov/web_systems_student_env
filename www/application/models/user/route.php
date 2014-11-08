<?php

$app = Router::getInstance();

$app->get("/admin/rooms", function() {
    print('Welcome to the home page');
});