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

    'accepted'             => 'This must be accepted.',
    'active_url'           => 'This is not a valid URL.',
    'after'                => 'This must be a date after :date.',
    'after_or_equal'       => 'This must be a date after or equal to :date.',
    'alpha'                => 'This may only contain letters.',
    'alpha_dash'           => 'This may only contain letters, numbers, dashes and underscores.',
    'alpha_num'            => 'This may only contain letters and numbers.',
    'array'                => 'This must be an array.',
    'before'               => 'This must be a date before :date.',
    'before_or_equal'      => 'This must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'This must be between :min and :max.',
        'file'    => 'This must be between :min and :max kilobytes.',
        'string'  => 'This must be between :min and :max characters.',
        'array'   => 'This must have between :min and :max items.',
    ],
    'boolean'              => 'This must be true or false.',
    'confirmed'            => 'This confirmation does not match.',
    'date'                 => 'This is not a valid date.',
    'date_format'          => 'This does not match the format :format.',
    'different'            => 'This and :other must be different.',
    'digits'               => 'This must be :digits digits.',
    'digits_between'       => 'This must be between :min and :max digits.',
    'dimensions'           => 'This has invalid image dimensions.',
    'distinct'             => 'This has a duplicate value.',
    'email'                => 'This must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'This must be a file.',
    'filled'               => 'This must have a value.',
    'gt'                   => [
        'numeric' => 'This must be greater than :value.',
        'file'    => 'This must be greater than :value kilobytes.',
        'string'  => 'This must be greater than :value characters.',
        'array'   => 'This must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'This must be greater than or equal :value.',
        'file'    => 'This must be greater than or equal :value kilobytes.',
        'string'  => 'This must be greater than or equal :value characters.',
        'array'   => 'This must have :value items or more.',
    ],
    'image'                => 'This must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'This does not exist in :other.',
    'integer'              => 'This must be an integer.',
    'ip'                   => 'This must be a valid IP address.',
    'ipv4'                 => 'This must be a valid IPv4 address.',
    'ipv6'                 => 'This must be a valid IPv6 address.',
    'json'                 => 'This must be a valid JSON string.',
    'lt'                   => [
        'numeric' => 'This must be less than :value.',
        'file'    => 'This must be less than :value kilobytes.',
        'string'  => 'This must be less than :value characters.',
        'array'   => 'This must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'This must be less than or equal :value.',
        'file'    => 'This must be less than or equal :value kilobytes.',
        'string'  => 'This must be less than or equal :value characters.',
        'array'   => 'This must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => 'This may not be greater than :max.',
        'file'    => 'This may not be greater than :max kilobytes.',
        'string'  => 'This may not be greater than :max characters.',
        'array'   => 'This may not have more than :max items.',
    ],
    'mimes'                => 'This must be a file of type: :values.',
    'mimetypes'            => 'This must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'This must be at least :min.',
        'file'    => 'This must be at least :min kilobytes.',
        'string'  => 'This must be at least :min characters.',
        'array'   => 'This must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'not_regex'            => 'This format is invalid.',
    'numeric'              => 'This must be a number.',
    'present'              => 'This must be present.',
    'regex'                => 'This format is invalid.',
    'required'             => 'Whoops! You’ve missed a field. Please fill this in.',
    'required_if'          => 'This is required when :other is :value.',
    'required_unless'      => 'This is required unless :other is in :values.',
    'required_with'        => 'This is required when :values is present.',
    'required_with_all'    => 'This is required when :values is present.',
    'required_without'     => 'This is required when :values is not present.',
    'required_without_all' => 'This is required when none of :values are present.',
    'same'                 => 'This and :other must match.',
    'size'                 => [
        'numeric' => 'This must be :size.',
        'file'    => 'This must be :size kilobytes.',
        'string'  => 'This must be :size characters.',
        'array'   => 'This must contain :size items.',
    ],
    'string'               => 'This must be a string.',
    'timezone'             => 'This must be a valid zone.',
    'unique'               => 'This has already been taken.',
    'uploaded'             => 'This failed to upload.',
    'url'                  => 'This format is invalid.',

    'slug'                 => 'This must be a web-safe URL slug (lowercase alpha-numeric characters and hyphens only).',

    'no_trailing_slash'    => 'This must not end with a forward slash.',
    'is_on_site'           => 'This must be a URL on the current site - it must match both the scheme, and full domain / subdomain.',

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
        'g-recaptcha-response' => [
            'required' => 'Please verify that you are not a robot.',
            'captcha' => 'Captcha error! try again later or contact site admin.',
        ],
        'captcha' => [
            'required' => 'Please verify that you are not a robot.',
            'captcha' => 'Captcha error! try again later or contact site admin.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
