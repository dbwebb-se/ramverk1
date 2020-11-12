Unit test controller and model which uses an external server
================================

A controller using a model to retrieve information from an external REST server.

The controller is tightly integrated to the model class since it instantiates the model class itself.

One testcase shows how the controller is tested, and as a consequence the model is tested.

One testcase shows how the model is tested in isolation.

The final testcase shows how the controller is tested in isolation using a mockController and a mockModel avoiding real access to the REST server.

The external service used is the https://rem.dbwebb.se.



How to
--------------------------------

Start by inspecting the files in the sample.

Then get the files into your me/redovisa.

```
# Move to the root of the course repo
rsync -av --exclude README.md example/sample/f/ me/redovisa/
```



### Test through browser

Open a webbrowser and try the following urls.

* f or f/index gets one user through the model class and the external server.



### make test

Review the acutal code coverage for each test case, to verify what is actually tested.

One testcase shows how the controller is tested, and as a consequence the model is tested.

```
make phpunit options="test/Controller/FControllerAndModelTest.php"
```

One testcase shows how the model is tested in isolation.

```
make phpunit options="test/Controller/FModelTest.php"
```

The final testcase shows how the controller is tested in isolation using a mockController and a mockModel avoiding real access to the REST server.

```
make phpunit options="test/Controller/FControllerIsolatedTest.php"
```
