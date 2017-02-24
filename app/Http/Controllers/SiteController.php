<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\Metadata;

class SiteController extends Controller
{
    /**
     * Show the application splash screen.
     *
     * @return Response
     */
    public function show()
    {
        return view('create-site');
    }

    public function del()
    {
        return view('deleteSite');
    }

    public function createSite(Request $request) {

        $data = $request->all();

        $new_site = new Site();
        $new_site->createSite($data);
        return redirect()->back()->with(['message' => 'Site created successfully']);
    }

    public function deleteSite(Request $request) {

        $id = $request->all();

        $new_site = new Site();
        $new_site->deleteSite($id);
        //return redirect()->route('create-site');
    }

    public function updateSite()
    {
        return view('update');
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function updateTable(Request $request) {

        //$data = $request->all();

        $new_site = new Site();
        $new_meta = new Metadata();
        $id = $request['id'];
        $url = $request['url'];
        $tag = $request['tag'];
        $new_site->updateSite($url, $id);
        $new_meta->updateMetadata($tag, $id);
        //return redirect()->route('create-site');
    }

    public function siteTable(){

        $whole_site = new Site();
        $whole_site->getAllSites();

    }

    public function listAll(){

        $get_sites = new Site();
        $sites = $get_sites->getAllSites();

        return view('listings', ['sites' => $sites]);

    }


    public function showSite()
    {
        return view('show-site');
    }
    public function siteShow()
    {
        return view('siteshow');
    }


    public function getSite(Request $request){

        $id = $request['id'];
        //echo $id;
        $single_site = new Site();
        $nid = $single_site->getSite($id);

        echo '<pre>';
        print_r($nid);
        echo '</pre>';

    }

    public function getAllSite(){

        $dom_site = new Site();

        $sites = $dom_site->getAllSites();

        foreach ($sites as $site) {
            echo $site->url.'<br>';
        }
    }

}