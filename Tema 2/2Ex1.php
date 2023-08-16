<?php
    class Message{
        public function displayMessage($name){
            echo "Hello, my name is $name";
        }
    }

    $mesaj= new Message();
    $name= "Alex";
    $mesaj->displayMessage($name);