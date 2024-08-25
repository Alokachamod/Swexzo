var animation = lottie.loadAnimation({
  container: document.getElementById("lottie-animation"), // The container element
  renderer: "html", // Use 'svg', 'canvas', or 'html' as the renderer
  loop: true, // Set to 'true' if you want the animation to loop
  autoplay: true, // Set to 'true' if you want the animation to start automatically
  path: "resources/Animation - 1723227175139.json", // Path to your JSON animation file
});

animation.setSpeed(0.5); // Set the playback speed
animation.setDirection(1); // 1 for forward, -1 for reverse

//contact animation

var animation = lottie.loadAnimation({
  container: document.getElementById("lottie-animationc"), // The container element
  renderer: "html", // Use 'svg', 'canvas', or 'html' as the renderer
  loop: true, // Set to 'true' if you want the animation to loop
  autoplay: true, // Set to 'true' if you want the animation to start automatically
  path: "resources/Animation - 1724236751622.json", // Path to your JSON animation file
});

animation.setSpeed(0.5); // Set the playback speed
animation.setDirection(1); // 1 for forward, -1 for reverse

//contact procss

function contactProcess() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var subject = document.getElementById("subject");
    var msg = document.getElementById("massage");
    
    //alert(name.value);

    var f = new FormData();
    f.append("n",name.value);
    f.append("e",email.value);
    f.append("s",subject.value);
    f.append("m",msg.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if ((r.status == 200) & (r.readyState == 4)) {
          var response = r.responseText;
    
          if (response == "success") {
            Swal.fire({
              title: "Successful",
              text: "submission Successful",
              icon: "success",
            });
          } else {
            Swal.fire({
              title: "submission Unsuccessful",
              text: response,
              icon: "error",
            });
          }
        }
      };
      r.open("POST", "contactprocess.php", true);
      r.send(f);
}

