Welcome to the Noah SDK Readme!

The purpose of the SDK is to toe the line on balancing development of unique apps with security and sustainability. Providing a baseline of functions will give developers a level of predictability of expectations of how things should work from one app to the next. It also lets Noah handle updates behind the scenes so that developers only need to worry about requesting a function at a higher level, allowing Noah to be updated without too much impact to the app.

App developers will pass a set of configurations to the SDK, which will in turn render the app accordingly. Developers will provide JSON-based manifest for the app:

{
  name: "Test App",
  version: "1.0",
  category: "Craft",
  function: "Homebrew",
  required_devices: {"hydrometer","ambient temperature"}
}
