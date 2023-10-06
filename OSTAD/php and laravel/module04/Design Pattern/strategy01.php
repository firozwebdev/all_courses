<?php
/*
The Strategy Pattern is a behavioral design pattern that defines a family of algorithms, encapsulates each algorithm, and makes them interchangeable. It allows a client to choose an algorithm from a family of algorithms at runtime, without modifying the code that uses the algorithm.

Here's how you can implement the Strategy Pattern in PHP:
*/
// Step 1: Define the Strategy Interface


interface PaymentStrategy {
    public function pay($amount);
}

// Step 2: Implement Concrete Strategies


class CreditCardPayment implements PaymentStrategy {
    public function pay($amount) {
        echo "Paid $amount via Credit Card.\n";
    }
}

class PayPalPayment implements PaymentStrategy {
    public function pay($amount) {
        echo "Paid $amount via PayPal.\n";
    }
}

// Step 3: Context Class

class ShoppingCart {
    private $paymentMethod;

    public function setPaymentMethod(PaymentStrategy $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function checkout($amount) {
        $this->paymentMethod->pay($amount);
    }
}

// Step 4: Usage Example


// Usage example:

// Create a shopping cart
$cart = new ShoppingCart();

// Choose payment method (strategy)
$creditCardPayment = new CreditCardPayment();
$paypalPayment = new PayPalPayment();

// Set payment method in the shopping cart
$cart->setPaymentMethod($creditCardPayment);

// Checkout using the chosen payment method
$cart->checkout(100);  // Output: Paid 100 via Credit Card.

// Change payment method dynamically
$cart->setPaymentMethod($paypalPayment);
$cart->checkout(50);   // Output: Paid 50 via PayPal.

/*
In this example, the `PaymentStrategy` interface defines a method
`pay($amount)` that concrete strategies
(`CreditCardPayment` and `PayPalPayment`) implement.
The `ShoppingCart` class holds a reference to the chosen payment
method and uses it during the checkout process.

The key idea behind the Strategy Pattern is that it allows
 the client (in this case, the `ShoppingCart` class) to be
decoupled from the specific payment methods.
The client can switch between different payment methods
without changing its code, promoting flexibility and ease of use.
*/