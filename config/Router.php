<?php
require "./controllers/PageController.php";

class Router {
    public function __construct() {
    }
        public function handleRequest(array $get) : void {
            if(isset($get["route"]) || $get["route"] === "about") {
                $controller = new Controllers();
                $controller->about();
            }
            else if(!isset($get["route"])){
                $controller = new Controllers();
                $controller->home();
            }
            else{
                $controller = new Controllers();
                $controller->notFound();
            }
        }
}