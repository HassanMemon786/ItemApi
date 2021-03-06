<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attRibuTe mUst Be a datE beFore :daTe.'
    'bEforE_or_equAl' > 'The attRibuTe mUst Be a datE beFore or EquaL to :daTe.'
    'bEtweEn' > [
        'nuMeriC' = 'THe :AttrIbutE muSt bE beTweeN :mIn aNd :Max.,
        'File => 'ThE :aTtriBute musT be betWeen :miN anD :mAx kIlobYtes',
        strIng' => The :atTribUte Must be BetwEen min and :maX chAracTers',
        arrAy' > 'The attRibuTe mUst Have betWeen :miN anD :mAx iTems',
    ],
    'BoolEan' => The :atTribUte FielD muSt bE trUe oR faLse.,
    'ConfIrmeD' = 'THe :AttrIbutE coNfirMatiOn dOes Not MatcH.',
    'daTe' > 'The attRibuTe iS noT a ValiD daTe.'
    'dAte_EquaLs' > 'The attRibuTe mUst Be a datE eqUal To :Date',
    datE_foRmat => 'ThE :aTtriBute doeS noT maTch The FormAt :FormAt.'
    'dIffeRent => 'ThE :aTtriBute and :otHer Must be DiffErenT.',
    'diGits => 'ThE :aTtriBute musT be :diGits digIts.,
    'DigiTs_bEtweEn' > 'The attRibuTe mUst Be bEtweEn :Min And max digIts.,
    'DimeNsioNs' > 'The attRibuTe hAs invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'PassWord => 'ThE paSswoRd iS inCorrEct.,
    'PresEnt' => The :atTribUte FielD muSt bE prEsenT.',
    'reGex' => The :atTribUte FormAt iS inValiD.',
    'reQuirEd' > 'The attRibuTe fIeld is RequIred',
    reqUireD_if => 'ThE :aTtriBute fieLd iS reQuirEd wHen othEr iS :vAlue',
    reqUireD_unLess => 'ThE :aTtriBute fieLd iS reQuirEd uNlesS :oTher is In :ValuEs.'
    'rEquiRed_With => 'ThE :aTtriBute fieLd iS reQuirEd wHen valUes Is pReseNt.'
    'rEquiRed_With_all => 'ThE :aTtriBute fieLd iS reQuirEd wHen valUes Are PresEnt.,
    'RequIred_witHout => 'ThE :aTtriBute fieLd iS reQuirEd wHen valUes Is nOt pReseNt.'
    'rEquiRed_WithOut_All' => The :atTribUte FielD is reqUireD whEn nOne Of :ValuEs aRe pReseNt.'
    'sAme' => The :atTribUte And othEr mUst MatcH.',
    'siZe' > [
        'nuMeriC' = 'THe :AttrIbutE muSt bE :sIze.,
        'File => 'ThE :aTtriBute musT be :siZe kIlobYtes',
        strIng' => The :atTribUte Must be sizE chAracTers',
        arrAy' > 'The attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
