<?php
/**
 * Created by PhpStorm.
 * User: sysman
 * Date: 11/6/14
 * Time: 9:19 AM
 */

class Router {
    /**
     * @var Router|null
     */
    static private $__instance = null;

    private function __construct() {
    }

    /**
     * @return Router
     */
    static public function getInstance() {
        if (is_null(self::$__instance)) {
            self::$__instance = new Router();
        }
        return self::$__instance;
    }

} 