<?php
/**
 * Default auth role
 *
 * @package    KO7/Auth
 *
 * @copyright  (c) Kohana Team
 * @license    https://koseven.ga/LICENSE
 */
class Model_Auth_Role extends ORM {

	// Relationships
	protected $_has_many = [
		'users' => ['model' => 'User','through' => 'roles_users'],
	];

	public function rules()
	{
		return [
			'name' => [
				['not_empty'],
				['min_length', [':value', 4]],
				['max_length', [':value', 32]],
			],
			'description' => [
				['max_length', [':value', 255]],
			]
		];
	}

} // End Auth Role Model
