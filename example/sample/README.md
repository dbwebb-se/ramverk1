Sample test and example programs
=====================================

Here are some small test programs showing off Anax example code.

You can copy the each sample code into your `me/redovisa` like this.

```
# Move to the root of the course repo
rsync -av --exclude README.md example/sample/a/ me/redovisa/
```

Each sample has a set of files and an explanation i the corresponding `[sample]/README.md`.

These are the sample programs.

* [a](a) A controller doing redirect, with test cases showing off how to test a redirect.
* [b](b) A controller using a model to retrieve information from an external REST server using `file_get_contents()`, `curl()` and `multi_curl()`. A test class for the controller.
