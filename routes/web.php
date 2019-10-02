<?php


Route::get('/', 'PagesController@index');
Route::get('/sign-up', 'PagesController@signup');
Route::get('/sign-in', 'PagesController@signin');
Route::get('/verify-form', 'PagesController@verifyForm');
Route::get('/success', 'PagesController@success');
Route::get('/email-confirmation', 'PagesController@emailConfirmation');
Route::get('/password-recovery', 'PagesController@passwordRecovery');

Route::get('/wallet', 'CustomerClientsController@index');
Route::get('/wallet-bitcoin', 'CustomerClientsController@walletBitcoin');
Route::get('/wallet-bitcoin-cash', 'CustomerClientsController@walletBitcoinCash');
Route::get('/wallet-tether', 'CustomerClientsController@walletTether');
Route::get('/wallet-ethereum', 'CustomerClientsController@walletEthereum');
Route::get('/transactions', 'CustomerClientsController@transactions');
Route::get('/cash-in', 'CustomerClientsController@cashIn');
Route::get('/settings', 'CustomerClientsController@settings');
//Route::get('/payments', 'CustomerClientsController@payments');