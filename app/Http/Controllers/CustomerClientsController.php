<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerClientsController extends Controller
{
    public function index()
    {
    	return view('frontend.customer-clients.index');
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

    public function walletBitcoinCash()
    {
        return view('frontend.customer-clients.wallet-bitcoin-cash');
    }
}
