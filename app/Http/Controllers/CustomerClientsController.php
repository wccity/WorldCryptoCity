<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use Exception;
use Redirect;

class CustomerClientsController extends Controller
{
    public function index_auth(Request $request)
    {
        $url        = 'https://localhost:44329/api/UserAuth';
        $cookieFile = tempnam(null, 'session');
        $_SESSION['session_cookie'] = $cookieFile;
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

        $_SESSION['session_user_profile'] = $_res->userInfo;

        if ($_res->httpStatusCode === '500') {
            //return redirect('sign-in');
            session_destroy();
            return Redirect::action('PagesController@signin')->with('failAttempt', $_res->message);
        }
        else{return view('frontend.customer-clients.index', ["user_data"=>$_res] );}

    }

    public function index(){

        if (isset($_SESSION['session_cookie']))
        {
            $url        = 'https://localhost:44329/api/UserWallet';
            //$cookieFile = tempnam(null, 'session');
            $cookieFile = $_SESSION['session_cookie'];
            $userAgent  = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0';

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
                session_destroy();
                return Redirect::action('PagesController@signin')->with('failAttempt', $_res->message);
            }
            else{return view('frontend.customer-clients.index', ["user_data"=>$_res] );}
        }
        else{
            session_destroy();
            return Redirect::action('PagesController@signin');
        }


    }

    public function walletBitcoin()
    {
        $url        = 'https://localhost:44329/api/UserWallet';
        //$cookieFile = tempnam(null, 'session');
        $cookieFile = $_SESSION['session_cookie'];
        $userAgent  = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0';

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
            session_destroy();
            return Redirect::action('PagesController@signin')->with('failAttempt', $_res->message);
        }
        else{return view('frontend.customer-clients.wallet-bitcoin', ["user_data"=>$_res] );}
    }

    public function walletTether()
    {
        $url        = 'https://localhost:44329/api/UserWallet';
        //$cookieFile = tempnam(null, 'session');
        $cookieFile = $_SESSION['session_cookie'];
        $userAgent  = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0';

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
            session_destroy();
            return Redirect::action('PagesController@signin')->with('failAttempt', $_res->message);
        }
        else{return view('frontend.customer-clients.wallet-tether', ["user_data"=>$_res] );}
    }

    public function walletEthereum()
    {
        $url        = 'https://localhost:44329/api/UserWallet';
        //$cookieFile = tempnam(null, 'session');
        $cookieFile = $_SESSION['session_cookie'];
        $userAgent  = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0';

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
            session_destroy();
            return Redirect::action('PagesController@signin')->with('failAttempt', $_res->message);
        }
        else{return view('frontend.customer-clients.wallet-ethereum', ["user_data"=>$_res] );}

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

    public function walletBitcoinCash()
    {
        return view('frontend.customer-clients.wallet-bitcoin-cash');
    }
}
