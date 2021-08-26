var form = $( "#package-selection-form" );

function displayOrderSummary( package )
	{
		var vip = updateVIP(package);
		if( package.getShipping() !== 0 )
			{
				$( "#shipping-cost" ).text( "+" + package.getShipping().toFixed(2) );
			}
		else
			{
				$( "#shipping-cost" ).text( "FREE" );
			}

    if( package.freeNumber() == 1 )
			{ $( "#plural" ).html(""); }
		else
			{ $( "#plural" ).html("s"); }

		$( "#instant-savings" ).html( package.calcBottleSavings().toFixed(2) );
		$( "#big-price" ).html( package.calcBottlePrice().toFixed(2) );
		$( "#savings" ).html( "$" + package.updateSavings().toFixed(2) );
		$( "#percentage" ).html( package.updateSavings().toFixed(0) + "%" );
		$( "#regularly" ).val( package.updateSavings().toFixed(2) );
		$( "#you-pay" ).html( "$" + package.youPay().toFixed(2) );
		$( ".bag-number" ).html( package.bagNumber() );
		$( ".free-number" ).html( package.freeNumber() );
	}

function getPackage( package )
	{
		package = parseInt( package );
		switch( package )
			{
				case 1: 
					return one;
					break;
				case 2: 
					return two;
					break;
				case 3:
					return three;
					break;
				case 4:
					return four;
					break;
				case 5:
					return five;
					break;
				default:
					return five;
			}
	}

$( document ).ready(function ()
	{

		var package;

		$("input[name='package']").each(function()
			{
				if( $( this ).is( ":checked" ) )
					{
						package = getPackage( $( this ).val() );
						$( "label" ).removeClass( "active" );
						$( this ).closest( "label" ).addClass( "active" );
					}
			});

		displayOrderSummary( package );

		$( "input[name='package']" ).on( "click", function()
			{
				package = getPackage( $( this ).val() );
				$( "label" ).removeClass( "active" );
				$( this ).closest( "label" ).addClass( "active" );
				displayOrderSummary( package );
			});

		$( "#vip-checkbox" ).on( "change", function()	
			{
				displayOrderSummary( package );
			});

	});

function updateVIP( package )
	{
		if( $( "#vip-checkbox" ).is( ":checked" ) )
			{
				package._vip = true;
			}
		else
			{
				package._vip = false;
			}
		return package._vip;
	}




