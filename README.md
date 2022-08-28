Simple Calculator using PHP OOP.

## Quick Example

The recommended way is by using the simple helper methods, but a utility method is available and direct access to many of the underlying classes is also possible. If you wish to interact with the underlying classes, read the documentation in the code.


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
