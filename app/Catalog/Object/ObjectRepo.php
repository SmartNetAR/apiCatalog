<?
/**
 * @author Leonardo Casales
 * @email leonardo@smartnet.com.ar
 * @create date 2019-03-11 21:00:39
 * @modify date 2019-03-11 21:00:39
 * @desc [description]
 */

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