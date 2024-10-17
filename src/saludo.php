<?php
    namespace Saludo\Saludo;

    Class Saludo {
        private $msg;

        public function __construct($msg) {
            $this->setSaludo();
        }

        private function setSaludo() {
            $this->msg = 'Hola Mundo!';
        }

        public function getSaludo() {
            echo $this->msg;
        }
    }