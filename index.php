<?php

interface Newsletter {
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter {

    public function subscribe($email)
    {
        die('Subscribing with Campaign Monitor');
    }
}

class Drip implements Newsletter {

    public function subscribe($email)
    {
        die('Subscribing with Drip');
    }
}


class NewsLetterSubscriptionsController {

    public function store(Newsletter $newsletter) {
        $email = 'joe@exampl.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsLetterSubscriptionsController();
$controller->store(new Drip());

