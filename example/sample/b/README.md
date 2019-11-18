Use a model to show off curl and multi_curl
================================

A controller using a model to retrieve information from an external REST server.

The model retrieves information using `file_get_contents()`, `curl()` and `multi_curl()`.

A test class for the controller.

The external service used is the https://rem.dbwebb.se.



How to
--------------------------------

Start by inspecting the files in the sample.

Then get the files into your me/redovisa.

```
# Move to the root of the course repo
rsync -av --exclude README.md example/sample/b/ me/redovisa/
```

Open a webbrowser and try the following urls.

* b or b/index (get one user using file_get_contents)
* b/curl (get one user using curl)
* b/mcurl (get several users simultaneously using multi_curl)

Do a make test or test only the related testclass.

```
make phpunit options="test/Controller/BControllerTest.php"
```
