<?php return array (
  'app' => 
  array (
    'name' => 'Saft Capital',
    'env' => 'production',
    'debug' => true,
    'url' => 'https://tradernex.com',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'pt',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:yFAjPpG4GMQr0lzbgKKpHY6P8OLvxcLr02yfLa4qnf4=',
    'cipher' => 'AES-256-CBC',
    'maintenance' => 
    array (
      'driver' => 'file',
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\BroadcastServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
      27 => 'App\\Providers\\FortifyServiceProvider',
      28 => 'App\\Providers\\JetstreamServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'biapp' => 
  array (
    'countries' => 
    array (
      0 => 'Afghanistan',
      1 => 'Albania',
      2 => 'Algeria',
      3 => 'American Samoa',
      4 => 'Andorra',
      5 => 'Angola',
      6 => 'Anguilla',
      7 => 'Antarctica',
      8 => 'Antigua and Barbuda',
      9 => 'Argentina',
      10 => 'Armenia',
      11 => 'Aruba',
      12 => 'Australia',
      13 => 'Austria',
      14 => 'Azerbaijan',
      15 => 'Bahamas',
      16 => 'Bahrain',
      17 => 'Bangladesh',
      18 => 'Barbados',
      19 => 'Belarus',
      20 => 'Belgium',
      21 => 'Belize',
      22 => 'Benin',
      23 => 'Bermuda',
      24 => 'Bhutan',
      25 => 'Bolivia',
      26 => 'Bosnia and Herzegowina',
      27 => 'Botswana',
      28 => 'Bouvet Island',
      29 => 'Brazil',
      30 => 'British Indian Ocean Territory',
      31 => 'Brunei Darussalam',
      32 => 'Bulgaria',
      33 => 'Burkina Faso',
      34 => 'Burundi',
      35 => 'Cambodia',
      36 => 'Cameroon',
      37 => 'Canada',
      38 => 'Cape Verde',
      39 => 'Cayman Islands',
      40 => 'Central African Republic',
      41 => 'Chad',
      42 => 'Chile',
      43 => 'China',
      44 => 'Christmas Island',
      45 => 'Cocos (Keeling) Islands',
      46 => 'Colombia',
      47 => 'Comoros',
      48 => 'Congo',
      49 => 'Congo, the Democratic Republic of the',
      50 => 'Cook Islands',
      51 => 'Costa Rica',
      52 => 'Cote d\'Ivoire',
      53 => 'Croatia (Hrvatska)',
      54 => 'Cuba',
      55 => 'Cyprus',
      56 => 'Czech Republic',
      57 => 'Denmark',
      58 => 'Djibouti',
      59 => 'Dominica',
      60 => 'Dominican Republic',
      61 => 'East Timor',
      62 => 'Ecuador',
      63 => 'Egypt',
      64 => 'El Salvador',
      65 => 'Equatorial Guinea',
      66 => 'Eritrea',
      67 => 'Estonia',
      68 => 'Ethiopia',
      69 => 'Falkland Islands (Malvinas)',
      70 => 'Faroe Islands',
      71 => 'Fiji',
      72 => 'Finland',
      73 => 'France',
      74 => 'France Metropolitan',
      75 => 'French Guiana',
      76 => 'French Polynesia',
      77 => 'French Southern Territories',
      78 => 'Gabon',
      79 => 'Gambia',
      80 => 'Georgia',
      81 => 'Germany',
      82 => 'Ghana',
      83 => 'Gibraltar',
      84 => 'Greece',
      85 => 'Greenland',
      86 => 'Grenada',
      87 => 'Guadeloupe',
      88 => 'Guam',
      89 => 'Guatemala',
      90 => 'Guinea',
      91 => 'Guinea-Bissau',
      92 => 'Guyana',
      93 => 'Haiti',
      94 => 'Heard and Mc Donald Islands',
      95 => 'Holy See (Vatican City State)',
      96 => 'Honduras',
      97 => 'Hong Kong',
      98 => 'Hungary',
      99 => 'Iceland',
      100 => 'India',
      101 => 'Indonesia',
      102 => 'Iran (Islamic Republic of)',
      103 => 'Iraq',
      104 => 'Ireland',
      105 => 'Israel',
      106 => 'Italy',
      107 => 'Jamaica',
      108 => 'Japan',
      109 => 'Jordan',
      110 => 'Kazakhstan',
      111 => 'Kenya',
      112 => 'Kiribati',
      113 => 'Korea, Democratic People\'s Republic of',
      114 => 'Korea, Republic of',
      115 => 'Kuwait',
      116 => 'Kyrgyzstan',
      117 => 'Lao, People\'s Democratic Republic',
      118 => 'Latvia',
      119 => 'Lebanon',
      120 => 'Lesotho',
      121 => 'Liberia',
      122 => 'Libyan Arab Jamahiriya',
      123 => 'Liechtenstein',
      124 => 'Lithuania',
      125 => 'Luxembourg',
      126 => 'Macau',
      127 => 'Macedonia, The Former Yugoslav Republic of',
      128 => 'Madagascar',
      129 => 'Malawi',
      130 => 'Malaysia',
      131 => 'Maldives',
      132 => 'Mali',
      133 => 'Malta',
      134 => 'Marshall Islands',
      135 => 'Martinique',
      136 => 'Mauritania',
      137 => 'Mauritius',
      138 => 'Mayotte',
      139 => 'Mexico',
      140 => 'Micronesia, Federated States of',
      141 => 'Moldova, Republic of',
      142 => 'Monaco',
      143 => 'Mongolia',
      144 => 'Montserrat',
      145 => 'Morocco',
      146 => 'Mozambique',
      147 => 'Myanmar',
      148 => 'Namibia',
      149 => 'Nauru',
      150 => 'Nepal',
      151 => 'Netherlands',
      152 => 'Netherlands Antilles',
      153 => 'New Caledonia',
      154 => 'New Zealand',
      155 => 'Nicaragua',
      156 => 'Niger',
      157 => 'Nigeria',
      158 => 'Niue',
      159 => 'Norfolk Island',
      160 => 'Northern Mariana Islands',
      161 => 'Norway',
      162 => 'Oman',
      163 => 'Pakistan',
      164 => 'Palau',
      165 => 'Panama',
      166 => 'Papua New Guinea',
      167 => 'Paraguay',
      168 => 'Peru',
      169 => 'Philippines',
      170 => 'Pitcairn',
      171 => 'Poland',
      172 => 'Portugal',
      173 => 'Puerto Rico',
      174 => 'Qatar',
      175 => 'Reunion',
      176 => 'Romania',
      177 => 'Russian Federation',
      178 => 'Rwanda',
      179 => 'Saint Kitts and Nevis',
      180 => 'Saint Lucia',
      181 => 'Saint Vincent and the Grenadines',
      182 => 'Samoa',
      183 => 'San Marino',
      184 => 'Sao Tome and Principe',
      185 => 'Saudi Arabia',
      186 => 'Senegal',
      187 => 'Seychelles',
      188 => 'Sierra Leone',
      189 => 'Singapore',
      190 => 'Slovakia (Slovak Republic)',
      191 => 'Slovenia',
      192 => 'Solomon Islands',
      193 => 'Somalia',
      194 => 'South Africa',
      195 => 'South Georgia and the South Sandwich Islands',
      196 => 'Spain',
      197 => 'Sri Lanka',
      198 => 'St. Helena',
      199 => 'St. Pierre and Miquelon',
      200 => 'Sudan',
      201 => 'Suriname',
      202 => 'Svalbard and Jan Mayen Islands',
      203 => 'Swaziland',
      204 => 'Sweden',
      205 => 'Switzerland',
      206 => 'Syrian Arab Republic',
      207 => 'Taiwan, Province of China',
      208 => 'Tajikistan',
      209 => 'Tanzania, United Republic of',
      210 => 'Thailand',
      211 => 'Togo',
      212 => 'Tokelau',
      213 => 'Tonga',
      214 => 'Trinidad and Tobago',
      215 => 'Tunisia',
      216 => 'Turkey',
      217 => 'Turkmenistan',
      218 => 'Turks and Caicos Islands',
      219 => 'Tuvalu',
      220 => 'Uganda',
      221 => 'Ukraine',
      222 => 'United Arab Emirates',
      223 => 'United Kingdom',
      224 => 'United States',
      225 => 'United States Minor Outlying Islands',
      226 => 'Uruguay',
      227 => 'Uzbekistan',
      228 => 'Vanuatu',
      229 => 'Venezuela',
      230 => 'Vietnam',
      231 => 'Virgin Islands (British)',
      232 => 'Virgin Islands (U.S.)',
      233 => 'Wallis and Futuna Islands',
      234 => 'Western Sahara',
      235 => 'Yemen',
      236 => 'Yugoslavia',
      237 => 'Zambia',
      238 => 'Zimbabwe',
    ),
    'timezones' => 
    array (
      'Pacific/Midway' => '(UTC-11:00) Midway Island',
      'Pacific/Samoa' => '(UTC-11:00) Samoa',
      'Pacific/Honolulu' => '(UTC-10:00) Hawaii',
      'US/Alaska' => '(UTC-09:00) Alaska',
      'America/Los_Angeles' => '(UTC-08:00) Pacific Time (US &amp; Canada)',
      'America/Tijuana' => '(UTC-08:00) Tijuana',
      'US/Arizona' => '(UTC-07:00) Arizona',
      'America/Chihuahua' => '(UTC-07:00) La Paz',
      'America/Mazatlan' => '(UTC-07:00) Mazatlan',
      'US/Mountain' => '(UTC-07:00) Mountain Time (US &amp; Canada)',
      'America/Managua' => '(UTC-06:00) Central America',
      'US/Central' => '(UTC-06:00) Central Time (US &amp; Canada)',
      'America/Mexico_City' => '(UTC-06:00) Mexico City',
      'America/Monterrey' => '(UTC-06:00) Monterrey',
      'Canada/Saskatchewan' => '(UTC-06:00) Saskatchewan',
      'America/Bogota' => '(UTC-05:00) Quito',
      'US/Eastern' => '(UTC-05:00) Eastern Time (US &amp; Canada)',
      'US/East-Indiana' => '(UTC-05:00) Indiana (East)',
      'America/Lima' => '(UTC-05:00) Lima',
      'Canada/Atlantic' => '(UTC-04:00) Atlantic Time (Canada)',
      'America/Caracas' => '(UTC-04:30) Caracas',
      'America/La_Paz' => '(UTC-04:00) La Paz',
      'America/Santiago' => '(UTC-04:00) Santiago',
      'Canada/Newfoundland' => '(UTC-03:30) Newfoundland',
      'America/Sao_Paulo' => '(UTC-03:00) Brasilia',
      'America/Argentina/Buenos_Aires' => '(UTC-03:00) Georgetown',
      'America/Godthab' => '(UTC-03:00) Greenland',
      'America/Noronha' => '(UTC-02:00) Mid-Atlantic',
      'Atlantic/Azores' => '(UTC-01:00) Azores',
      'Atlantic/Cape_Verde' => '(UTC-01:00) Cape Verde Is.',
      'Africa/Casablanca' => '(UTC+00:00) Casablanca',
      'Europe/London' => '(UTC+00:00) London',
      'Etc/Greenwich' => '(UTC+00:00) Greenwich Mean Time : Dublin',
      'Europe/Lisbon' => '(UTC+00:00) Lisbon',
      'Africa/Monrovia' => '(UTC+00:00) Monrovia',
      'UTC' => '(UTC+00:00) UTC',
      'Europe/Amsterdam' => '(UTC+01:00) Amsterdam',
      'Europe/Belgrade' => '(UTC+01:00) Belgrade',
      'Europe/Berlin' => '(UTC+01:00) Bern',
      'Europe/Bratislava' => '(UTC+01:00) Bratislava',
      'Europe/Brussels' => '(UTC+01:00) Brussels',
      'Europe/Budapest' => '(UTC+01:00) Budapest',
      'Europe/Copenhagen' => '(UTC+01:00) Copenhagen',
      'Europe/Ljubljana' => '(UTC+01:00) Ljubljana',
      'Europe/Madrid' => '(UTC+01:00) Madrid',
      'Europe/Paris' => '(UTC+01:00) Paris',
      'Europe/Prague' => '(UTC+01:00) Prague',
      'Europe/Rome' => '(UTC+01:00) Rome',
      'Europe/Sarajevo' => '(UTC+01:00) Sarajevo',
      'Europe/Skopje' => '(UTC+01:00) Skopje',
      'Europe/Stockholm' => '(UTC+01:00) Stockholm',
      'Europe/Vienna' => '(UTC+01:00) Vienna',
      'Europe/Warsaw' => '(UTC+01:00) Warsaw',
      'Africa/Lagos' => '(UTC+01:00) West Central Africa',
      'Europe/Zagreb' => '(UTC+01:00) Zagreb',
      'Europe/Athens' => '(UTC+02:00) Athens',
      'Europe/Bucharest' => '(UTC+02:00) Bucharest',
      'Africa/Cairo' => '(UTC+02:00) Cairo',
      'Africa/Harare' => '(UTC+02:00) Harare',
      'Europe/Helsinki' => '(UTC+02:00) Kyiv',
      'Europe/Istanbul' => '(UTC+02:00) Istanbul',
      'Asia/Jerusalem' => '(UTC+02:00) Jerusalem',
      'Africa/Johannesburg' => '(UTC+02:00) Pretoria',
      'Europe/Riga' => '(UTC+02:00) Riga',
      'Europe/Sofia' => '(UTC+02:00) Sofia',
      'Europe/Tallinn' => '(UTC+02:00) Tallinn',
      'Europe/Vilnius' => '(UTC+02:00) Vilnius',
      'Asia/Baghdad' => '(UTC+03:00) Baghdad',
      'Asia/Kuwait' => '(UTC+03:00) Kuwait',
      'Europe/Minsk' => '(UTC+03:00) Minsk',
      'Africa/Nairobi' => '(UTC+03:00) Nairobi',
      'Asia/Riyadh' => '(UTC+03:00) Riyadh',
      'Europe/Volgograd' => '(UTC+03:00) Volgograd',
      'Asia/Tehran' => '(UTC+03:30) Tehran',
      'Asia/Muscat' => '(UTC+04:00) Muscat',
      'Asia/Baku' => '(UTC+04:00) Baku',
      'Europe/Moscow' => '(UTC+04:00) St. Petersburg',
      'Asia/Tbilisi' => '(UTC+04:00) Tbilisi',
      'Asia/Yerevan' => '(UTC+04:00) Yerevan',
      'Asia/Kabul' => '(UTC+04:30) Kabul',
      'Asia/Karachi' => '(UTC+05:00) Karachi',
      'Asia/Tashkent' => '(UTC+05:00) Tashkent',
      'Asia/Calcutta' => '(UTC+05:30) Sri Jayawardenepura',
      'Asia/Kolkata' => '(UTC+05:30) Kolkata',
      'Asia/Katmandu' => '(UTC+05:45) Kathmandu',
      'Asia/Almaty' => '(UTC+06:00) Almaty',
      'Asia/Dhaka' => '(UTC+06:00) Dhaka',
      'Asia/Yekaterinburg' => '(UTC+06:00) Ekaterinburg',
      'Asia/Rangoon' => '(UTC+06:30) Rangoon',
      'Asia/Bangkok' => '(UTC+07:00) Hanoi',
      'Asia/Jakarta' => '(UTC+07:00) Jakarta',
      'Asia/Novosibirsk' => '(UTC+07:00) Novosibirsk',
      'Asia/Hong_Kong' => '(UTC+08:00) Hong Kong',
      'Asia/Chongqing' => '(UTC+08:00) Chongqing',
      'Asia/Krasnoyarsk' => '(UTC+08:00) Krasnoyarsk',
      'Asia/Kuala_Lumpur' => '(UTC+08:00) Kuala Lumpur',
      'Australia/Perth' => '(UTC+08:00) Perth',
      'Asia/Singapore' => '(UTC+08:00) Singapore',
      'Asia/Taipei' => '(UTC+08:00) Taipei',
      'Asia/Ulan_Bator' => '(UTC+08:00) Ulaan Bataar',
      'Asia/Urumqi' => '(UTC+08:00) Urumqi',
      'Asia/Irkutsk' => '(UTC+09:00) Irkutsk',
      'Asia/Tokyo' => '(UTC+09:00) Tokyo',
      'Asia/Seoul' => '(UTC+09:00) Seoul',
      'Australia/Adelaide' => '(UTC+09:30) Adelaide',
      'Australia/Darwin' => '(UTC+09:30) Darwin',
      'Australia/Brisbane' => '(UTC+10:00) Brisbane',
      'Australia/Canberra' => '(UTC+10:00) Canberra',
      'Pacific/Guam' => '(UTC+10:00) Guam',
      'Australia/Hobart' => '(UTC+10:00) Hobart',
      'Australia/Melbourne' => '(UTC+10:00) Melbourne',
      'Pacific/Port_Moresby' => '(UTC+10:00) Port Moresby',
      'Australia/Sydney' => '(UTC+10:00) Sydney',
      'Asia/Yakutsk' => '(UTC+10:00) Yakutsk',
      'Asia/Vladivostok' => '(UTC+11:00) Vladivostok',
      'Pacific/Auckland' => '(UTC+12:00) Wellington',
      'Pacific/Fiji' => '(UTC+12:00) Marshall Is.',
      'Pacific/Kwajalein' => '(UTC+12:00) International Date Line West',
      'Asia/Kamchatka' => '(UTC+12:00) Kamchatka',
      'Asia/Magadan' => '(UTC+12:00) Solomon Is.',
      'Pacific/Tongatapu' => '(UTC+13:00) Nuku\'alofa',
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '5f00a76e6bd9157560c3',
        'secret' => '768a8017ca3d2e0b640d',
        'app_id' => '1679914',
        'options' => 
        array (
          'host' => 'api-sa1.pusher.com',
          'port' => 443,
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
          'cluster' => 'sa1',
          'authEndpoint' => '/user/pusher/auth',
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'array',
    'stores' => 
    array (
      'request' => 
      array (
        'driver' => 'array',
      ),
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/home/silviooosilva/Downloads/ZIP/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'client' => 'predis',
        'default' => 
        array (
          'host' => '127.0.0.1',
          'password' => NULL,
          'port' => '6379',
          'database' => 0,
          'read_write_timeout' => 60,
        ),
        'cache' => 
        array (
          'host' => '127.0.0.1',
          'password' => NULL,
          'port' => '6379',
          'database' => 1,
        ),
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'saft_capital_cache_',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'custom' => 
  array (
    'custom' => 
    array (
      'mainLayoutType' => 'vertical',
      'theme' => 'light',
      'themeuser' => 'dark',
      'sidebarCollapsed' => true,
      'navbarColor' => '',
      'horizontalMenuType' => 'floating',
      'verticalMenuNavbarType' => 'sticky',
      'footerType' => 'sticky',
      'layoutWidth' => 'full',
      'showMenu' => true,
      'bodyClass' => '',
      'pageHeader' => false,
      'contentLayout' => 'default',
      'defaultLanguage' => 'en',
      'blankPage' => false,
      'direction' => 'ltr',
    ),
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'tradernex',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'tradernex',
        'username' => 'root',
        'password' => '@123ROOT',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'tradernex',
        'username' => 'root',
        'password' => '@123ROOT',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'tradernex',
        'username' => 'root',
        'password' => '@123ROOT',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'saft_capital_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
      'starts_with' => false,
    ),
    'index_column' => 'DT_RowIndex',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
      'resource' => 'Yajra\\DataTables\\ApiResourceDataTable',
    ),
    'builders' => 
    array (
    ),
    'nulls_last_sql' => ':column :direction NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
    'callback' => 
    array (
      0 => '$',
      1 => '$.',
      2 => 'function',
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/home/silviooosilva/Downloads/ZIP/storage/app',
        'throw' => false,
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/home/silviooosilva/Downloads/ZIP/storage/app/public',
        'url' => 'https://tradernex.com/storage',
        'visibility' => 'public',
        'throw' => false,
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
      ),
    ),
    'links' => 
    array (
      '/home/silviooosilva/Downloads/ZIP/public/storage' => '/home/silviooosilva/Downloads/ZIP/storage/app/public',
      '/home/silviooosilva/Downloads/ZIP/public/assets/images/cryptoCurrency' => '/home/silviooosilva/Downloads/ZIP/storage/app/cryptoCurrency',
    ),
  ),
  'fortify-options' => 
  array (
    'two-factor-authentication' => 
    array (
      'confirmPassword' => true,
    ),
  ),
  'fortify' => 
  array (
    'guard' => 'web',
    'middleware' => 
    array (
      0 => 'web',
    ),
    'auth_middleware' => 'auth',
    'passwords' => 'users',
    'username' => 'email',
    'email' => 'email',
    'views' => true,
    'home' => 'app',
    'prefix' => '',
    'domain' => NULL,
    'lowercase_usernames' => false,
    'limiters' => 
    array (
      'login' => 'login',
      'two-factor' => 'two-factor',
    ),
    'paths' => 
    array (
      'login' => NULL,
      'logout' => NULL,
      'password.request' => NULL,
      'password.reset' => NULL,
      'password.email' => NULL,
      'password.update' => NULL,
      'register' => NULL,
      'verification.notice' => NULL,
      'verification.verify' => NULL,
      'verification.send' => NULL,
      'user-profile-information.update' => NULL,
      'user-password.update' => NULL,
      'password.confirm' => NULL,
      'password.confirmation' => NULL,
      'two-factor.login' => NULL,
      'two-factor.enable' => NULL,
      'two-factor.confirm' => NULL,
      'two-factor.disable' => NULL,
      'two-factor.qr-code' => NULL,
      'two-factor.secret-key' => NULL,
      'two-factor.recovery-codes' => NULL,
    ),
    'redirects' => 
    array (
      'login' => NULL,
      'logout' => NULL,
      'password-confirmation' => NULL,
      'register' => NULL,
      'email-verification' => NULL,
      'password-reset' => NULL,
    ),
    'features' => 
    array (
      0 => 'registration',
      1 => 'reset-passwords',
      2 => 'email-verification',
      3 => 'update-profile-information',
      4 => 'update-passwords',
      5 => 'two-factor-authentication',
    ),
    'admin' => 'admin/dashboard',
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'javascript' => 
  array (
    'bind_js_vars_to_this_view' => 'panels/footer',
    'js_namespace' => 'window',
  ),
  'jetstream' => 
  array (
    'stack' => 'livewire',
    'middleware' => 
    array (
      0 => 'web',
    ),
    'features' => 
    array (
      0 => 'terms',
      1 => 'profile-photos',
      2 => 'api',
    ),
    'profile_photo_disk' => 'public',
  ),
  'laravel-pix' => 
  array (
    'transaction_currency_code' => 986,
    'country_code' => 'BR',
    'gui' => 'br.gov.bcb.pix',
    'country_phone_prefix' => '+55',
    'qr_code_size' => 200,
    'create_qr_code_route_middleware' => '',
    'psp' => 
    array (
      'default' => 
      array (
        'base_url' => NULL,
        'oauth_token_url' => false,
        'oauth_bearer_token' => NULL,
        'ssl_certificate' => NULL,
        'client_secret' => 'dde36138-0bbd-430f-9ec2-c91aa56e71d4',
        'client_id' => '5ea251a8-263b-4fa6-9054-ab332e0202fb',
        'authentication_class' => 'Junges\\Pix\\Api\\Contracts\\AuthenticatesPSPs',
        'resolve_endpoints_using' => 'Junges\\Pix\\Support\\Endpoints',
      ),
    ),
  ),
  'livechat' => 
  array (
    'name' => 'Saft Capital',
    'storage_disk_name' => 'public',
    'routes' => 
    array (
      'prefix' => 'user/livechat',
      'middleware' => 
      array (
        0 => 'web',
        1 => 'auth',
      ),
      'namespace' => 'App\\Http\\Controllers\\Extensions\\Livechat',
    ),
    'api_routes' => 
    array (
      'prefix' => 'user/livechat/api',
      'middleware' => 
      array (
        0 => 'api',
      ),
      'namespace' => 'App\\Http\\Controllers\\Extensions\\Livechat\\Api',
    ),
    'pusher' => 
    array (
      'key' => '5f00a76e6bd9157560c3',
      'secret' => '768a8017ca3d2e0b640d',
      'app_id' => '1679914',
      'options' => 
      array (
        'cluster' => 'sa1',
        'encrypted' => false,
      ),
    ),
    'user_avatar' => 
    array (
      'folder' => 'assets/images/profile',
      'default' => 'market/notification.png',
    ),
    'gravatar' => 
    array (
      'enabled' => false,
      'image_size' => 200,
      'imageset' => 'identicon',
    ),
    'attachments' => 
    array (
      'folder' => 'attachments',
      'download_route_name' => 'attachments.download',
      'allowed_images' => 
      array (
        0 => 'png',
        1 => 'jpg',
        2 => 'jpeg',
        3 => 'gif',
      ),
      'allowed_files' => 
      array (
        0 => 'zip',
        1 => 'rar',
        2 => 'txt',
      ),
      'max_upload_size' => 150,
    ),
    'colors' => 
    array (
      0 => '#2180f3',
      1 => '#2196F3',
      2 => '#00BCD4',
      3 => '#3F51B5',
      4 => '#673AB7',
      5 => '#4CAF50',
      6 => '#FFC107',
      7 => '#FF9800',
      8 => '#ff2522',
      9 => '#9C27B0',
    ),
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Http\\Livewire',
    'view_path' => '/home/silviooosilva/Downloads/ZIP/resources/views/livewire',
    'layout' => 'layouts.user',
    'asset_url' => NULL,
    'app_url' => NULL,
    'middleware_group' => 'web',
    'temporary_file_upload' => 
    array (
      'disk' => NULL,
      'rules' => NULL,
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
    ),
    'manifest_path' => NULL,
    'back_button_cache' => false,
    'render_on_redirect' => false,
  ),
  'livewire-tables' => 
  array (
    'theme' => 'tailwind',
  ),
  'log-viewer' => 
  array (
    'enabled' => true,
    'route_domain' => NULL,
    'route_path' => 'admin/log-viewer',
    'back_to_system_url' => 'https://tradernex.com/admin/dashboard',
    'back_to_system_label' => NULL,
    'timezone' => NULL,
    'middleware' => 
    array (
      0 => 'web',
      1 => 'auth',
      2 => 'role:admin',
    ),
    'api_middleware' => 
    array (
      0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
      1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
    ),
    'hosts' => 
    array (
      'local' => 
      array (
        'name' => 'Production',
      ),
    ),
    'include_files' => 
    array (
      0 => '*.log',
      1 => '**/*.log',
    ),
    'exclude_files' => 
    array (
    ),
    'shorter_stack_trace_excludes' => 
    array (
      0 => '/vendor/symfony/',
      1 => '/vendor/laravel/framework/',
      2 => '/vendor/barryvdh/laravel-debugbar/',
    ),
    'patterns' => 
    array (
      'laravel' => 
      array (
        'log_matching_regex' => '/^\\[(\\d{4}-\\d{2}-\\d{2}[T ]\\d{2}:\\d{2}:\\d{2}\\.?(\\d{6}([\\+-]\\d\\d:\\d\\d)?)?)\\].*/',
        'log_parsing_regex' => '/^\\[(\\d{4}-\\d{2}-\\d{2}[T ]\\d{2}:\\d{2}:\\d{2}\\.?(\\d{6}([\\+-]\\d\\d:\\d\\d)?)?)\\](.*?(\\w+)\\.|.*?)(debug|info|notice|warning|error|critical|alert|emergency|processing|processed|failed)?: (.*?)( in [\\/].*?:[0-9]+)?$/is',
      ),
    ),
    'cache_driver' => NULL,
    'lazy_scan_chunk_size_in_mb' => 50,
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => 'null',
      'trace' => false,
    ),
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/home/silviooosilva/Downloads/ZIP/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/home/silviooosilva/Downloads/ZIP/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
          'connectionString' => 'tls://:',
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/home/silviooosilva/Downloads/ZIP/storage/logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.gmail.com',
        'port' => '465',
        'encryption' => 'ssl',
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'local_domain' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => NULL,
      'name' => '',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/home/silviooosilva/Downloads/ZIP/resources/views/vendor/mail',
      ),
    ),
  ),
  'onesignal' => 
  array (
    'app_id' => '4c89021e-18f9-4b81-9374-499883ecfcff',
    'rest_api_key' => 'Yzc1ZjJjZTYtMjk2OC00MmIxLWE2MzUtYjAwZGI3M2RhMjhj',
    'user_auth_key' => NULL,
    'guzzle_client_timeout' => 0,
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'tradernex.com',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'token_prefix' => '',
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'scramble' => 
  array (
    'api_path' => 'api',
    'api_domain' => NULL,
    'info' => 
    array (
      'version' => '1.0.0',
      'description' => '',
    ),
    'servers' => NULL,
    'middleware' => 
    array (
      0 => 'api',
    ),
    'extensions' => 
    array (
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
      'scheme' => 'https',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'database',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/home/silviooosilva/Downloads/ZIP/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'saft_capital_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'template' => 
  array (
    'access' => 
    array (
      'user' => 
      array (
        'registration' => true,
      ),
    ),
    'locale' => 
    array (
      'status' => false,
      'languages' => 
      array (
        'ar' => 
        array (
          'name' => 'Arabic',
          'rtl' => true,
        ),
        'en' => 
        array (
          'name' => 'English',
          'rtl' => false,
        ),
        'es' => 
        array (
          'name' => 'Spanish',
          'rtl' => false,
        ),
        'it' => 
        array (
          'name' => 'Italian',
          'rtl' => false,
        ),
      ),
    ),
    'testing' => false,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/home/silviooosilva/Downloads/ZIP/resources/views',
    ),
    'compiled' => '/home/silviooosilva/Downloads/ZIP/storage/framework/views',
  ),
  'webpush' => 
  array (
    'vapid' => 
    array (
      'subject' => NULL,
      'public_key' => NULL,
      'private_key' => NULL,
      'pem_file' => NULL,
    ),
    'model' => 'NotificationChannels\\WebPush\\PushSubscription',
    'table_name' => 'push_subscriptions',
    'database_connection' => 'mysql',
    'client_options' => 
    array (
    ),
    'gcm' => 
    array (
      'key' => NULL,
      'sender_id' => NULL,
    ),
  ),
  'migrations-generator' => 
  array (
    'migration_template_path' => '/home/silviooosilva/Downloads/ZIP/vendor/kitloong/laravel-migrations-generator/config/../stubs/migration.generate.stub',
    'migration_anonymous_template_path' => '/home/silviooosilva/Downloads/ZIP/vendor/kitloong/laravel-migrations-generator/config/../stubs/migration.generate.anonymous.stub',
    'migration_target_path' => '/home/silviooosilva/Downloads/ZIP/database/migrations',
    'filename_pattern' => 
    array (
      'table' => '[datetime]_create_[name]_table.php',
      'view' => '[datetime]_create_[name]_view.php',
      'procedure' => '[datetime]_create_[name]_proc.php',
      'foreign_key' => '[datetime]_add_foreign_keys_to_[name]_table.php',
    ),
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'strict_null_comparison' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
        'output_encoding' => '',
        'test_auto_detect' => true,
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'ignore_empty' => false,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => NULL,
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
      'db' => 
      array (
        'connection' => NULL,
      ),
    ),
    'temporary_files' => 
    array (
      'local_path' => '/home/silviooosilva/Downloads/ZIP/storage/framework/cache/laravel-excel',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
      'force_resync_remote' => NULL,
    ),
  ),
  'flare' => 
  array (
    'key' => NULL,
    'flare_middleware' => 
    array (
      0 => 'Spatie\\FlareClient\\FlareMiddleware\\RemoveRequestIp',
      1 => 'Spatie\\FlareClient\\FlareMiddleware\\AddGitInformation',
      2 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddNotifierName',
      3 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddEnvironmentInformation',
      4 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionInformation',
      5 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddDumps',
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddLogs' => 
      array (
        'maximum_number_of_collected_logs' => 200,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddQueries' => 
      array (
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddJobs' => 
      array (
        'max_chained_job_reporting_depth' => 5,
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestBodyFields' => 
      array (
        'censor_fields' => 
        array (
          0 => 'password',
          1 => 'password_confirmation',
        ),
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestHeaders' => 
      array (
        'headers' => 
        array (
          0 => 'API-KEY',
        ),
      ),
    ),
    'send_logs_as_events' => true,
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'auto',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
    array (
      0 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\BadMethodCallSolutionProvider',
      1 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\MergeConflictSolutionProvider',
      2 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\UndefinedPropertySolutionProvider',
      3 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\IncorrectValetDbCredentialsSolutionProvider',
      4 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingAppKeySolutionProvider',
      5 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\DefaultDbNameSolutionProvider',
      6 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\TableNotFoundSolutionProvider',
      7 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingImportSolutionProvider',
      8 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\InvalidRouteActionSolutionProvider',
      9 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\ViewNotFoundSolutionProvider',
      10 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\RunningLaravelDuskInProductionProvider',
      11 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingColumnSolutionProvider',
      12 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownValidationSolutionProvider',
      13 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingMixManifestSolutionProvider',
      14 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingViteManifestSolutionProvider',
      15 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingLivewireComponentSolutionProvider',
      16 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UndefinedViewVariableSolutionProvider',
      17 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\GenericLaravelExceptionSolutionProvider',
    ),
    'ignored_solution_providers' => 
    array (
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '/home/silviooosilva/Downloads/ZIP',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
    'settings_file_path' => '',
    'recorders' => 
    array (
      0 => 'Spatie\\LaravelIgnition\\Recorders\\DumpRecorder\\DumpRecorder',
      1 => 'Spatie\\LaravelIgnition\\Recorders\\JobRecorder\\JobRecorder',
      2 => 'Spatie\\LaravelIgnition\\Recorders\\LogRecorder\\LogRecorder',
      3 => 'Spatie\\LaravelIgnition\\Recorders\\QueryRecorder\\QueryRecorder',
    ),
  ),
  'sluggable' => 
  array (
    'source' => NULL,
    'maxLength' => NULL,
    'maxLengthKeepWords' => true,
    'method' => NULL,
    'separator' => '-',
    'unique' => true,
    'uniqueSuffix' => NULL,
    'firstUniqueSuffix' => 2,
    'includeTrashed' => false,
    'reserved' => NULL,
    'onUpdate' => false,
    'slugEngineOptions' => 
    array (
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'mollie' => 
  array (
    'key' => 'test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
