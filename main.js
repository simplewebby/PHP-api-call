var settings = {
    "url": "https://dna.magnetmail.net/ApiAdapter/Rest/GetGroups/",
    "method": "POST",
    "timeout": 0,
    "headers": {
      "Authorization": "Basic dHNhZ2FuX2FtYzpPbGVjaGthMDQ=",
      "Content-Type": "application/json"
    },
    "data": JSON.stringify({"SessionID":"4DD635BD-C613-484D-A232-B12EB167BF30","UserID":"AMERMEDCOM","DisplayStatus":2,"SubscriptionGroup":2}),
  };
  
  $.ajax(settings).done(function (response) {
    console.log(response);
  });