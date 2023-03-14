<!DOCTYPE html>
<html>
  <head>
    <title>My Web Page</title>
    <style>
      html,
      body {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
      }

      body {
        display: grid;
        grid-template-columns: 20% 45% 35%;
        grid-template-rows: 36% auto 0%;
        grid-template-areas:
          "top top top"
          "left center right";
      }
      

      #top-section {
        grid-area: top;
        background-color: ##000000;
      }

      #left-section {
        grid-area: left;
        background-color: ##000000;
        
      }

      #center-section {
        grid-area: center;
        background-color: ##000000;
      }

      #right-section {
        grid-area: right;
        background-color: #000000;
      }

#time-zones-container {
  display: flex;
  justify-content: space-evenly;
   align-items: flex-start;
     width: 98%;
   padding: 5px;
  gap: 70px; /* add some spacing between the boxes */
  margin-left: 20px; /* move the container to the right by 20px */
  text-align: center; /* center all text within the container */
  color: #ffffff;
}

 @viewport {
	 width: device-width;
}
 div {
	 box-sizing: border-box;
}
 .container {
	 max-width: 600px;
	 margin: 0 auto;
	 padding: 1.5rem;
	 position: relative;
	 z-index: 1;
}
 
 .stage {
	 position: fixed;
	 top: 0;
	 left: 0;
	 right: 0;
	 margin: 0 auto;
	 height: 100vh;
	 width: 100%;
	 max-width: 900px;
	 overflow-y: hidden;
	 z-index: 2;
}
 .mariposa {
	 position: absolute;
	 margin: auto;
	 left: 0;
	 right: 0;
	 bottom: 0;
	 top: 0;
	 width: 200px;
	 height: 200px;
	 opacity: 0;
	/* start at 0 so they don't appear while loading */
	 -webkit-animation-fill-mode: backwards;
	 animation-fill-mode: backwards;
	 animation: fly 4s infinite linear;
	 animation-delay: 0.125s;
}
 .mariposa:nth-child(2) {
	 animation-delay: 0.4s;
}
 .mariposa:nth-child(2) .mariposa-turn {
	 animation-delay: 0.75s;
}
 .mariposa:nth-child(2) .mariposa-turn .mariposa-flutter {
	 transform: scale(0.7) rotateX(65deg);
}
 .mariposa:nth-child(3) {
	 animation-delay: 0.75s;
}
 .mariposa:nth-child(3) .mariposa-turn {
	 animation-delay: 1.25s;
}
 .mariposa:nth-child(3) .mariposa-turn .mariposa-flutter {
	 transform: scale(0.3) rotateX(45deg);
}
 .mariposa .mariposa-turn {
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 width: 200px;
	 height: 150px;
	 perspective: 1000px;
	 position: absolute;
	 top: 0;
	 bottom: 0;
	 left: 0;
	 right: 0;
	 left: 0;
	 margin: auto;
	 transform-origin: 50% 80%;
	/* turn from a natural center */
	 -webkit-animation-fill-mode: both;
	 animation-fill-mode: both;
	 animation: turn 3s infinite cubic-bezier(0.31, 0.09, 0.77, 1.5);
	 transform-style: preserve-3d;
	 filter: drop-shadow(50px 30px 10px rgba(0, 0, 0, 0.5));
}
 .mariposa-flutter {
	 width: 2rem;
	 height: 8rem;
	 position: relative;
	 top: 0;
	 margin: 0 auto;
	 background: url("https://assets.codepen.io/2273448/butterfly-body.png");
	 background-repeat: no-repeat;
	 background-position: center;
	 background-size: contain;
	 transform-style: preserve-3d;
	 transform: rotateX(25deg) rotateY(5deg);
}
 .mariposa-flutter::before, .mariposa-flutter::after {
	 position: absolute;
	 top: 5%;
	 margin: auto;
	 content: "";
	 height: 100%;
	 width: 250%;
	 background-repeat: no-repeat;
	 background-position: center;
	 background-size: contain;
	 transform-style: preserve-3d;
	 animation-delay: 0;
}
 .mariposa-flutter::before {
	 background-image: url("https://assets.codepen.io/2273448/butterfly-wing.png");
	 transform-origin: 0% 50%;
	 animation: flutter-r 0.3s infinite ease-out;
	 left: 55%;
}
 .mariposa-flutter::after {
	 background-image: url("https://assets.codepen.io/2273448/butterfly-wing-l.png");
	 transform-origin: 100% 50%;
	 animation: flutter-l 0.3s infinite ease-out;
	 right: 55%;
}
 @keyframes flutter-r {
	 0%, 100% {
		 transform: rotateY(0deg);
	}
	 50% {
		 transform: rotateY(-40deg);
	}
}
 @keyframes flutter-l {
	 0%, 100% {
		 transform: rotateY(0deg);
	}
	 50% {
		 transform: rotateY(40deg);
	}
}
 @keyframes turn {
	 0%, 100% {
		 transform: translateX(-20%) rotateZ(30deg);
	}
	 25% {
		 transform: translateX(50%) rotateZ(-30deg);
	}
	 50% {
		 transform: translateX(-80%) rotateZ(30deg);
	}
	 75% {
		 transform: translateX(30%) rotateZ(-30deg);
	}
}
 @keyframes fly {
	 0% {
		 opacity: 0;
		 transform: translateY(70vh);
	}
	 3%, 99% {
		 opacity: 1;
	}
	 100% {
		 transform: translateY(-70vh);
	}
}
   
    </style>
  </head>
  <body>
   <div  id="top-section" style= "flex-direction:column;" >
     
      <div style="display:flex; justify-content: space-evenly;">
   <div style="display:flex; flex-direction:column; align-items:center;">
    <h2  style="text-align:center; color:#FCFCFF;">NEW YORK</h2>
          <?php include('janjanclock.php'); ?>
          </div>
  
  <div style="display:flex; flex-direction:column; align-items:center;">
    <h2 style="text-align:center; color:#FCFCFF;">LONDON</h2>
    <?php include('janjanclock.php'); ?>
   

    
  </div>
  <div style="display:flex; flex-direction:column; align-items:center;">
    <h2 style="text-align:center; color:#FCFCFF;">TOKYO</h2>
    <?php include('janjanclock.php'); ?>
  

    
  </div>
  <div style="display:flex; flex-direction:column; align-items:center;">
    <h2 style="text-align:center; color:#FCFCFF;">TEHRAN</h2>
    <?php include('janjanclock.php'); ?>
 
  </div>
