<?php
class C7GeoKit
{

    public $states = array(
        'AL' => 'Alabama',
        'AK' => 'Alaska',
        'AZ' => 'Arizona',
        'AR' => 'Arkansas',
        'CA' => 'California',
        'CO' => 'Colorado',
        'CT' => 'Connecticut',
        'DE' => 'Delaware',
        'DC' => 'District of Columbia',
        'FL' => 'Florida',
        'GA' => 'Georgia',
        'HI' => 'Hawaii',
        'ID' => 'Idaho',
        'IL' => 'Illinois',
        'IN' => 'Indiana',
        'IA' => 'Iowa',
        'KS' => 'Kansas',
        'KY' => 'Kentucky',
        'LA' => 'Louisiana',
        'ME' => 'Maine',
        'MD' => 'Maryland',
        'MA' => 'Massachusetts',
        'MI' => 'Michigan',
        'MN' => 'Minnesota',
        'MS' => 'Mississippi',
        'MO' => 'Missouri',
        'MT' => 'Montana',
        'NE' => 'Nebraska',
        'NV' => 'Nevada',
        'NH' => 'New Hampshire',
        'NJ' => 'New Jersey',
        'NM' => 'New Mexico',
        'NY' => 'New York',
        'NC' => 'North Carolina',
        'ND' => 'North Dakota',
        'OH' => 'Ohio',
        'OK' => 'Oklahoma',
        'OR' => 'Oregon',
        'PA' => 'Pennsylvania',
        'RI' => 'Rhode Island',
        'SC' => 'South Carolina',
        'SD' => 'South Dakota',
        'TN' => 'Tennessee',
        'TX' => 'Texas',
        'UT' => 'Utah',
        'VT' => 'Vermont',
        'VA' => 'Virginia',
        'WA' => 'Washington',
        'WV' => 'West Virginia',
        'WI' => 'Wisconsin',
        'WY' => 'Wyoming',
    );

    public $stateCapitals = array(
        // TODO Add coords for these
        'AL' => 'Montgomery',
        'AK' => 'Juneau',
        'AZ' => 'Phoenix',
        'AR' => 'Little Rock',
        'CA' => 'Sacramento',
        'CO' => 'Denver',
        'CT' => 'Hartford',
        'DE' => 'Dover',
        'DC' => 'Washington D.C.',
        'FL' => 'Tallahassee',
        'GA' => 'Atlanta',
        'HI' => 'Honolulu',
        'ID' => 'Boise',
        'IL' => 'Springfield',
        'IN' => 'Indianapolis',
        'IA' => 'Des Moines',
        'KS' => 'Topeka',
        'KY' => 'Frankfort',
        'LA' => 'Baton Rouge',
        'ME' => 'Augusta',
        'MD' => 'Annapolis',
        'MA' => 'Boston',
        'MI' => 'Lansing',
        'MN' => 'St. Paul',
        'MS' => 'Jackson',
        'MO' => 'Jefferson City',
        'MT' => 'Helena',
        'NE' => 'Lincoln',
        'NV' => 'Carson City',
        'NH' => 'Concord',
        'NJ' => 'Trenton',
        'NM' => 'Santa Fe',
        'NY' => 'Albany',
        'NC' => 'Raleigh',
        'ND' => 'Bismarck',
        'OH' => 'Columbus',
        'OK' => 'Oklahoma City',
        'OR' => 'Salem',
        'PA' => 'Harrisburg',
        'RI' => 'Providence',
        'SC' => 'Columbia',
        'SD' => 'Pierre',
        'TN' => 'Nashville',
        'TX' => 'Austin',
        'UT' => 'Salt Lake City',
        'VT' => 'Montpelier',
        'VA' => 'Richmond',
        'WA' => 'Olympia',
        'WV' => 'Charleston',
        'WI' => 'Madison',
        'WY' => 'Cheyenne',
    );

