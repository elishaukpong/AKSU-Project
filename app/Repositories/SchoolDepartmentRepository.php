<?php
namespace App\Repositories;
use App\Models\Schooldepartment;
class SchoolDepartmentRepository extends BaseRepository
{
	public function __construct( Schooldepartment $class ) {
		parent::__construct( $class );
	}
}