</div>
  <h3><div id="time-zones-container"></div></h3>
</div>

    <div id="left-section">
     <section> 
         <h3>     
        <div id="ww_1f10fc3344ff6" style="padding:4px" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl3516"],"font":"Arial","sl_ics":"one_a","sl_sot":"fahrenheit","cl_bkg":"#000000","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
    Weather Data Source: <a href="https://sharpweather.com/weather_toledo/tomorrow/" id="ww_1f10fc3344ff6_u" target="_blank">weather in Toledo tomorrow</a>
  </div>
  <script async src="https://app1.weatherwidget.org/js/?id=ww_1f10fc3344ff6"></script>
  </h3>
       
        <div>
    <a class="weatherwidget-io" href="https://forecast7.com/en/41d66n83d56/toledo/" data-font="Roboto Slab" data-mode="Forecast" data-theme="dark" >Toledo, Ohio, USA</a>
    <script>
      !function(d,s,id){
        var js,fjs=d.getElementsByTagName(s)[0];
        if(!d.getElementById(id)){
          js=d.createElement(s);
          js.id=id;
          js.src='https://weatherwidget.io/js/widget.min.js';
          fjs.parentNode.insertBefore(js,fjs);
        }
      }(document,'script','weatherwidget-io-js');
    </script>
     </div>
        </div>
        
	</section>
        <div id="center-section">
        <section>
	  
	  <div class="iframe-container" style=" display: flex;  justify-content: center; align-items: center;  overflow: hidden; border: none; margin-top: 50px;">
     <iframe src="http://192.168.1.96/album2.php" width="630" height="400" scrolling="no" style="border: none;"></iframe>
    
    
