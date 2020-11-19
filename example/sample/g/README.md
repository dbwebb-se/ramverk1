Use services and configure them
================================

A controller uses a model class as a service and injects $di into it.

TO BE DONE.



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
