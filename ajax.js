var request = null;
try {
  request = new XMLHttpRequest();
  //request.overrideMimeType('text/html');
  //request.overrideMimeType('text/xml');
} catch (trymicrosoft) {
  try {
    request = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (othermicrosoft) {
    try {
      request = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (failed) {
      request = null;
    }
  }
}

if (request == null)
  alert("Error creating request object!");
