

<!DOCTYPE html>
<html>
<head>
	<title>Analog Clock</title>
	<style>
	  body {
			background-color: #000000; /* Replace with your desired color code */
		}
		.clock-container {
			position: relative;
			width: 200px;
			height: 200px;
		}
		.clock {
			position: absolute;
			top: 0;3
			left: 0;
			transform-origin: center center;
		}
		.hour-hand {
			stroke: #FCFCFF;
			stroke-width: 6;
			stroke-linecap: round;
		}
		.minute-hand {
			stroke: #FCFCFF;
			stroke-width: 4;
			stroke-linecap: round;
		}
		.second-hand {
			stroke: #B8FF19;
			stroke-width: 2;
			stroke-linecap: round;
		}
		.tick {
			stroke: #FCFCFF;
			stroke-width: 2;
			stroke-linecap: round;
		}
		
		.tick.large {
			stroke-width: 4;
			stroke-linecap: butt;
		}
		
		
		
		
		
		
	</style>
</head>
<body>
	

	<div class="clock-container">
		<svg class="clock" width="200" height="200">
    <circle cx="100" cy="100" r="95" stroke="#FCFCFF" stroke-width="3" fill="none"/>
   <!-- Tick marks for every minute -->
			<?php
			for ($i = 0; $i < 60; $i++) {
			    $angle = deg2rad(6 * $i - 90);
			    $innerRadius = 85;
			    $outerRadius = $i % 5 === 0 ? 75 : 80;
			    $innerX = 100 + $innerRadius * cos($angle);
			    $innerY = 100 + $innerRadius * sin($angle);
			    $outerX = 100 + $outerRadius * cos($angle);
			    $outerY = 100 + $outerRadius * sin($angle);
			    echo '<line class="tick ' . ($i % 5 === 0 ? 'large' : '') . '" x1="' . $innerX . '" y1="' . $innerY . '" x2="' . $outerX . '" y2="' . $outerY . '"/>';
			}
			?>
   
    <?php
    for ($i=1; $i<=12; $i++) {
        $hour = $i;
        $angle = deg2rad(30 * $i - 90);
        $numberX = 100 + 55 * cos($angle);
        $numberY = 100 + 55 * sin($angle);
        echo '<text x="'.$numberX.'" y="'.$numberY.'" text-anchor="middle" fill="white">'.$hour.'</text>';
    }
    ?>
    <line class="hour-hand" x1="100" y1="100" x2="100" y2="50" />
    <line class="minute-hand" x1="100" y1="100" x2="100" y2="30" />
    <line class="second-hand" x1="100" y1="100" x2="100" y2="20" />
</svg>


	</div>
	<script>
	  function updateClock(timezone) {
  var date = new Date().toLocaleString("en-US", {timeZone: timezone});
  date = new Date(date);
  var hour = date.getHours() % 12;
  var minute = date.getMinutes();
  var second = date.getSeconds();

  var hourAngle = (hour * 30) + (0.5 * minute);
  var minuteAngle = minute * 6;
  var secondAngle = second * 6;

  var hourHand = document.querySelector('.hour-hand');
  hourHand.setAttribute('transform', 'rotate(' + hourAngle + ',100,100)');

  var minuteHand = document.querySelector('.minute-hand');
  minuteHand.setAttribute('transform', 'rotate(' + minuteAngle + ',100,100)');

  var secondHand = document.querySelector('.second-hand');
  secondHand.setAttribute('transform', 'rotate(' + secondAngle + ',100,100)');
}

//  usage to display the time 
updateClock("Asia/Tehran");
setInterval(function() {
  updateClock("Asia/Tehran");
}, 1000);

	</script>
</body>
</html>

