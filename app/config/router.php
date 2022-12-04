<?php

    $this->get('/', function(){
        echo "Home!!";
    });
    $this->get('/home', function(){
        echo "Estou na Home!!";
    });
    $this->get('/about', function(){
        echo "estou na bout!!";
    });



?>