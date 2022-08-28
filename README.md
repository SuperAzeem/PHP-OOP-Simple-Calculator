# Simple Calculator using PHP OOP.

## Introduction

Very simple calculator built using PHP OOP.

Supporting following arithmethic operators:

Adder

Substractor

Divider

Multiplier


## Usage instructions:
Initialize the Calculator:

```php
require_once 'inc/init.php';

$c = new Calculator;

```
Set required operation:
```php
$c->setOperation(new Adder);

```
Call calculate method:
```php
$c->calculate(10, 2);
```
Get the result:
```php
echo $c->getResult();
```
## Result: 12
## Preserved calculation results:
By default it remembers the result of each calculation and performs next calculation(s) based on the previous calculation(s) result.
You can clear previous Calculation(s) result as:
```php
$c->clearResult();
```
## Complete Example:

```php
require_once 'inc/init.php';

$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate(10, 2);
echo $c->getResult() . "\n\n";  // 12

$c->clearResult();

$c->calculate(18, 12, 10);      // Can take unlimited arguments
echo $c->getResult() . "\n\n";  // 40

$c->setOperation(new Divider);
$c->calculate(2);
echo $c->getResult() . "\n\n";  // 40 / 2: 20

$c->setOperation(new Multiplier);
$c->calculate(5, 4);
echo $c->getResult() . "\n\n";  // 20 (5 x 4): 400

$c->clearResult();

$c->setOperation(new Subtractor);
$c->calculate(50, 20);
echo $c->getResult() . "\n\n";  // 50 - 20: 30

```
