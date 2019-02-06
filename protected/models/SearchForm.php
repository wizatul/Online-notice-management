<?php

class SearchForm extends CFormModel
{
	public $search;
	
	

	
	public function rules()
	{
		return array(
		
			array('search')
		);
	}
}

