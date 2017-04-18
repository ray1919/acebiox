<?php

namespace app\assets;

use yii\web\AssetBundle;

class TypeaheadAsset extends AssetBundle 
{
    public $sourcePath = '@bower/typeahead.js/dist';
    public $js = [
        'typeahead.jquery.min.js',
    ];
}
