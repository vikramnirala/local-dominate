<?php

namespace App\Http\Controllers;

use Aws\Route53;
use Illuminate\Http\Request;
use Aws\Sdk;
use Aws\AwsClient;
use Aws\AwsClientInterface;
use Aws\AwsClientTrait;
use Aws\Laravel\AwsFacade;
use Aws\Laravel\AwsServiceProvider;
use Aws\Laravel\Test\LaravelAwsServiceProviderTest;
use Illuminate\Support\Facades\App;
use Laravel\Lumen\Application as LumenApplication;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Aws\Route53\Route53Client;
use Aws\Handler\GuzzleV6\GuzzleHandler;

class AwsSdkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $s3 = AwsFacade::createClient('s3');
        $s3->putObject(array(
            'Bucket'     => 'YOUR_BUCKET',
            'Key'        => 'YOUR_OBJECT_KEY',
            'SourceFile' => '/the/path/to/the/file/you/are/uploading.ext',
        ));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function __construct()
    {

    }

}
