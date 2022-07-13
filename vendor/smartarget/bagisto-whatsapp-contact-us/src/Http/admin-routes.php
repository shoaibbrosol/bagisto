<?php

Route::group([
        'prefix'        => 'admin/whatsappcontactus',
        'middleware'    => ['web', 'admin']
    ], function () {

        Route::get('', 'Smartarget\WhatsappContactUs\Http\Controllers\Admin\WhatsappContactUsController@index')->defaults('_config', [
            'view' => 'whatsappcontactus::admin.index',
        ])->name('admin.whatsappcontactus.index');

});