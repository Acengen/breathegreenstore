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
  function Package( bagNumber, freeNumber, price, vipPrice, days, shippingCost, savings, youPay )
		{
			_classCallCheck( this, Package );
			this._bagNumber = bagNumber;
			this._freeNumber = freeNumber;
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
						return parseFloat( this._youPay );
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
								return parseFloat(this._regPrice / this._bagNumber);
							}
						else
							{
								return parseFloat(this._vipPrice / this._bagNumber);
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
