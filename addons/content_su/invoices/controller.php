<?php
namespace addons\content_su\invoices;

class controller extends \addons\content_su\main\controller
{
	public $fields =
	[
		'id',
		'date',
		'user_id_seller',
		'user_id',
		'temp',
		'title',
		'total',
		'total_discount',
		'status',
		'date_pay',
		'transaction_bank',
		'discount',
		'vat',
		'vat_pay',
		'final_total',
		'count_detail',
		'createdate',
		'datemodified',
		'desc',
		'sort',
		'order',
		'search',
	];

	public function _route()
	{
		parent::_route();

		$property                 = [];
		foreach ($this->fields as $key => $value)
		{
			$property[$value] = ["/.*/", true, $value];
		}

		$this->get(false, "list")->ALL(['property' => $property]);

	}
}
?>