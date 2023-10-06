<?php

/*
Middleware in PHP refers to a series of components or functions that are executed in sequence during
the processing of an HTTP request. Each middleware component can perform specific tasks and modify the request or
response objects before passing them to the next middleware component in the chain. Middleware is
 commonly used in web applications for tasks such as authentication, logging, input validation, and more.
*/
//Here's a basic example of implementing middleware in PHP:

### Step 1: Middleware Interface

//First, define a middleware interface that each middleware component must implement:


interface Middleware {
    public function handle(Request $request, Closure $next);
}


### Step 2: Middleware Implementation

//Implement the middleware interface in concrete middleware classes. Here's an example of a logging middleware:

class LoggingMiddleware implements Middleware {
    public function handle(Request $request, Closure $next) {
        // Perform logging before handling the request
        echo "Logging: Request logged at " . date('Y-m-d H:i:s') . "\n";

        // Pass the request to the next middleware in the chain
        $response = $next($request);

        // Perform logging after handling the request
        echo "Logging: Response processed at " . date('Y-m-d H:i:s') . "\n";

        return $response;
    }
}


### Step 3: Request and Response Objects

//Define the `Request` and `Response` objects. These objects can be simple classes representing the incoming request and the response to be sent back.


class Request {
    // Properties and methods for handling the request
}

class Response {
    // Properties and methods for handling the response
}


### Step 4: Middleware Pipeline

//Create a middleware pipeline that processes the request through the middleware components:

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
                return new Response("Default response");
            }
        );

        return $pipeline($request);
    }
}

### Step 5: Usage Example


// Usage example:

// Create middleware components
$loggingMiddleware = new LoggingMiddleware();

// Create a request object (for simplicity, this can be more complex in a real application)
$request = new Request();

// Create a middleware pipeline and add middleware components
$pipeline = new MiddlewarePipeline();
$pipeline->addMiddleware($loggingMiddleware);

// Handle the request through the middleware pipeline
$response = $pipeline->handle($request);

// Output the response
echo $response->getBody(); // Output: Default response

/*
In this example, the `LoggingMiddleware` logs messages before and after handling the request.
The middleware components can be added to the `MiddlewarePipeline` in the order they need to be executed.
When `handle` is called on the pipeline, it processes the request through the middleware components in
the reverse order of their addition.

This is a simplified example, and in a real application, you might have more complex request and
response objects and more sophisticated middleware logic. However,
the basic idea remains the same: middleware components process the request and response objects in sequence,
allowing for modular and flexible handling of HTTP requests.
*/