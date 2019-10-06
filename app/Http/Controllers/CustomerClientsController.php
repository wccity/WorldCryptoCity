<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Redirect;

class CustomerClientsController extends Controller
{
    public function index_auth(Request $request)
    {
        $url        = 'https://localhost:44329/api/UserAuth';
        $cookieFile = tempnam(null, 'session');
        $userAgent  = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0';

        // build array of post values - all are important
        $post = array('UserName'  => $request->input('UserName'),
                      'PasswordString' => $request->input('PasswordString')
                      );
        $post = json_encode($post);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);
        curl_setopt($ch, CURLOPT_COOKIEJAR,  $cookieFile);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT,  $userAgent); // empty user agents probably not accepted
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER,    1); // enable this - they check referer on POST
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($post))
        );

        $html = curl_exec($ch);
        $_res = json_decode($html);

        if ($_res->httpStatusCode === '500') {
            //return redirect('sign-in');
            return Redirect::action('PagesController@signin')->with('failAttempt', $_res->message);
        }
        else{return view('frontend.customer-clients.index', ["user_data"=>$_res] );}

    }

    public function index(){
        $url        = 'https://localhost:44329/api/UserWallet';
        $cookieFile = tempnam(null, 'session');
        $userAgent  = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0';

        //$post = json_encode($post);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);
        //curl_setopt($ch, CURLOPT_COOKIEJAR,  $cookieFile);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT,  $userAgent); // empty user agents probably not accepted
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER,    1); // enable this - they check referer on POST
        //curl_setopt($ch, CURLOPT_POST, 1);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        //curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //    'Content-Type: application/json',
        //    'Content-Length: ' . strlen($post))
        //);

        $html = curl_exec($ch);
        $_res = json_decode($html);

        if ($_res->httpStatusCode === '500') {
            //return redirect('sign-in');
            return Redirect::action('PagesController@signin')->with('failAttempt', $_res->message);
        }
        else{return view('frontend.customer-clients.index', ["user_wallet"=>$_res->userWallet] );}
    }

    public function walletBitcoin()
    {
    	return view('frontend.customer-clients.wallet-bitcoin');
    }

    public function walletTether()
    {
    	return view('frontend.customer-clients.wallet-tether');
    }

    public function walletEthereum()
    {
    	return view('frontend.customer-clients.wallet-ethereum');
    }

    public function transactions()
    {
    	return view('frontend.customer-clients.transactions');
    }

    public function cashIn()
    {
    	return view('frontend.customer-clients.cash-in');
    }

    public function payments()
    {
    	return view('frontend.customer-clients.payments');
    }

    public function settings()
    {
    	return view('frontend.customer-clients.settings');
    }
}