    public $stateCoordinates = array(
        'AL' => array('lat' => 32.6010112, 'lng' => -86.6807365),
        'AK' => array('lat' => 61.3025006, 'lng' => -158.7750198),
        'AZ' => array('lat' => 34.1682185, 'lng' => -111.930907),
        'AR' => array('lat' => 34.7519275, 'lng' => -92.1313784),
        'CA' => array('lat' => 37.2718745, 'lng' => -119.2704153),
        'CO' => array('lat' => 38.9979339, 'lng' => -105.550567),
        'CT' => array('lat' => 41.5187835, 'lng' => -72.757507),
        'DE' => array('lat' => 39.145251,  'lng' => -75.4189206),
        'DC' => array('lat' => 38.8993487, 'lng' => -77.0145666),
        'FL' => array('lat' => 27.9757279, 'lng' => -83.8330166),
        'GA' => array('lat' => 32.6781248, 'lng' => -83.2229757),
        'HI' => array('lat' => 20.46,      'lng' => -157.505),
        'ID' => array('lat' => 45.4945756, 'lng' => -114.1424303),
        'IL' => array('lat' => 39.739318,  'lng' => -89.504139),
        'IN' => array('lat' => 39.7662195, 'lng' => -86.441277),
        'IA' => array('lat' => 41.9383166, 'lng' => -93.389798),
        'KS' => array('lat' => 38.4987789, 'lng' => -98.3200779),
        'KY' => array('lat' => 37.8222935, 'lng' => -85.7682399),
        'LA' => array('lat' => 30.9733766, 'lng' => -91.4299097),
        'ME' => array('lat' => 45.2185133, 'lng' => -69.0148656),
        'MD' => array('lat' => 38.8063524, 'lng' => -77.2684162),
        'MA' => array('lat' => 42.0629398, 'lng' => -71.718067),
        'MI' => array('lat' => 44.9435598, 'lng' => -86.4158049),
        'MN' => array('lat' => 46.4418595, 'lng' => -93.3655146),
        'MS' => array('lat' => 32.5851062, 'lng' => -89.8772196),
        'MO' => array('lat' => 38.3046615, 'lng' => -92.437099),
        'MT' => array('lat' => 46.6797995, 'lng' => -110.044783),
        'NE' => array('lat' => 41.5008195, 'lng' => -99.680902),
        'NV' => array('lat' => 38.502032,  'lng' => -117.0230604),
        'NH' => array('lat' => 44.0012306, 'lng' => -71.5799231),
        'NJ' => array('lat' => 40.1430058, 'lng' => -74.7311156),
        'NM' => array('lat' => 34.1662325, 'lng' => -106.0260685),
        'NY' => array('lat' => 40.7056258, 'lng' => -73.97968),
        'NC' => array('lat' => 35.2145629, 'lng' => -79.8912675),
        'ND' => array('lat' => 47.4678819, 'lng' => -100.3022655),
        'OH' => array('lat' => 40.1903624, 'lng' => -82.6692525),
        'OK' => array('lat' => 35.3097654, 'lng' => -98.7165585),
        'OR' => array('lat' => 44.1419049, 'lng' => -120.5380993),
        'PA' => array('lat' => 40.9945928, 'lng' => -77.6046984),
        'RI' => array('lat' => 41.5827282, 'lng' => -71.5064508),
        'SC' => array('lat' => 33.62505,   'lng' => -80.9470381),
        'SD' => array('lat' => 44.2126995, 'lng' => -100.2471641),
        'TN' => array('lat' => 35.830521,  'lng' => -85.9785989),
        'TX' => array('lat' => 31.1693363, 'lng' => -100.0768425),
        'UT' => array('lat' => 39.4997605, 'lng' => -111.547028),
        'VT' => array('lat' => 43.8717545, 'lng' => -72.4477828),
        'VA' => array('lat' => 38.0033855, 'lng' => -79.4587861),
        'WA' => array('lat' => 38.8993487, 'lng' => -77.0145665),
        'WV' => array('lat' => 38.9201705, 'lng' => -80.1816905),
        'WI' => array('lat' => 44.7862968, 'lng' => -89.8267049),
        'WY' => array('lat' => 43.000325, 'lng' => -107.5545669),
    );

