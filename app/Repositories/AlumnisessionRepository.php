<?php
namespace App\Repositories;
use App\Models\Alumnisession;
class AlumnisessionRepository extends BaseRepository
{
	public function __construct( Alumnisession $class ) {
		parent::__construct( $class );
	}
}
