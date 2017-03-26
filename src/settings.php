<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // Quotes
        'quotes' => [
            "Build something amazing.",
            "Crank out some code.",
            "We think you're pretty great",
            "Deploy love. Launch happiness.",
            "You know what to do 👍",
            "Build something you will be proud of.",
            "Code more. Manage servers less.",
            "Build something people use.",
            "You are a modern day wizard.",
            "Are you a lion or a sheep?",
            "Start a passion project, turn it into a business.",
            "Will you build something awesome today?",
            "Deploy better. Scale faster. Automate awesomely.",
            "Scale to infinity and beyond!",
            "Crank code, not configs.",
            "Dream, then do.",
            "Enjoy the little things.",
            "The power of imagination is infinite",
            "If you don't make mistakes, <br>you aren't making anything.",
            "Empathy is key."
        ]
    ],
];
