<?php

class Subscription {

    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create() {

    }

    public function cancel() {

        // find stripe customer
        $customer = $this->gateway->findStripeCustomer();
        // find stripe subscription by customer
    }

    public function invoice() {

    }

    public function swap($newPlan) {

    }

}

interface Gateway {
    public function findStripeCustomer();
    public function findStripeSubscriptionByCustomer();
}


class StripeGateway implements Gateway {
    public function findStripeCustomer() {

    }

    public function findStripeSubscriptionByCustomer() {

    }
}

class BraintreeGateway implements Gateway {
    public function findStripeCustomer() {

    }

    public function findStripeSubscriptionByCustomer() {

    }
}

new Subscription(new StripeGateway());