    public $stateBirds = array(
        'AL' => 'Yellowhammer',
        'AK' => 'Willow Ptarmigan',
        'AZ' => 'Cactus Wren',
        'AR' => 'Mockingbird',
        'CA' => 'California Valley Quail',
        'CO' => 'Lark Bunting',
        'CT' => 'Robin',
        'DE' => 'Blue Hen Chicken',
        'FL' => 'Mockingbird',
        'GA' => 'Brown Thrasher',
        'HI' => 'Nene',
        'ID' => 'Mountain Bluebird',
        'IL' => 'Cardinal',
        'IN' => 'Cardinal',
        'IA' => 'Eastern Goldfinch',
        'KS' => 'Western Meadowlark',
        'KY' => 'Cardinal',
        'LA' => 'Eastern Brown Pelican',
        'ME' => 'Chickadee',
        'MD' => 'Baltimore Oriole',
        'MA' => 'Chickadee',
        'MI' => 'Robin',
        'MN' => 'Common Loon',
        'MS' => 'Mockingbird',
        'MO' => 'Bluebird',
        'MT' => 'Western Meadowlark',
        'NE' => 'Western Meadowlark',
        'NV' => 'Mountain Bluebird',
        'NH' => 'Purple Finch',
        'NJ' => 'Eastern Goldfinch',
        'NM' => 'Roadrunner',
        'NY' => 'Bluebird',
        'NC' => 'Cardinal',
        'ND' => 'Western Meadowlark',
        'OH' => 'Cardinal',
        'OK' => 'Scissor-tailed Flycatcher',
        'OR' => 'Western Meadowlark',
        'PA' => 'Ruffed Grouse',
        'RI' => 'Rhode Island Red',
        'SC' => 'Great Carolina Wren',
        'SD' => 'Ring-necked Pheasant',
        'TN' => 'Mockingbird',
        'TX' => 'Mockingbird',
        'UT' => 'Common American Gull',
        'VT' => 'Hermit Thrush',
        'VA' => 'Cardinal ',
        'WA' => 'Willow Goldfinch',
        'WV' => 'Cardinal',
        'WI' => 'Robin',
        'WY' => 'Western Meadowlark'
    );

