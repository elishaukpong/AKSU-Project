<?php
namespace App\Repositories;
use App\Models\Administrators;
class AdministratorsRepository extends BaseRepository
{
	public function __construct( Alumnisession $class ) {
		parent::__construct( $class );
	}
}
