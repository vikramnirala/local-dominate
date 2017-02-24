<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use App\Site;
use App\Metadata;

class TestSiteController extends Controller
{
    //
    /**
     * Responds to requests to GET /users
     */
    public function index()
    {
        //
        $get_sites = new Site();
        $sites = $get_sites->getAllSites();
        return response()->json([
            'site' => $sites
        ], 200);
    }

    /**
     * Responds to requests to GET /users/show/1
     */
    public function show($id)
    {
        //
        $single_site = new Site();
        $nid = $single_site->getSite($id);
        if( $nid != null ) {
            return response()->json([
                'site' => $nid
            ], 200);
        } else {
            return abort(404, 'Page not found');
        }

    }

    public function store(Request $request){
        $datas = json_encode($request);
        $data_x = (array) $request['site'];
        //foreach ($data_x as $value) {
            //print_r($values);
            $site['url'] = $data_x['url'];
            $site['hosted_server'] = $data_x['hosted_server'];
            $site['state'] = $data_x['state'];
            $site['created_date'] = $data_x['created_date'];
            $site['last_updated_date'] = $data_x['last_updated_date'];
            $site['active_from'] = $data_x['active_from'];
            $site['active_to'] = $data_x['active_to'];

            //$data = $request->all();
            $new_site = new Site();
            $new_site->createSite($site);

        //}


        $site_created = Site::all()->last(); // last element
        //$site_id = Site::all()->last()->pluck('id');
        //return $site_created;
        return response()->json([
            'site' => $site_created
        ], 200);
    }


    /**
     * Update the given record.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request)
    {
        //
        $datas = json_encode($request);
        $data_x = (array) $request['site'];
        $site['url'] = $data_x['url'];
        $site['hosted_server'] = $data_x['hosted_server'];
        $site['state'] = $data_x['state'];
        $site['created_date'] = $data_x['created_date'];
        $site['last_updated_date'] = $data_x['last_updated_date'];
        $site['active_from'] = $data_x['active_from'];
        $site['active_to'] = $data_x['active_to'];

        $new_site = new Site();
        $new_site->createSite($site);

        return $request;
    }

    /**
     * Responds to requests to POST /users/profile
     */
    public function postTestSite()
    {
        //
    }


    //curl -X POST -H 'Content-Type: application/json' -d '{"url":"restcurl.com","hosted_server":"restcurl", "state":"rest", "created_date":"2015-01-02", "last_updated_date":"2015-01-02", "active_from":"2015-01-02", "active_to":"2015-01-02"}' http://127.0.0.1:8080/testsite -H "Accept: text/html"

}
