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

    'accepted'             => ':attribute を承認してください。',
    'active_url'           => ':attribute は有効なURLではありません。',
    'after'                => ':attribute には、:date 以降の日付を指定してください。',
    'after_or_equal'       => ':attribute には、:date 以降の日付を指定してください。',
    'alpha'                => ':attribute には、アルファベッドのみ使用できます。',
    'alpha_dash'           => ':attribute には、英数字とダッシュ(-)及び下線(_)が使用できます。',
    'alpha_num'            => ':attribute には、英数字が使用できます。',
    'array'                => ':attribute には、配列を指定してください。',
    'before'               => ':attribute には、:date 以前の日付を指定してください。',
    'before_or_equal'      => ':attribute には、:date 以前の日付を指定してください。',
    'between'              => [
        'numeric' => ':attribute には、:min から :max までの数字を指定してください。',
        'file'    => ':attribute には、:min KB から :max KB までのサイズのファイルを指定してください。',
        'string'  => ':attribute には、:min 文字から :max 文字までの文字列を指定してください。',
        'array'   => ':attribute には、:min 個から :max 個までのアイテムを指定してください。',
    ],
    'boolean'              => ':attribute には、真偽値を指定してください。',
    'confirmed'            => ':attribute と確認フィールドとが一致していません。',
    'date'                 => ':attribute は有効な日付ではありません。',
    'date_format'          => ':attribute は :format 書式と一致していません。',
    'different'            => ':attribute と :other には、異なる値を指定してください。',
    'digits'               => ':attribute には、:digits 桁の数字を指定してください。',
    'digits_between'       => ':attribute には、:min 桁から :max 桁までの数字を指定してください。',
    'dimensions'           => ':attribute の画像サイズが無効です。',
    'distinct'             => ':attribute に重複した値があります。',
    'email'                => ':attribute には、有効なメールアドレスを指定してください。',
    'exists'               => '選択された :attribute は有効ではありません。',
    'file'                 => ':attribute にはファイルを指定してください。',
    'filled'               => ':attribute には値を指定してください。',
    'gt'                   => [
        'numeric' => ':attribute には、:value より大きな数字を指定してください。',
        'file'    => ':attribute には、:value KB より大きなファイルを指定してください。',
        'string'  => ':attribute には、:value 文字より長い文字列を指定してください。',
        'array'   => ':attribute には、:value 個より多くのアイテムを指定してください。',
    ],
    'gte'                  => [
        'numeric' => ':attribute には、:value 以上の数字を指定してください。',
        'file'    => ':attribute には、:value KB 以上のファイルを指定してください。',
        'string'  => ':attribute には、:value 文字以上の文字列を指定してください。',
        'array'   => ':attribute には、:value 個以上のアイテムを指定してください。',
    ],
    'image'                => ':attribute には画像ファイルを指定してください。',
    'in'                   => '選択された :attribute は有効ではありません。',
    'in_array'             => ':attribute は :other に存在しません。',
    'integer'              => ':attribute には、整数を指定してください。',
    'ip'                   => ':attribute には、有効なIPアドレスを指定してください。',
    'ipv4'                 => ':attribute には、有効なIPv4アドレスを指定してください。',
    'ipv6'                 => ':attribute には、有効なIPv6アドレスを指定してください。',
    'json'                 => ':attribute には、有効なJSON文字列を指定してください。',
    'lt'                   => [
        'numeric' => ':attribute には、:value より小さな数字を指定してください。',
        'file'    => ':attribute には、:value KB より小さなファイルを指定してください。',
        'string'  => ':attribute には、:value 文字より短い文字列を指定してください。',
        'array'   => ':attribute には、:value 個より少ないアイテムを指定してください。',
    ],
    'lte'                  => [
        'numeric' => ':attribute には、:value 以下の数字を指定してください。',
        'file'    => ':attribute には、:value KB 以下のファイルを指定してください。',
        'string'  => ':attribute には、:value 文字以下の文字列を指定してください。',
        'array'   => ':attribute には、:value 個以下のアイテムを指定してください。',
    ],
    'max'                  => [
        'numeric' => ':attribute には、:max 以下の数字を指定してください。',
        'file'    => ':attribute には、:max KB 以下のファイルを指定してください。',
        'string'  => ':attribute には、:max 文字以下の文字列を指定してください。',
        'array'   => ':attribute には、:max 個以下のアイテムを指定してください。',
    ],
    'mimes'                => ':attribute には、:values タイプのファイルを指定してください。',
    'mimetypes'            => ':attribute には、:values タイプのファイルを指定してください。',
    'min'                  => [
        'numeric' => ':attribute には、:min 以上の数字を指定してください。',
        'file'    => ':attribute には、:min KB 以上のファイルを指定してください。',
        'string'  => ':attribute には、:min 文字以上の文字列を指定してください。',
        'array'   => ':attribute には、:min 個以上のアイテムを指定してください。',
    ],
    'not_in'               => '選択された :attribute は有効ではありません。',
    'not_regex'            => ':attribute の形式が無効です。',
    'numeric'              => ':attribute には、数字を指定してください。',
    'password'             => 'パスワードが正しくありません。',
    'present'              => ':attribute が存在している必要があります。',
    'regex'                => ':attribute には、有効な形式を指定してください。',
    'required'             => ':attribute は必須です。',
    'required_if'          => ':other が :value である場合、:attribute を指定してください。',
    'required_unless'      => ':other が :values でない限り、:attribute を指定してください。',
    'required_with'        => ':values が指定されている場合、:attribute も指定してください。',
    'required_with_all'    => ':values が指定されている場合、:attribute も指定してください。',
    'required_without'     => ':values が指定されていない場合、:attribute を指定してください。',
    'required_without_all' => ':values のどれも指定されていない場合、:attribute を指定してください。',
    'same'                 => ':attribute と :other が一致する必要があります。',
    'size'                 => [
        'numeric' => ':attribute には、:size を指定してください。',
        'file'    => ':attribute には、:size KB のファイルを指定してください。',
        'string'  => ':attribute には、:size 文字の文字列を指定してください。',
        'array'   => ':attribute には、:size 個のアイテムを含めてください。',
    ],
    'starts_with'          => ':attribute は、:values のいずれかで始まる必要があります。',
    'string'               => ':attribute には、文字を指定してください。',
    'timezone'             => ':attribute には、有効なタイムゾーンを指定してください。',
    'unique'               => ':attribute の値は既に存在しています。',
    'uploaded'             => ':attribute のアップロードに失敗しました。',
    'url'                  => ':attribute には、有効なURLを指定してください。',
    'uuid'                 => ':attribute には、有効なUUIDを指定してください。',

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