</div>     
    </div>    
    </section>
    
    <div id="right-section">
        <section>
      <h5><!--Word of the Day by TheFreeDictionary.com-->

  <div style="width:600px;position:relative;background-color:#000000;padding:20px;">
    <div style="font:bold 14pt 'Times New Roman';color:#FFFFFF; text-align: center;">Word of the Day</div>
    <style>
      #WordOfTheDay {width:100%;border:none;background-color:#000000}
      #WordOfTheDay H3 {font:bold 14pt 'Times New Roman';color:#FFFFFF}
      #WordOfTheDay TD.WoDLeft {font:bold 12pt 'Times New Roman';color:#FFFFFF}
      #WordOfTheDay TD {font:normal 12pt 'Times New Roman';color:#FFFFFF}
      #WordOfTheDay A {color:#FFFFFF}
    </style>
    <div id="tfd_wod_div">
      <table id="WordOfTheDay">
        <tr>
          <td colspan="2" align="center">
            <h3 style="margin-bottom:3pt">
              <a href="https://www.thefreedictionary.com/larynx" rel="nofollow">larynx</a>
            </h3>
          </td>
        </tr>
        <tr>
          <td class="WoDLeft" valign="top" align="right">Definition:</td>
          <td align="left">The part of the respiratory tract between the pharynx and the trachea, having walls of cartilage and muscle and containing the vocal cords enveloped in folds of mucous membrane.</td>
        </tr>
        <tr>
          <td class="WoDLeft" valign="top">Synonyms:</td>
          <td>
            <a href="https://www.freethesaurus.com/voice+box" rel="nofollow">voice box</a>
          </td>
        </tr>
      </table>
    </div>
    <script type="text/javascript">document.getElementById("tfd_wod_div").style.visibility="hidden"</script>
    <script type="text/javascript" async src="//img.tfd.com/daily/wod-top.js" charset="UTF-8"></script>
    <div style="font:normal 10pt 'Times New Roman';color:#FFFFFF">
      <a style="color:#FFFFFF" href="https://www.thefreedictionary.com/lookup.htm#Word-of-the-Day" rel="nofollow">Word of the Day</a> provided by <a style="color:#FFFFFF" href="https://www.thefreedictionary.com/" rel="nofollow">TheFreeDictionary.com</a>
    </div>
  </div>


<!--end of Word of the Day-->
<br/>
<br/>
<br/>
<br/>
!--Daily Grammar Lesson by TheFreeDictionary.com-->
<div style="width:550px;position:relative;background-color:#000000;padding:35px; text-align: center;">
  <div style="font:bold 14pt 'Times New Roman';color:#FFFFFF">Daily Grammar Lesson</div>
  <style>
    #Grammar {width:100%;border:none;background-color:#000000}
    #Grammar H3 {margin-top:0px;font:bold 14pt 'Times New Roman';color:#FFFFFF}
    #Grammar TD {font:normal 12pt 'Times New Roman';color:#FFFFFF}
    #Grammar A {color:#FFFFFF}
  </style>
  <div id=tfd_grammar_div></div>
  <script type="text/javascript" async src="//img.tfd.com/daily/grammar-top.js" charset="UTF-8"></script>
  <div style="font:normal 10pt 'Times New Roman';color:#FFFFFF">
    <a style="color:#FFFFFF" href="https://www.thefreedictionary.com/lookup.htm#Grammar" rel="nofollow">Daily Grammar Lesson</a>
    provided by <a style="color:#FFFFFF" href="https://www.thefreedictionary.com/" rel="nofollow">TheFreeDictionary.com</a>
  </div>
</div>
<!--end of Daily Grammar Lesson-->
</h5>
<br/>
  </div>
  
  
  
  //////parvana 
    <body>
    <div class="stage">
  <div class="mariposa">
    <div class="mariposa-turn">
      <div class="mariposa-flutter"></div>
    </div>
  </div>

  <div class="mariposa">
    <div class="mariposa-turn">
      <div class="mariposa-flutter"></div>
    </div>
  </div>

  <div class="mariposa">
    <div class="mariposa-turn">
      <div class="mariposa-flutter"></div>
    </div>
  </div>
