<?php

namespace OxidEsales\OxidAcademy\ArticleDemoModule\Model;

class Article extends Article_parent {

	public function getFormattedPrice()
	{
		return __FUNCTION__.'(): '.$this->getFPrice();
	}
}