<?php

namespace Scaffold\Http\Controllers;

use Core\Controller;
use Core\Helper\Redirect;
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
            Redirect::to( '@foo' );
        }

        if ( isset( $_POST[ 'createSubmitCancel' ] ) ) {
            Redirect::to( '@foo' );
        }

        echo View::make( 'foo/create' );
    }

    function edit()
    {
        if ( isset( $_POST[ 'editSubmitSave' ] ) ) {
            Redirect::to( '@foo' );
        }

        if ( isset( $_POST[ 'editSubmitCancel' ] ) ) {
            Redirect::to( '@foo' );
        }

        $foo = Foo::buildFromId( $_GET[ 'id' ] );

        echo View::make( 'foo/edit', [
            'model' => $foo
        ] );
    }

    function destroy()
    {
        if ( isset( $_POST[ 'destroySubmitYes' ] ) ) {
            Redirect::to( '@foo' );
        }

        if ( isset( $_POST[ 'destroySubmitNo' ] ) ) {
            Redirect::to( '@foo' );
        }

        $foo = Foo::buildFromId( $_GET[ 'id' ] );

        echo View::make( 'foo/destroy', [
            'model' => $foo
        ] );
    }
}