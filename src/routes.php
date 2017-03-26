<?php
// Routes

$app->get('/[{name}]', function ($request, $response) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Choose a random quote
    $quote = $this->settings['quotes'][array_rand($this->settings['quotes'])];
    
    // Render index view
    return $this->renderer->render($response, 'index.phtml', [ 
    	'quote' => $quote
	]);
});
