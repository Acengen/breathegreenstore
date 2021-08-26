<footer>
	<div class="container">
		<div class="text-center">

<p style="max-width:750px;margin:0 auto">*Our Breathe Green Pure and Mite Fighter products offer a 60-Day Money Back Guarantee and our Charcoal Bags and Charcoal Insert products offer a 90-Day Money Back Guarantee.</p>

<?php
switch( $thispage )
	{
case "bags":
echo <<<EOD
<div class="p-4 text-light text-left" style="background:#222;color:#DDD !important;">
<p style="overflow-wrap: break-word;">1. Norman R. Rowe (1963) Odor Control with Activated Charcoal, Journal of the Air Pollution Control Association, 13:4, 150-153, DOI: 10.1080/00022470.1963.10468157 https://www.tandfonline.com/doi/abs/10.1080/00022470.1963.10468157</p>
<p style="overflow-wrap: break-word;">2. S. Das (2012, January) Current Trends in Technology and Science of Carbon Nanosphere From Bamboo And Its Use In Water Purification  https://www.researchgate.net/publication/280302258_Current_Trends_in_Technology_and_Science_Preparation_of_Carbon_Nanosphere_From_Bamboo_And_Its_Use_In_Water_Purification</p>
<p style="overflow-wrap: break-word;">3. United States Environmental Protection Agency (Unknown) Progress Cleaning the Air and Improving People’s Health https://www.epa.gov/clean-air-act-overview/progress-cleaning-air-and-improving-peoples-health</p>
<p style="overflow-wrap: break-word;">4. Asada, Takashi (2002, March 11) Science of Bamboo Charcoal:  Study on Carbonizing Temperature of Bamboo Charcoal and Removal Capability of Harmful Gases https://www.researchgate.net/publication/237259560_Science_of_Bamboo_Charcoal_Study_on_Carbonizing_Temperature_of_Bamboo_Charcoal_and_Removal_Capability_of_Harmful_Gases</p>
</div>
EOD;
break;
case "mites":
echo <<<EOD
<div class="p-4 text-light text-left" style="background:#222;color:#DDD !important;">
<p style="overflow-wrap: break-word;">1. J. Zhejiang Univ Sci B. (2006, Dec 7) Acaricidal activities of some essential oils and their monoterpenoidal constituents against house dust mite, Dermatophagoides pteronyssinus (Acari:  Proglyphidae) https://www.ncbi.nlm.nih.gov/pmc/articles/PMC1661675/</p>
<p style="overflow-wrap: break-word;">2. Mayo Clinic Staff (2019, May 7) Dust mite allergy https://www.mayoclinic.org/diseases-conditions/dust-mites/symptoms-causes/syc-20352173</p>
<p style="overflow-wrap: break-word;">3. Asthma and Allergy Foundation of America (2015, October) Dust Mite Allergy https://www.aafa.org/dust-mite-allergy/?gclid=EAIaIQobChMIjIixkPee5gIVSdyGCh1qoQ5rEAAYASAAEgJcLvD_BwE</p>
<p style="overflow-wrap: break-word;">4. American Lung Association (2019, July 1) Dust Mites  https://www.lung.org/our-initiatives/healthy-air/indoor/indoor-air-pollutants/dust-mites.html</p>
</div>
EOD;
break;
case "pure":
echo <<<EOD
<div class="p-4 text-light text-left" style="background:#222;color:#DDD !important;">
<p style="overflow-wrap: break-word;">1. Int J Mol Sci. (2018, Oct 19) Negative Air Ions and Their Effects on Human Health and Air Quality Improvement https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6213340/</p>
<p style="overflow-wrap: break-word;">2. University of Rochester Medical Center (Unknown) Indoor Air Can Cause Health Problems https://www.urmc.rochester.edu/encyclopedia/content.aspx?ContentTypeID=1&ContentID=2163</p>
<p style="overflow-wrap: break-word;">3. United States Environment Protection Agency (Unknown) Introduction to Indoor Air Quality https://www.epa.gov/indoor-air-quality-iaq/introduction-indoor-air-quality</p>
<p style="overflow-wrap: break-word;">4. New York State Deparment of Health (2019, October) Odors & Health https://www.health.ny.gov/publications/6500/index.htm</p>
<p style="overflow-wrap: break-word;">5. Holmes, Lindsay (2017, June 23) Sleep Is Just a Cool Spring Breeze Away https://www.cnn.com/2015/04/07/health/sleep-better-fresh-air/index.html</p>
<p style="overflow-wrap: break-word;">6. Ion Loop (2017, November 10) The Harmful Effects of Positive Ions on Your Health https://www.ionloop.com/blog/the-harmful-effects-of-positive-ions-on-your-health/#:~:targetText=Most%20forms%20of%20pollution%2C%20toxic,charge%2C%20making%20them%20positive%20ions.&targetText=In%20fact%2C%20you're%20likely,are%20polluted%20with%20positive%20ions.</p>
<p style="overflow-wrap: break-word;">7. American Lung Association (Unknown) Indoor Air Pollutants and Health https://www.lung.org/our-initiatives/healthy-air/indoor/indoor-air-pollutants/</p>
<p style="overflow-wrap: break-word;">8. Mann, Dennis (2003, June 2) Negative Ions Create Positive Vibes https://www.webmd.com/balance/features/negative-ions-create-positive-vibes#2</p>
</div>
EOD;
break;
	}
?>
		<p>Copyright &copy;<?=date('Y');?> Breathe Green. All Rights Reserved.</p>
		</div>
		<ul class="nav justify-content-center align-items-center">
			<li class="nav-item">
				<a class="nav-link" href="<?=Flight::get( "folder" );?>legal/terms" target="_blank">Terms &amp; Conditions</a>
			</li>
			<li class="nav-item">|</li>
			<li class="nav-item">
				<a class="nav-link" href="<?=Flight::get( "folder" );?>legal/privacy" target="_blank">Privacy Policy</a>
			</li>
			<li class="nav-item">|</li>
			<li class="nav-item">
				<a class="nav-link" href="<?=Flight::get( "folder" );?>legal/returns" target="_blank">Return Policy</a>
			</li>
<?php /* SHIPPING OUT AS PER DAN
			<li class="nav-item">|</li>
			<li class="nav-item">
				<a class="nav-link" href="<?=Flight::get( "folder" );?>legal/shipping" target="_blank">Shipping Policy</a>
			</li>
*/ ?>
			<li class="nav-item">|</li>
			<li class="nav-item">
				<a class="nav-link" href="<?=Flight::get( "folder" );?>contact">Contact</a>
			</li>
		</ul>
	</div>
</footer>
