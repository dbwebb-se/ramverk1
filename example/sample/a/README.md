Test a redirect
================================

Start by inspecting the files in the sample.

Get the files into your me/redovisa.

```
# Move to the root of the course repo
rsync -av example/sample/a/ me/redovisa/
```

Open a webbrowser and try the following urls.

* a or a/index
* a/redirect

Do a make test or test only the related testclass.

```
make phpunit options="test/Controller/AControllerTest.php"
```