    public $stateNeighbors = array(
        'AL' => array( 'AL', 'TN', 'GA', 'MS'),
        'AK' => array( 'AK' ),
        'AZ' => array( 'AZ', 'CA', 'NV', 'UT', 'CO', 'NM' ),
        'AR' => array( 'AR', 'MO', 'TN', 'MS', 'LA', 'TX', 'KS'),
        'CA' => array( 'CA', 'AZ', 'NV', 'OR'),
        'CO' => array( 'CO', 'WY', 'NE', 'KS', 'OK', 'TX', 'NM', 'AZ', 'UT'),
        'CT' => array( 'CT', 'RI', 'NY', 'MA'),
        'DC' => array( 'DC', 'VA', 'MD' ),
        'DE' => array( 'MD', 'NJ', 'PA' ),
        'FL' => array( 'FL', 'AL', 'GA'),
        'GA' => array( 'GA', 'FL', 'SC', 'AL', 'TN', 'NC' ),
        'HI' => array( 'HI', ),
        'ID' => array( 'ID', 'WA', 'OR', 'NV', 'UT', 'MT', 'WY'  ),
        'IL' => array( 'IL', 'WI', 'MI', 'IN', 'KY', 'MO', 'IA'),
        'IN' => array( 'IN', 'MI', 'OH', 'KY', 'IL'),
        'IA' => array( 'IA', 'MN', 'WI', 'IL', 'MO', 'NE', 'SD'),
        'KS' => array( 'KS', 'NE', 'MO', 'OK', 'CO'),
        'KY' => array( 'KY', 'WV', 'VA', 'TN', 'MO', 'IL', 'IN', 'OH'),
        'LA' => array( 'LA', 'AR', 'MS', 'TX'),
        'ME' => array( 'ME', 'NH'),
        'MD' => array( 'MD', 'VA', 'WV', 'DC', 'PA', 'DE' ),
        'MA' => array( 'MA', 'NH', 'VT', 'MA', 'CT', 'RI', 'NY' ),
        'MI' => array( 'MI', 'IN', 'OH', 'MN', 'WI'),
        'MN' => array( 'MN', 'IA', 'MI', 'ND', 'SD', 'WI' ),
        'MS' => array( 'MS', 'TN', 'AL', 'AR', 'LA'),
        'MO' => array( 'MO', 'TN', 'AL', 'AR', 'LA', 'IA', 'IL', 'KY', 'TN', 'AR', 'OK', 'KS', 'NE'),
        'MT' => array( 'MT', 'ND', 'SD', 'WY', 'ID'),
        'NE' => array( 'NE', 'CO', 'KS', 'SD', 'WY', 'IA' ),
        'NV' => array( 'NV', 'OR', 'ID', 'CA', 'UT', 'AZ'),
        'NH' => array( 'NH', 'ME', 'MA', 'VT' ),
        'NJ' => array( 'NJ', 'NY', 'PA', 'DE'),
        'NM' => array( 'NM', 'CO', 'TX', 'OK', 'AZ' ),
        'NY' => array( 'NY', 'NJ', 'VT', 'MA', 'CT', 'RI' ),
        'NC' => array( 'NC', 'SC', 'GA', 'TN', 'VA'),
        'ND' => array( 'ND', 'MN', 'SD', 'MT'),
        'OH' => array( 'OH', 'MI', 'PA', 'WV', 'IN', 'KY' ),
        'OK' => array( 'OK', 'AR', 'MO', 'KS', 'CO', 'NM', 'TX' ),
        'OR' => array( 'OR', 'WA', 'ID', 'CA', 'NV'),
        'PA' => array( 'PA', 'NY', 'NJ', 'DE', 'MD', 'WV', 'OH' ),
        'RI' => array( 'RI', 'MA', 'CT', 'NY' ),
        'SC' => array( 'SC', 'NC', 'GA' ),
        'SD' => array( 'SD', 'ND', 'NE', 'IA', 'MN', 'WY', 'MT' ),
        'TN' => array( 'TN', 'KY', 'VA', 'NC', 'MS', 'AL', 'GA', 'AR', 'MO' ),
        'TX' => array( 'TX', 'LA', 'AR', 'OK', 'NM' ),
        'UT' => array( 'UT', 'AZ', 'CO', 'ID', 'NV', 'WY'),
        'VT' => array( 'VT', 'NH', 'NY', 'MA', 'NH', 'NY', 'MA'),
        'VA' => array( 'VA', 'KY', 'MD', 'NC', 'TN', 'WV' ),
        'WA' => array( 'WA', 'ID', 'OR' ),
        'WV' => array( 'WV', 'VA', 'KY', 'OH', 'PA', 'MD'),
        'WI' => array( 'WI', 'MI', 'IL', 'IA', 'MN'),
        'WY' => array( 'WY', 'MT', 'SD', 'NE', 'CO', 'UT', 'ID' ),
    );

