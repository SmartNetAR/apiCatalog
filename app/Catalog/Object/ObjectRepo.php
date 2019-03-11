<?

namespace App\Catalog\Object;

interface ObjectRepo
{
    public function findOrFail( $id ) ;

    public function getAll() ;

    public function search( array $data = array() ) ;

    public function create( array $data ) ;

    public function update( Object $object, array $data ) ;

    public function delete( $object ) ;
}