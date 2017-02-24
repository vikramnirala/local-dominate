<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    protected $table = 'metadata';

    protected $fillable = [
        'tag',
        'value'
    ];

    public function metadata(){
        return $this->belongsTo('App\Sites', 'id');
    }

    function createMetadata($data) {

        Try{

            if(sizeof($data)>0){


                if(isset($data['_token'])){
                    unset($data['_token']);
                }


                DB::table('metadata')->insert(
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

    /* function deleteMetadata($id) {

        Try {
            if ($id) {
                $site = DB::table('metadata')->where('id', $id)->first();
                $site->delete();
            }

        }catch(Exception $ex){

            echo "You have an error: ".$ex.getMessage();

        }
    } */


    function deleteMetadata($id) {
        // this will be used to delete metadata of the site
        return $metadata = DB::table('metadata')->where('id', '=', $id)->delete();
    }

    function updateMetadata($tag, $id) {

        DB::table('metadata')
            ->where('site_id', $id)
            ->update(['tag'=> $tag]);

    }


}
