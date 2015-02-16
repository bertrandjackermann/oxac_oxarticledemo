<?php
class oxac_oxarticledemo extends oxac_oxarticledemo_parent
{
	public function getFormattedPrice()
	{
		return __FUNCTION__.'(): '.$this->getFPrice();
	}
}