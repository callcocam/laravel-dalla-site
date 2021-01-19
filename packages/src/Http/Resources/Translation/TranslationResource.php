<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Translation;


use Illuminate\Filesystem\Filesystem;
use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\SELECT;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Collumns\Fields\TEXTAREA;

class TranslationResource extends AbstractResource
{
    public function fields($resource)
    {
        return [
            ID::make('id')->hidden_index(),
            TEXT::make('name'),
            TEXTAREA::make('description'),
            SELECT::make('language')->value(app()->getLocale())->options($this->setLanguages()),
            STATUS::make('status')->hidden_index(),
            ACTION::make('actions')->hidden_edit()
        ];
    }

    private function setLanguages(){
        $fileSystem = new Filesystem();
        $files =  $fileSystem->allFiles(resource_path("lang"));
        $languages = [];
        $languagesReplaces = [];
        if($files){
            foreach ($files as $file) {
                if($file->isFile()){
                    if(in_array($file->getExtension(), ['json'])){
                        if(!in_array($file->getFilenameWithoutExtension(),$languagesReplaces)){
                            $languages[] =  [
                                'code'=>$file->getFilenameWithoutExtension(),
                                'label'=>$file->getFilenameWithoutExtension(),
                            ];
                            $languagesReplaces[] =  $file->getFilenameWithoutExtension();
                        }
                    }
                }
            }
        }
      return $languages;
    }
}
