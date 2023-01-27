# Examples of patterns

Note that to illustrate the usage of the patterns, a `Client` class is included for each pattern, but the client is just
for illustration – it is not a useful application in isolation.

For example, in the strategy pattern it may be more
realistic that only one strategy is used for the shopping cart – at least if it is a shopping cart for one customer.

Also, real life concerns like e.g., validation are not included in the clients.

Whether dependencies should be injected with setters or through the constructor is not relevant in most cases – for
example both constructor injection and setter injection is used in the shopping cart example for the strategy pattern.

## References

* Applying UML and patterns by Craig Larman
* Holub on patterns by Allen Holub
* Patterns, principles, and practices of domain driven design by Scott Millett and Nick Tune
* [DesignPatternsPHP](https://designpatternsphp.readthedocs.io/en/latest/README.html)
* [Design Patterns Game](https://designpatternsgame.com/patterns)
* Head First Design Patterns by Kathy Sierra, Bert Bates, Elisabeth Robson, Eric Freeman
* [OODesign](https://www.oodesign.com/)
* [Wikipedia - Design Patterns](https://en.wikipedia.org/wiki/Design_Patterns)
* [Refactoring.Guru](https://refactoring.guru/design-patterns)

## Principles

Patterns are somehow a result of applying principles when you design software.
The [SOLID principles](https://en.wikipedia.org/wiki/SOLID) are important in addition to the principles below. Remember,
principles and patterns are not mandatory rules but guidelines. Remember, principles are not mandatory rules but
guidelines.

### Fail fast

Do validation as early as possible.

### One return statement

Only one return statement per function, multiple returns may be overlooked.

### Less is more

Remember to be explicit - Do not confuse _less is more_ with shortened code which is not necessarily more readable.

### Just in time

Start small and transparent. Use patterns when requirements changes, to make it more maintainable. You do not have to
begin with a pattern.

### [Using camelCase for abbreviations](https://medium.com/fantageek/using-camelcase-for-abbreviations-232eb67d872) and combined acronyms

Example: prefer XmlHttpRequest over XMLHTTPRequest.