</div>
//end parvana 

     </section>
    
    
    
	<script>
        // Set a timer to refresh the section every 60 minutes (3600000ms)
  setInterval(function() {
    var section = document.getElementById("center-left-section");
    section.innerHTML = section.innerHTML;
  }, 3600000);
  
  
  //clock function
		function updateClock(timezone, element) {
		  var date = new Date().toLocaleString("en-US", {timeZone: timezone});
		  date = new Date(date);
		  var hour = date.getHours() % 12;
		  var minute = date.getMinutes();
		  var second = date.getSeconds();

		  var hourAngle = (hour * 30) + (0.5 * minute);
		  var minuteAngle = minute * 6;
		  var secondAngle = second * 6;

		  var hourHand = element.querySelector('.hour-hand');
		  hourHand.setAttribute('transform', 'rotate(' + hourAngle + ',100,100)');

		  var minuteHand = element.querySelector('.minute-hand');
		  minuteHand.setAttribute('transform', 'rotate(' + minuteAngle + ',100,100)');

		  var secondHand = element.querySelector('.second-hand');
		  secondHand.setAttribute('transform', 'rotate(' + secondAngle + ',100,100)');
		}

		// example usage to display the time in each timezone
		var elements = document.querySelectorAll('.clock');
		var timezones = ["America/New_York", "Europe/London", "Asia/Tokyo", "Asia/Tehran"];
		for (var i = 0; i < elements.length; i++) {
		  updateClock(timezones[i], elements[i]);
		  setInterval((function(timezone, element) {
		  	return function() { updateClock(timezone, element); };
		  })(timezones[i], elements[i]), 1000);
		}
	</script>
    
	//example usage of timezon_box & date
    <script>
  function createTimeZoneBox(id, timezone) {
    const container = document.getElementById("time-zones-container");

    const box = document.createElement("div");
    box.classList.add("time-zone-box");
    box.id = id;

    const ampm = document.createElement("div");
    ampm.classList.add("ampm");
    box.appendChild(ampm);

    const date = document.createElement("div");
    date.classList.add("date");
    box.appendChild(date);

    container.appendChild(box);

    function updateTime() {
      const now = new Date();
      const ampmValue = now.toLocaleTimeString([], { hour: "numeric", hour12: true, timeZone: timezone }).split(" ")[1];
      const dateValue = now.toLocaleDateString([], { month: "short", day: "numeric", year: "numeric", timeZone: timezone });
      ampm.textContent = ampmValue;
      date.textContent = dateValue;
    }

    setInterval(updateTime, 1000);
  }

  createTimeZoneBox("new-york", "America/New_York");
  createTimeZoneBox("london", "Europe/London");
  createTimeZoneBox("tokyo", "Asia/Tokyo");
  createTimeZoneBox("tehran", "Asia/Tehran");
</script>
  <script>
      // Get the butterflies and the stage
const stage = document.querySelector('.stage');
const butterflies = document.querySelectorAll('.mariposa');

// Set the starting position of the butterflies
butterflies.forEach((butterfly) => {
  butterfly.style.bottom = '-50px'; // Start below the stage
  butterfly.style.left = `${Math.random() * 80}%`; // Random horizontal position
});

// Move the butterflies up
const moveButterflies = () => {
  butterflies.forEach((butterfly) => {
    const currentBottom = parseInt(butterfly.style.bottom);
    if (currentBottom >= window.innerHeight) {
      // Reset the butterfly's position when it reaches the top of the screen
      butterfly.style.bottom = '-50px';
      butterfly.style.left = `${Math.random() * 80}%`; // Random horizontal position
    } else {
      // Move the butterfly up by a random amount
      butterfly.style.bottom = `${currentBottom + Math.random() * 2}px`;
    }
  });
};

// Call moveButterflies every 20 milliseconds to animate the butterflies
setInterval(moveButterflies, 20);

    </script>
    
  </body>
</html>
