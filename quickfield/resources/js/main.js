(function()
{
	var FLD = Craft.FieldLayoutDesigner;
	var FLDinit = FLD.prototype.init;

	/**
	 * Override the current FieldLayoutDesigner "constructor" so new buttons can be initialised.
	 */
	FLD.prototype.init = function()
	{
		FLDinit.apply(this, arguments);

		new QuickField(this);
	};

})();
