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

| Sample | Description | Kmom |
|:------:|-------------|------|
| [a](a) | A controller doing redirect, with test cases showing off how to test a redirect. |
| [b](b) | A controller using a model to retrieve information from an external REST server using `file_get_contents()`, `curl()` and `multi_curl()`. A test class for the controller. |
| [c](c) | Use a class as a service in $di from a controller. Test the controller and the class. Use a mock class to hide the class when testing the controller. |
| [d](d) | A sample controller with helper `getDetailsOnRequest()` which is useful for development and troubleshooting and might aid in the understanding of how the controller works. |
