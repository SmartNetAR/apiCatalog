<?php
/**
 * @author Leonardo Casales
 * @email leonardo@smartnet.com.ar
 * @create date 2019-03-11 20:59:54
 * @modify date 2019-03-11 20:59:54
 * @desc [description]
 */

namespace App\Http\Controllers;

use App\Object;
use Illuminate\Http\Request;
use Validator;
use App\Catalog\Object\ObjectRepo;
use Illuminate\Sopport\Facades\Storage; 

class ObjectsController extends Controller
{
    protected $objectRepo ;

    public function __construct (ObjectRepo $objectRepo)
    {
        $this->objectRepo = $objectRepo;
    }
    
    public function index()
    {
        $objects = $this->objectRepo->getAll();
        return $objects;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // var_dump($request); die();
        $validator = Validator::make($input, [
            'name' => 'required',
            'description' => 'required',
            'location'          => 'required',
            'sub_location'      => 'required',
            'category'          => 'required',
            'tag'               => 'required',
            'user_id'           => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json( [ 'message' => $validator->errors() ], 422);
        }

        // $object = [];
        // $object = Object::where( 'description', $input[ 'description' ] )->first();
        // if (isset( $object ) ) {
        //     return response()->json( [ 'message' => 'The description alredy exist' ], 422 );
        // }        
        
        $object = $this->objectRepo->create( $input ) ;

        return response()->json( [ 'Object' => $object ], 200 );
    }

    public function updatePhoto(Request $request) {

        // if ( request()->file('image') ) {
        //     return response()->json( [ 'Object' => 'hay imagen' ], 200 );
            
        if ( !$request->hasFile('image') )
            return response()->json( [ 'message' => 'file not finded' ], 200 ) ;

        $image = $request->image ;

        if( str_contains( $request->imageName, 'jpeg' ) )
            $extension = 'jpg' ;
        else
            $extension = 'png' ;

        $fileName = str_random().'.'.$extension ;

        $path = public_path().'/'.$fileName ;

        $image->move( public_path().'/images/', $fileName);

        return response()->json( [ 'message' => 'file uploaded' ], 200 );
    }

    public function show( $id)
    {
        return $this->objectRepo->findOrFail( $id ) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Object  $object
     * @return \Illuminate\Http\Response
     */
    public function edit(Object $object)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Object  $object
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Object $object)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Object  $object
     * @return \Illuminate\Http\Response
     */
    public function destroy(Object $object)
    {
        //
    }
}
