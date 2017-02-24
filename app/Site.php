<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\TryCatch;

class Site extends Model
{
    protected $table = 'sites';

    protected $fillable = [
        'url',
        'hosted_server',
        'created_date',
        'last_updated_date',
        'active_from',
        'active_to'
    ];

    public function metadata(){
        return $this->hasOne('App\Metadata', 'site_id');
    }

    function createSite($data) {

        Try{

            if(sizeof($data)>0){


                if(isset($data['_token'])){
                    unset($data['_token']);
                }


                DB::table('sites')->insert(
                    [
                        $data
                    ]
                );

            }

        }
        catch(Exception $ex){

            echo "You have an error: ".$ex.getMessage();

        }

    }

    function deleteSite($id) {

        Try {
            if ($id) {
                return $metadata = DB::table('sites')->where('id', '=', $id)->delete();
            }

        }catch(Exception $ex){

            echo "You have an error: ".$ex.getMessage();

        }
    }

    /*function deleteSite($id) {
        // this will be used to delete metadata of the site
        return $metadata = DB::table('sites')->where('id', '=', $id)->delete();
    }*/


    /**
     * @param $data
     * @param $id
     */
    function updateSite($url, $id ) {

        DB::table('sites')
            ->where('id', $id)
            ->update(['url'=> $url]);

    }

    function getSite( $id ) {

        $user = DB::table('sites')->where('id', $id)->first();

        return $user;

    }

    function searchSite( $url ) {

        Try {

            if ($url) {
                $site = DB::table('sites')->where('url', $url)->first();

                return $site;
            }

        }catch(Exception $ex){

            echo "You have an error: ".$ex.getMessage();

        }

    }

    function getAllSites() {

        $allsites = DB::table('sites')->get();


        return $allsites;


    }


}

