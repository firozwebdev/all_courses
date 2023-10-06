<?php
/*
Certainly! Let's consider another example of middleware in PHP. In this scenario, we'll create a simple authentication middleware that checks if a user is authenticated before allowing access to certain routes. Here's how you can implement it:
*/
### Step 1: Middleware Interface

//First, define the middleware interface:


interface Middleware {
    public function handle(Request $request, Closure $next);
}


### Step 2: Middleware Implementation

//Implement the authentication middleware:

class AuthenticationMiddleware implements Middleware {
    public function handle(Request $request, Closure $next) {
        // Check if user is authenticated
        if ($this->isAuthenticated()) {
            // User is authenticated, pass the request to the next middleware
            return $next($request);
        } else {
            // User is not authenticated, return a response indicating unauthorized access
            return new Response('Unauthorized access', 401);
        }
    }

    private function isAuthenticated() {
        // Logic to check if the user is authenticated (can be more complex in a real application)
        $_SESSION['user_id'] = 123;
        return isset($_SESSION['user_id']);
    }
}

### Step 3: Request and Response Objects

//Define the `Request` and `Response` objects:

class Request {
    // Properties and methods for handling the request
}

class Response {
    private $body;
    private $status;

    public function __construct($body, $status = 200) {
        $this->body = $body;
        $this->status = $status;
    }

    public function getBody() {
        return $this->body;
    }

    public function getStatus() {
        return $this->status;
    }
}

### Step 4: Middleware Pipeline

//Create a middleware pipeline:


class MiddlewarePipeline {
    private $middlewares = [];

    public function addMiddleware(Middleware $middleware) {
        $this->middlewares[] = $middleware;
    }

    public function handle(Request $request) {
        $pipeline = array_reduce(
            array_reverse($this->middlewares),
            function($next, $middleware) {
                return function($request) use ($middleware, $next) {
                    return $middleware->handle($request, $next);
                };
            },
            function($request) {
                return new Response('Not found', 404);
            }
        );

        return $pipeline($request);
    }
}

### Step 5: Usage Example


// Usage example:

// Start session (for demonstration purposes)
session_start();

// Create middleware components
$authenticationMiddleware = new AuthenticationMiddleware();

// Create a request object (for simplicity, this can be more complex in a real application)
$request = new Request();

// Create a middleware pipeline and add middleware components
$pipeline = new MiddlewarePipeline();
$pipeline->addMiddleware($authenticationMiddleware);

// Handle the request through the middleware pipeline
$response = $pipeline->handle($request);

// Output the response
echo "Status Code: " . $response->getStatus() . "\n";
echo "Response Body: " . $response->getBody();

/*
In this example, the `AuthenticationMiddleware`
checks if the user is authenticated (for simplicity, using session data).
If the user is authenticated, the request is passed to the next middleware
(which doesn't exist in this example, so a default "Not found" response is returned).
If the user is not authenticated, an unauthorized access response is returned.

This demonstrates the use of middleware to perform authentication checks before
allowing access to certain parts of an application. Middleware can be extended
and customized for various tasks like logging, validation, authorization, etc.,
making it a powerful pattern for handling HTTP requests in a modular way.
*/