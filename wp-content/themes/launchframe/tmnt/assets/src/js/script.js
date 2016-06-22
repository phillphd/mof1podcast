"use strict";

(function () {

  var wb = {
    homeLoader: {
      test: function test() {
        return true;
      },
      run: function run() {
        setTimeout(function () {
          $("body").addClass("ready");
        }, 50);
      }
    }
  };

  function runObject() {
    for (var key in wb) {
      if (wb[key].test()) {
        wb[key].run();
      }
    }
  }

  runObject();
})();