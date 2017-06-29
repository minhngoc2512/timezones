<?php
/**
 * Created by PhpStorm.
 * User: minh
 * Date: 6/29/17
 * Time: 9:17 AM
 */

Route::get('timezones/{timezone?}','minh\timezones\TimezonesController@index');