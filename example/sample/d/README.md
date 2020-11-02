A sample controller with the helper `getDetailsOnRequest`
================================

This can be used as a sample controller to start up with. It has a helper `getDetailsOnRequest()` which is used in the actinos `indexAction()` and inte the `catchAll()`.

This aids in the understaning on how the controller actions are called and might aid in development and troubleshooting of controllers.

For example, this makes it obvious which controller is handling the request.



How to
--------------------------------

Start by inspecting the files in the sample.

Then get the files into your me/redovisa.

```
# Move to the root of the course repo
rsync -av --exclude README.md example/sample/d/ me/redovisa/
```

Open a webbrowser and try the following urls.

* d or d/index (the `indexAction()` handles the request)
* d/some/thing/else?a=b&b=c (the `catchAllAction()` handles the request)

You will see a printout of the details of the request and which action handled it.
