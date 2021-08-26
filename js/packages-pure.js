"use strict";

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck( instance, Constructor )
	{
		if( !( instance instanceof Constructor ) )
			{
				throw new TypeError("Cannot call a class as a function");
			}
	}

var Package = function () {
  function Package( bagNumber, price, vipPrice, days, shippingCost, savings, youPay )
		{
			_classCallCheck( this, Package );
			this._bagNumber = bagNumber;
			this._freeNumber = 0;
			this._regPrice = parseFloat(price).toFixed(2);
			this._vipPrice = parseFloat(vipPrice).toFixed(2);
			this._days = days;
			this._shippingCost = shippingCost;
			this._vip = false;
			this._international = false;
			this._bottleRetail = 97;
			this._savings = savings;
			this._youPay = youPay;
		}

  _createClass( Package,
		[
			{
				key: "calcRetailPrice",
				value: function calcRetailPrice()
					{
						return parseFloat(this._bagNumber * this._bottleRetail);
					}
			},
			{
				key: "getSubtotal",
				value: function getSubtotal()
					{
						if (this._vip === true)
							{
								return parseFloat(this._vipPrice);
							}
						else
							{
								return parseFloat(this._regPrice);
							}
					}
			},
			{
				key: "getShipping",
				value: function getShipping()
					{
						if (this._vip === true)
							{
								return 0;
							}
						else
							{
								return parseFloat(this._shippingCost);
							}
					}
			},
			{
				key: "calcTotal",
				value: function calcTotal()
					{
						return parseFloat(this.getSubtotal() + this.calcShipping());
					}
			},
			{
				key: "calcSavings",
				value: function calcSavings()
					{
						return parseFloat(this.calcRetailPrice() - this.calcTotal());
					}
			},
			{
				key: "updateSavings",
				value: function updateSavings()
					{
						return parseFloat( this._savings );
					}
			},
			{
				key: "youPay",
				value: function youPay()
					{
						console.log( this._youPay );
						switch( this._youPay )
							{
								case 55.99:
								return parseFloat( 55.99 );
								break;
								case 51.49:
								return parseFloat( 102.99 );
								break;
								case 46.66:
								return parseFloat( 139.99 );
								break;
								case 45.00:
								return parseFloat( 179.99 );
								break;
								case 42.00:
								return parseFloat( 209.99 );
								break;
							}
						//return parseFloat( this._youPay * this._bagNumber );
					}
			},
			{
				key: "bagNumber",
				value: function bagNumber()
					{
						return this._bagNumber;
					}
			},
			{
				key: "freeNumber",
				value: function freeNumber()
					{
						return this._freeNumber;
					}
			},
			{
				key: "calcBottlePrice",
				value: function calcBottlePrice()
					{
						if (this._vip === false)
							{
								//return parseFloat(this._regPrice / this._bagNumber);
								return parseFloat( this._regPrice );
							}
						else
							{
								//return parseFloat(this._vipPrice / this._bagNumber);
								return parseFloat( this._vipPrice );
							}
					}
			},
			{
				key: "calcBottleSavings",
				value: function calcSavings()
					{
						return parseFloat(this._bottleRetail - this.calcBottlePrice());
					}
			},
		]);

  return Package;
}();
