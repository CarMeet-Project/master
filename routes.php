<?php

    Route::set('index.php',function() {
        index::CreateView('index');
    });

    Route::set('about-us',function() {
        AboutUs::CreateView('AboutUs');
    });

    Route::set('contact-us',function() {
        ContactUs::CreateView('ContactUs');
    });

    Route::set('store',function() {
        Store::CreateView('Store');
    });


 ?>
