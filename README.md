# Trip Checker

A friend of yours is planning a trip across the country via train, but they can't read the train information! They've asked you to help and they want you to check if they can get from place to place on the rail network. You hit a snag while trying to help when you've found that the trains don't always return to a station they've departed from! That is to say that a train route might go from Station X to Station Y, but it might not go from Station Y to Station X.

They love train trips so they don't care how many trains it takes as long as it's possible to reach their target destination.

You've decided to write a program to help you with the job and the format you've decide to use is as follows:
```php
check_trip( $start, $target, $stations, $station_links )
```
You want the method to return "Possible" if the trip is possible and "Impossible" if otherwise

Example usages:
```php
$stations = ["ADL", "BRI", "MEL", "SYD"];

$links = ["ADL" => ["MEL"], "MEL" => ["ADL", "SYD"],  "SYD" => ["BRI"]];

check_trip( "ADL", "BRI", $stations, $links ); // => "Possible"
check_trip( "MEL", "BRI", $stations, $links ); // => "Possible"
check_trip( "SYD", "ADL", $stations, $links ); // => "Impossible"
```

# Run the test

```
phpunit KataTest.php
```

When one test passed, remove the line ```$this->markTestSkipped();``` into the next one for enable it.

# Originally from

[Code wars](http://www.codewars.com/)
