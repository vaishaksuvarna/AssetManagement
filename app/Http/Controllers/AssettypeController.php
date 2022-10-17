<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function store(Request $request)
    {
       try{                
            $Label = new Label;
                
            $Label->Department  = $request->Department ;
            $Label->selectSection = $request->selectSection;
            $Label->assetType = $request->assetType;
            $Label->selectAssetType = $request->selectAssetType;

            if($Label->selectAssetType == 'selectAsset'){
                $Label->selectAsset = $request->selectAsset;
            } 

            if($Label->selectAssetType == 'selectAssetId'){
                $Label->selectAssetId = $request->selectAssetId;
            }
            $Label->code = $request->code; 
           
            $Label->save();
            $response = [
                'success' => true,
                'message' => "successfully added",
                'status' => 201
            ];
            $status = 201;   
          
        }catch(Exception $e){
            $response = [
                "error"=>$e->getMessage(),
                "status"=>406
            ];            
            $status = 406;
        }catch(QueryException $e){
            $response = [
                "error" => $e->errorInfo,
                "status"=>406
            ];
            $status = 406; 
        }
        
        return response($response, $status);        
    }
}