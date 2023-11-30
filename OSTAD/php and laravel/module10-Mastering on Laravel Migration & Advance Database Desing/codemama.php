<?php
/*
 * Problem Statement
Write a program to evaluate Postfix expression.A postfix expression is an expression where the operator appears after the operands.
 */
# Write your PHP code from here
function evaluatePostfix($expression)
{
    $stack = [];
    $operators = ['+', '-', '*', '/'];

    foreach (str_split($expression) as $token) {
        if (is_numeric($token)) {
            array_push($stack, $token);
        } elseif (in_array($token, $operators)) {
            $operand2 = array_pop($stack);
            $operand1 = array_pop($stack);

            switch ($token) {
                case '+':
                    array_push($stack, $operand1 + $operand2);
                    break;
                case '-':
                    array_push($stack, $operand1 - $operand2);
                    break;
                case '*':
                    array_push($stack, $operand1 * $operand2);
                    break;
                case '/':
                    array_push($stack, $operand1 / $operand2);
                    break;
            }
        }
    }

    return array_pop($stack);
}

// Example usage
$postfixExpression = trim(fgets(STDIN));
$result = floor(evaluatePostfix($postfixExpression));
echo $result;

?>



<?php
/*
 * Problem Statement
Write a program to verify that all the brackets in a given string are correctly matched and nested.
 */

function areBracketsBalanced($str)
{
    $stack = [];
    $bracketPairs = [
        '(' => ')',
        '{' => '}',
        '[' => ']',
    ];

    foreach (str_split($str) as $char) {
        if (array_key_exists($char, $bracketPairs)) {
            array_push($stack, $char);
        } elseif (in_array($char, $bracketPairs)) {
            $lastBracket = array_pop($stack);

            if ($lastBracket === null || $bracketPairs[$lastBracket] !== $char) {
                return false;
            }
        }
    }

    return empty($stack);
}

// Example usage
$inputString = trim(fgets(STDIN));
if (areBracketsBalanced($inputString)) {
    echo "Brackets are balanced.\n";
} else {
    echo "Brackets are not balanced.\n";
}


/*
 *Problem Statement
Write a program to evaluate Prefix expression.A prefix expression is an expression where the operator appears before the operands.
 */


function evaluatePrefixExpression($expression)
{
    $operators = ['+', '-', '*', '/'];
    $stack = [];

    $tokens = str_split(str_replace(' ', '', $expression));
    $tokens = array_reverse($tokens);

    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            array_push($stack, $token);
        } elseif (in_array($token, $operators)) {
            $operand1 = array_pop($stack);
            $operand2 = array_pop($stack);

            if ($operand1 === null || $operand2 === null) {
                return "Invalid expression";
            }

            switch ($token) {
                case '+':
                    array_push($stack, $operand1 + $operand2);
                    break;
                case '-':
                    array_push($stack, $operand1 - $operand2);
                    break;
                case '*':
                    array_push($stack, $operand1 * $operand2);
                    break;
                case '/':
                    if ($operand2 == 0) {
                        return "Division by zero error";
                    }
                    array_push($stack, $operand1 / $operand2);
                    break;
                default:
                    return "Invalid operator";
            }
        }
    }

    return array_pop($stack);
}

// Example usage
$prefixExpression = trim(fgets(STDIN));
$result = floor(evaluatePrefixExpression($prefixExpression));

echo $result;


