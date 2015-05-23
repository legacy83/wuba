<?php

namespace Scaffold\Http\Controllers;

use Core\Controller;
use Core\View;

use Scaffold\Model\Foo;

class FooController extends Controller
{
    function index()
    {
        $foos = array();
        foreach ( range( 1, 6 ) as $id ) {
            $foos[ ] = Foo::buildFromId( $id );
        }

        echo View::make( 'foo/index', [
            'models' => $foos,
        ] );
    }

    function show()
    {
        $foo = Foo::buildFromId( $_GET[ 'id' ] );

        echo View::make( 'foo/show', [
            'model' => $foo
        ] );
    }

    function create()
    {
        if ( isset( $_POST[ 'createSubmitCreate' ] ) ) {
            die( 'createSubmitCreate' );
        }

        if ( isset( $_POST[ 'createSubmitCancel' ] ) ) {
            die( 'createSubmitCancel' );
        }

        echo View::make( 'foo/create' );
    }

    function edit()
    {
        if ( isset( $_POST[ 'editSubmitSave' ] ) ) {
            die( 'createSubmitCreate' );
        }

        if ( isset( $_POST[ 'editSubmitCancel' ] ) ) {
            die( 'editSubmitCancel' );
        }

        $foo = Foo::buildFromId( $_GET[ 'id' ] );

        echo View::make( 'foo/edit', [
            'model' => $foo
        ] );
    }

    function destroy()
    {
        if ( isset( $_POST[ 'destroySubmitYes' ] ) ) {
            die( 'destroySubmitYes' );
        }

        if ( isset( $_POST[ 'destroySubmitNo' ] ) ) {
            die( 'destroySubmitNo' );
        }

        $foo = Foo::buildFromId( $_GET[ 'id' ] );

        echo View::make( 'foo/destroy', [
            'model' => $foo
        ] );
    }
}