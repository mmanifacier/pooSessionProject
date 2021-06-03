<?php

    class Session
    {
        public $attribut = [];

        public function add($key, $value)
        {
            $this->attribut[$key] = $value;
        }

        public function __set($key, $value)
        {
            return $this->add($key, $value);
        }

        public function update($key, $value)
        {
            $this->attribut[$key] = $value;
        }

        public function __get($key)
        {
            return $this->attribut[$key];
        }

        public function __isset($key)
        {
            isset($this->attribut[$key]);
        }

        public function __unset($key)
        {
            unset($this->attribut[$key]);
        }

        public function __wakeup()
        {
            echo ('Reconstruction de l\'objet');
        }
    }

?>