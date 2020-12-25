@extends('layouts.layout')

@section('content')
    <div class="" style="background-color: #efeef2; padding: 0 20px;">
        <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
            <a class="link-secondary" href="#">
                <i class="fab fa-canadian-maple-leaf" style="font-size: 55px; color: #c60045"></i>
            </a>
            </div>
            <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">DreamCanada</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="link-secondary" href="#" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
            </a>
            <a class="btn btn-lg btn-outline-secondary free-btn" href="{{ url('/assess') }}">
                <i class="fas fa-chevron-circle-right" style="font-size: 20px;"></i>
                Free Assessment
            </a>
            </div>
        </div>
        </header>
    </div>
    <form action="" class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <h4 class="mb-3">Pricing</h4>

        <div class="d-block my-3">
            <div class="custom-control custom-radio">
                <input id="enterprise" name="pricingMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="enterprise">$100 / hr</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="paypal" name="pricingMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">$1000 / month</label>
            </div>
        </div>
        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
            <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                Name on card is required
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                Credit card number is required
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                Expiration date required
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                Security code required
            </div>
        </div>
        <hr class="mb-4">
        <a href="{{ url('/payment') }}" class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</a>

        <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button> -->
        <hr>
    </form>

@endsection