Test a redirect
================================

A controller doing redirect, with test cases showing off how to test a redirect.



How to
--------------------------------

Start by inspecting the files in the sample.

Then get the files into your me/redovisa.

```
# Move to the root of the course repo
rsync -av --exclude README.md example/sample/a/ me/redovisa/
```

Open a webbrowser and try the following urls.

* a or a/index
* a/redirect

Do a make test or test only the related testclass.

```
make phpunit options="test/Controller/AControllerTest.php"
```