    public $stateTimezones = array(
        'AL' => 'America/Chicago',
        'AK' => 'America/Anchorage',
        'AZ' => 'America/Phoenix',
        'AR' => 'America/Chicago',
        'CA' => 'America/Los_Angeles',
        'CO' => 'America/Denver',
        'CT' => 'America/New_York',
        'DE' => 'America/New_York',
        'DC' => 'America/New_York',
        'FL' => 'America/New_York',
        'GA' => 'America/New_York',
        'HI' => 'Pacific/Honolulu',
        'ID' => 'America/Denver',
        'IL' => 'America/Chicago',
        'IN' => 'America/Chicago',
        'IA' => 'America/Chicago',
        'KS' => 'America/Chicago',
        'KY' => 'America/New_York',
        'LA' => 'America/Chicago',
        'ME' => 'America/New_York',
        'MD' => 'America/New_York',
        'MA' => 'America/New_York',
        'MI' => 'America/New_York',
        'MN' => 'America/Chicago',
        'MS' => 'America/Chicago',
        'MO' => 'America/Chicago',
        'MT' => 'America/Denver',
        'NE' => 'America/Chicago',
        'NV' => 'America/Los_Angeles',
        'NH' => 'America/New_York',
        'NJ' => 'America/New_York',
        'NM' => 'America/Denver',
        'NY' => 'America/New_York',
        'NC' => 'America/New_York',
        'ND' => 'America/Chicago',
        'OH' => 'America/New_York',
        'OK' => 'America/Chicago',
        'OR' => 'America/Los_Angeles',
        'PA' => 'America/New_York',
        'PR' => 'America/New_York',
        'RI' => 'America/New_York',
        'SC' => 'America/New_York',
        'SD' => 'America/Chicago',
        'TN' => 'America/Chicago',
        'TX' => 'America/Chicago', // west tip is Mountain
        'UT' => 'America/Denver',
        'VT' => 'America/New_York',
        'VI' => 'America/New_York',
        'VA' => 'America/New_York',
        'WA' => 'America/Los_Angeles',
        'WV' => 'America/New_York',
        'WI' => 'America/Chicago',
        'WY' => 'America/Denver',
    );


    // =====================================================================================================
    /*
    */
    function __construct() {
    }

    // =====================================================================================================
    /*
    * Utility function to make sure a given $string is a valid state code.
    * Will convert state name to its 2-letter code as needed
    * @param  string $string
    * @return 2-letter state code (string) or false (bool)
    */
    private function __verifyStateCode( $string )
    {
        $stateCode = strtoupper($string); // Assume is 2-letter

        if ( strlen($stateCode) > 2 ) {
            $stateCode = array_search(strtolower($stateCode), array_map('strtolower', $this->states));
        }

        if ( $stateCode && array_key_exists($stateCode, $this->states) ) {
            return $stateCode;
        }

        return false;
    }


    // =====================================================================================================
    /*
    * Get array of all U.S. states
    * @return array
    */
    function getAllStates()
    {
        return $this->$states;
    }


    // =====================================================================================================
    /*
    * Get capital of specific U.S. state
    * @param array $options
    * @return string
    */
    function getStateCapital( $stateCode )
    {
        $stateCode = $this->__verifyStateCode( $stateCode );

        if ( $stateCode && array_key_exists($stateCode, $this->stateCapitals) ) {
            return $this->stateCapitals[$stateCode];
        }

    }


    // =====================================================================================================
    /*
    * Get array of U.S. state neighbors, indexed by 2-letter state code
    * @param string $stateCode
    * @param array $options
    * @return array
    */
    function getStateNeighbors( $stateCode )
    {
        $stateCode = $this->__verifyStateCode( $stateCode );


        if ( $stateCode && array_key_exists($stateCode, $this->stateNeighbors) ) {

            return $this->stateNeighbors[$stateCode];

        }

        return false;
    }



    // =====================================================================================================
    /*
    * Get array of U.S. state neighbors, indexed by 2-letter state code
    * @param string $stateCode
    * @return array
    */
    function getStateBird( $stateCode )
    {
        $stateCode = $this->__verifyStateCode( $stateCode );

        if ( $stateCode && array_key_exists($stateCode, $this->stateBirds) ) {
            return $this->stateBirds[$stateCode];
        }

        return false;
    }





} # End C7GeoKit