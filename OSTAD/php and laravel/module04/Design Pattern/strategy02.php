<?php
/*
Certainly! Let's consider another example to illustrate the Strategy
Pattern in PHP. In this example, we'll create a text formatting application
that allows users to format text using different strategies, such as uppercase,
 lowercase, and capitalizing the first letter.
*/
### Step 1: Define the Strategy Interface

interface TextFormatter {
    public function format($text);
}

### Step 2: Implement Concrete Strategies


class UppercaseFormatter implements TextFormatter {
    public function format($text) {
        return strtoupper($text);
    }
}

class LowercaseFormatter implements TextFormatter {
    public function format($text) {
        return strtolower($text);
    }
}

class CapitalizeFirstLetterFormatter implements TextFormatter {
    public function format($text) {
        return ucfirst(strtolower($text));
    }
}

### Step 3: Context Class


class TextEditor {
    private $textFormatter;

    public function setFormatter(TextFormatter $textFormatter) {
        $this->textFormatter = $textFormatter;
    }

    public function formatText($text) {
        return $this->textFormatter->format($text);
    }
}

### Step 4: Usage Example


// Usage example:

// Create a text editor
$textEditor = new TextEditor();

// Choose formatting strategy
$uppercaseFormatter = new UppercaseFormatter();
$lowercaseFormatter = new LowercaseFormatter();
$capitalizeFirstLetterFormatter = new CapitalizeFirstLetterFormatter();

// Set formatting strategy in the text editor
$textEditor->setFormatter($uppercaseFormatter);
echo $textEditor->formatText("hello world"); // Output: HELLO WORLD

$textEditor->setFormatter($lowercaseFormatter);
echo $textEditor->formatText("Hello World"); // Output: hello world

$textEditor->setFormatter($capitalizeFirstLetterFormatter);
echo $textEditor->formatText("hello world"); // Output: Hello world
/*
In this example, the `TextFormatter` interface defines the method
`format($text)` which concrete strategies
(`UppercaseFormatter`, `LowercaseFormatter`, and `CapitalizeFirstLetterFormatter`)
implement. The `TextEditor` class holds a reference to the chosen
formatting strategy and uses it to format the text dynamically.
The strategy can be changed at runtime without altering the `TextEditor` class,
 adhering to the principles of the Strategy Pattern.
*/