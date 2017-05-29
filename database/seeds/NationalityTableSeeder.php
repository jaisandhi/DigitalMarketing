<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NationalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::today();
        DB::table('nationality')->truncate();
        //delete users table records
        DB::table('nationality')->delete();
        //insert some dummy records
        DB::table('nationality')->insert(array(
            array(
                'name'=>'Afghan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Albanian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Algerian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'American',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Andorran',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Angolan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Antiguans',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Argentinean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Armenian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Australian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Austrian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Azerbaijani',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Bahamian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Bahraini',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Bangladeshi',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Barbadian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Barbudans',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Batswana',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Belarusian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Belgian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Belizean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Beninese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Bhutanese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Bolivian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Bosnian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Brazilian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'British',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Bruneian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Bulgarian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Burkinabe',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Burmese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Burundian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Cambodian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Cameroonian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Canadian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Cape Verdean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Central African',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Chadian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Chilean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Chinese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Colombian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Comoran',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Congolese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Costa Rican',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Croatian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Cuban',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Cypriot',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Czech',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Danish',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Djibouti',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Dominican',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Dutch',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'East Timorese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Ecuadorean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Egyptian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Emirian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Equatorial Guinean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Eritrean',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Estonian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Ethiopian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Fijian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Filipino',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Finnish',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'French',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Gabonese',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Gambian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Georgian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'German',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Ghanaian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Greek',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Grenadian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Guatemalan',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Guinea-Bissauan',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Guinean',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Guyanese',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Haitian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Herzegovinian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Honduran',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Hungarian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Icelander',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Indian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Indonesian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Iranian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Iraqi',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Irish',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Israeli',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Italian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Ivorian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Jamaican',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Japanese',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Jordanian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Kazakhstani',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Kenyan',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Kittian and Nevisian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Kuwaiti',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Kyrgyz',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Laotian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Latvian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Lebanese',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Liberian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Libyan',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Liechtensteiner',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Lithuanian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Luxembourger',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Macedonian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Malagasy',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Malawian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Malaysian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Maldivan',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Malian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Maltese',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Marshallese',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Mauritanian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Mauritian',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Mexican',
                'created_at' => $today,
                'updated_at' => $today
            ),array(
                'name'=>'Micronesian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Moldovan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Monacan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Mongolian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Moroccan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Mosotho',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Motswana',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Mozambican',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Namibian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Nauruan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Nepalese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'New Zealander',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Ni-Vanuatu',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Nicaraguan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Nigerien',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'North Korean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Northern Irish',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Norwegian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Qatari',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Romanian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Omani',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Pakistani',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Palauan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Panamanian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Papua New Guinean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Paraguayan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Peruvian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Polish',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Portuguese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Qatari',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Romanian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Russian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Rwandan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Saint Lucian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Salvadoran',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Samoan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'San Marinese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Sao Tomean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Saudi',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Scottish',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Senegalese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Serbian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Seychellois',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Sierra Leonean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Singaporean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Slovakian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Slovenian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Solomon Islander',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Somali',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'South African',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'South Korean',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Spanish',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Sri Lankan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Sudanese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Surinamer',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Swazi',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Swedish',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Swiss',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Syrian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Taiwanese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Tajik',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Tanzanian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Thai',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Togolese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Tongan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Trinidadian or Tobagonian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Tunisian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Turkish',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Tuvaluan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Ugandan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Ukrainian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'United Arab Emirates',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Uruguayan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Uzbekistani',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Venezuelan',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Vietnamese',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Welsh',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Yemenite',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Zambian',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Zimbabwean',
                'created_at' => $today,
                'updated_at' => $today
            ),
        ));
    }
}

