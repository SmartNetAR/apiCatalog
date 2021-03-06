<?php
/**
 * @author Leonardo Casales
 * @email leonardo@smartnet.com.ar
 * @create date 2019-03-11 20:59:19
 * @modify date 2019-03-11 20:59:19
 * @desc [description]
 */

namespace App\Catalog\Object;
use App\Catalog\Object\ObjectRepo;

class EloquentObjectRepo implements ObjectRepo
{
    public function findOrFail( $id )
    {
        return Object::findOrFail( $id ) ;
    }

    public function getAll()
    {
        return Object::get();
    }

    public function search( array $data = array() )
    {
        
    }
    
    public function create( array $data )
    {
        return Object::create( $data ) ;
    }

    public function update( Object $object, array $data )
    {
        $object->fill( $data ) ;
        $object->save() ;
        return $object ;
    }

    public function delete( $object ){
        if ( is_numeric( $object ) ) {
            $object = $this->findOrFail( $object ) ;
        }

        $object->delete() ;
        return $object ;
    }
}