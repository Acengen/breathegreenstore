$(document).ready(function()
		{
			var firstArray = ['James', 'Mary', 'Robert', 'Jennifer', 'Michael', 'Elizabeth', 'Thomas', 'Nancy', 'Charles', 'Margaret', 'David', 'Ashley', 'Benjamin', 'Frank', 'Hannah', 'Karen', 'Lucy', 'Oscar', 'Peter', 'Rachel', 'Steve', 'Vanessa'];
			var lastArray = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'V', 'W', 'Y'];
			var locationArray = ['Birmingham, AL', 'Phoenix, AZ', 'Little Rock, AR', 'Los Angeles, CA', 'Denver, CO', 'Wilmington, DE', 'Washington D.C.', 'Jacksonville, FL', 'Atlanta, GA', 'Boise, ID', 'Chicago, IL', 'Indianapolis, IN', 'Wichita, KS', 'Louisville, KY', 'New Orleans, LA', 'Boston, MA', 'Lansing, MI', 'Jackson, MS', 'Omaha, NE', 'Las Vegas, NV', 'Newark, NJ', 'New York, NY', 'Albuquerque, NM', 'Charlotte, NC', 'Columbus, OH', 'Oklahoma City, OK', 'Philadelphia, PA', 'Columbia, SC', 'Memphis, TN', 'Houston, TX', 'Salt Lake City, UT', 'Seattle, WA', 'Milwaukee, WI', 'Cheyenne, WY'];
			setInterval( function()
				{
					var randTime = Math.floor((Math.random() * 40) + 5);
					$('#randTime').html(randTime);
					var firstRand = Math.floor(Math.random() * firstArray.length);
					var randFirst = firstArray[firstRand];
					$('#randFirst').html(randFirst);
					var lastRand = Math.floor(Math.random() * lastArray.length);
					var randLast = lastArray[lastRand];
					$('#randLast').html(randLast);
					var locationRand = Math.floor(Math.random() * locationArray.length);
					var randLocation = locationArray[locationRand];
					$('#randLocation').html(randLocation);
					$('#recentBox').css("display", "block");
					$('#recentBox').animate({
							"bottom" : "15"
					}, {
							duration: 800
					});

					setTimeout( function()
						{
							$( "#recentBox" ).animate(
									{ "bottom" : "-115" } , { duration: 800 }
								);
						} , 4500 );

					setTimeout( function()
						{
							$( "#recentBox" ).css( "display" , "none" );
						} , 5400 );

				} , 15000 );
		}
	);