Create a service in $di, use through controller and test it using a mock class
================================

A controller using a class directly.
A controller using a same class as a service loaded in $di.

Showing how to load the class into $di as a service.

A test class for the controller, using the actual class.
A test class for the controller, using a mock class instead of the actual $di service.



How to
--------------------------------

Start by inspecting the files in the sample.

Then get the files into your me/redovisa.

```
# Move to the root of the course repo
rsync -av --exclude README.md example/sample/c/ me/redovisa/
```

Open a webbrowser and try the following urls.

* c or c/index (use class to show a message)
* c/di (use $di service to show a message)
* c/dicfg (use $di service and use configuration file to display a custom message)

Do a make test or test only the related testclass.


Test the controller, first by using the actual class and then replacing the actual class with a mocked class.

```
make phpunit options="test/Controller/CControllerTest.php"
make phpunit options="test/Controller/CControllerMockedTest.php"
```

Only test the class, as is.

```
make phpunit options="test/Mumin/MuminTest.php"
```
