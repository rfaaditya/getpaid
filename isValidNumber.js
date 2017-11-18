var telInput = $("#phone"),
  errorMsg = $("#error-msg"),
  validMsg = $("#valid-msg");

// initialise plugin
telInput.intlTelInput({
  utilsScript: "utils.js"
});

var reset = function() {
  telInput.removeClass("error");
  errorMsg.addClass("hide");
  validMsg.addClass("hide");
};

// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput.on("keyup change", reset);

/************second *************/

var telInput1 = $("#phone1"),
  errorMsg1 = $("#error-msg1"),
  validMsg1 = $("#valid-msg1");

// initialise plugin
telInput1.intlTelInput({
  utilsScript: "utils.js"
});

var reset = function() {
  telInput1.removeClass("error");
  errorMsg1.addClass("hide");
  validMsg1.addClass("hide");
};

// on blur: validate
telInput1.blur(function() {
  reset();
  if ($.trim(telInput1.val())) {
    if (telInput1.intlTelInput("isValidNumber")) {
      validMsg1.removeClass("hide");
    } else {
      telInput1.addClass("error");
      errorMsg1.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput1.on("keyup change", reset);

/************third *************/

var telInput2 = $("#phone2"),
  errorMsg2 = $("#error-msg2"),
  validMsg2 = $("#valid-msg2");

// initialise plugin
telInput2.intlTelInput({
  utilsScript: "utils.js"
});

var reset = function() {
  telInput2.removeClass("error");
  errorMsg2.addClass("hide");
  validMsg2.addClass("hide");
};

// on blur: validate
telInput2.blur(function() {
  reset();
  if ($.trim(telInput2.val())) {
    if (telInput2.intlTelInput("isValidNumber")) {
      validMsg2.removeClass("hide");
    } else {
      telInput2.addClass("error");
      errorMsg2.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput2.on("keyup change", reset);

/************fourth *************/

var telInput3 = $("#phone3"),
  errorMsg3 = $("#error-msg3"),
  validMsg3 = $("#valid-msg3");

// initialise plugin
telInput3.intlTelInput({
  utilsScript: "utils.js"
});

var reset = function() {
  telInput3.removeClass("error");
  errorMsg3.addClass("hide");
  validMsg3.addClass("hide");
};

// on blur: validate
telInput3.blur(function() {
  reset();
  if ($.trim(telInput3.val())) {
    if (telInput3.intlTelInput("isValidNumber")) {
      validMsg3.removeClass("hide");
    } else {
      telInput3.addClass("error");
      errorMsg3.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput3.on("keyup change", reset);

/************fifth *************/

var telInput4 = $("#phone4"),
  errorMsg4 = $("#error-msg4"),
  validMsg4 = $("#valid-msg4");

// initialise plugin
telInput4.intlTelInput({
  utilsScript: "utils.js"
});

var reset = function() {
  telInput4.removeClass("error");
  errorMsg4.addClass("hide");
  validMsg4.addClass("hide");
};

// on blur: validate
telInput4.blur(function() {
  reset();
  if ($.trim(telInput4.val())) {
    if (telInput4.intlTelInput("isValidNumber")) {
      validMsg4.removeClass("hide");
    } else {
      telInput4.addClass("error");
      errorMsg4.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput4.on("keyup change", reset);

/************sixth *************/

var telInput5 = $("#phone5"),
  errorMsg5 = $("#error-msg5"),
  validMsg5 = $("#valid-msg5");

// initialise plugin
telInput5.intlTelInput({
  utilsScript: "utils.js"
});

var reset = function() {
  telInput5.removeClass("error");
  errorMsg5.addClass("hide");
  validMsg5.addClass("hide");
};

// on blur: validate
telInput5.blur(function() {
  reset();
  if ($.trim(telInput5.val())) {
    if (telInput5.intlTelInput("isValidNumber")) {
      validMsg5.removeClass("hide");
    } else {
      telInput5.addClass("error");
      errorMsg5.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput5.on("keyup change", reset);
