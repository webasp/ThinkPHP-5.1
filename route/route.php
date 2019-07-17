<?php

Route::group('v1', function() {
    Route::get('banner/:id', 'api/v1.banner/getBanner');
});