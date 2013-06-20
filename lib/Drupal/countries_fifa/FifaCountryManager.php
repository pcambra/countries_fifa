<?php

/**
 * @file
 * Definition of \Drupal\countries_fifa\FifaCountryManager.
 */

namespace Drupal\countries_fifa;

use Drupal\Core\Locale\CountryManagerInterface;

/**
 * Provides list of countries coming from the FIFA.
 */
class FifaCountryManager implements CountryManagerInterface {

  /**
   * An array of country code => country name pairs.
   */
  protected $countries;

  function getList() {
    return array(
      'AFG' => t('Afghanistan'),
      'ALB' => t('Albania'),
      'ALG' => t('Algeria'),
      'ASA' => t('American Samoa'),
      'AND' => t('Andorra'),
      'ANG' => t('Angola'),
      'AIA' => t('Anguilla'),
      'ATG' => t('Antigua and Barbuda'),
      'ARG' => t('Argentina'),
      'ARM' => t('Armenia'),
      'ARU' => t('Aruba'),
      'AUS' => t('Australia'),
      'AUT' => t('Austria'),
      'AZE' => t('Azerbaijan'),
      'BAH' => t('Bahamas'),
      'BHR' => t('Bahrain'),
      'BAN' => t('Bangladesh'),
      'BRB' => t('Barbados'),
      'BLR' => t('Belarus'),
      'BEL' => t('Belgium'),
      'BLZ' => t('Belize'),
      'BEN' => t('Benin'),
      'BER' => t('Bermuda'),
      'BHU' => t('Bhutan'),
      'BOL' => t('Bolivia'),
      'BIH' => t('Bosnia and Herzegovina'),
      'BOT' => t('Botswana'),
      'BRA' => t('Brazil'),
      'VGB' => t('British Virgin Islands'),
      'BRU' => t('Brunei'),
      'BUL' => t('Bulgaria'),
      'BFA' => t('Burkina Faso'),
      'BDI' => t('Burundi'),
      'CAM' => t('Cambodia'),
      'CMR' => t('Cameroon'),
      'CAN' => t('Canada'),
      'CPV' => t('Cape Verde'),
      'CAY' => t('Cayman Islands'),
      'CTA' => t('Central African Republic'),
      'CHA' => t('Chad'),
      'CHI' => t('Chile'),
      'CHN' => t('China PR'),
      'TPE' => t('Chinese Taipei'),
      'COL' => t('Colombia'),
      'COM' => t('Comoros'),
      'CGO' => t('Congo'),
      'COD' => t('Congo DR'),
      'COK' => t('Cook Islands'),
      'CRC' => t('Costa Rica'),
      'CIV' => t("Côte d'Ivoire (Ivory Coast)"),
      'CRO' => t('Croatia'),
      'CUB' => t('Cuba'),
      'CUW' => t('Curaçao'),
      'CYP' => t('Cyprus'),
      'CZE' => t('Czech Republic'),
      'DEN' => t('Denmark'),
      'DJI' => t('Djibouti'),
      'DMA' => t('Dominica'),
      'DOM' => t('Dominican Republic'),
      'ECU' => t('Ecuador'),
      'EGY' => t('Egypt'),
      'SLV' => t('El Salvador'),
      'ENG' => t('England'),
      'EQG' => t('Equatorial Guinea'),
      'ERI' => t('Eritrea'),
      'EST' => t('Estonia'),
      'ETH' => t('Ethiopia'),
      'FRO' => t('Faroe Islands'),
      'FIJ' => t('Fiji'),
      'FIN' => t('Finland'),
      'FRA' => t('France'),
      'GAB' => t('Gabon'),
      'GAM' => t('Gambia'),
      'GEO' => t('Georgia'),
      'GER' => t('Germany'),
      'GHA' => t('Ghana'),
      'GRE' => t('Greece'),
      'GRN' => t('Grenada'),
      'GUM' => t('Guam'),
      'GUA' => t('Guatemala'),
      'GUI' => t('Guinea'),
      'GNB' => t('Guinea-Bissau'),
      'GUY' => t('Guyana'),
      'HAI' => t('Haiti'),
      'HON' => t('Honduras'),
      'HKG' => t('Hong Kong'),
      'HUN' => t('Hungary'),
      'ISL' => t('Iceland'),
      'IND' => t('India'),
      'IDN' => t('Indonesia'),
      'IRN' => t('Iran'),
      'IRQ' => t('Iraq'),
      'ISR' => t('Israel'),
      'ITA' => t('Italy'),
      'JAM' => t('Jamaica'),
      'JPN' => t('Japan'),
      'JOR' => t('Jordan'),
      'KAZ' => t('Kazakhstan'),
      'KEN' => t('Kenya'),
      'PRK' => t('North Korea'),
      'KOR' => t('South Korea'),
      'KUW' => t('Kuwait'),
      'KGZ' => t('Kyrgyzstan'),
      'LAO' => t('Laos'),
      'LVA' => t('Latvia'),
      'LIB' => t('Lebanon'),
      'LES' => t('Lesotho'),
      'LBR' => t('Liberia'),
      'LBY' => t('Libya'),
      'LIE' => t('Liechtenstein'),
      'LTU' => t('Lithuania'),
      'LUX' => t('Luxembourg'),
      'MAC' => t('Macau'),
      'MKD' => t('Macedonia'),
      'MAD' => t('Madagascar'),
      'MWI' => t('Malawi'),
      'MAS' => t('Malaysia'),
      'MDV' => t('Maldives'),
      'MLI' => t('Mali'),
      'MLT' => t('Malta'),
      'MTN' => t('Mauritania'),
      'MRI' => t('Mauritius'),
      'MEX' => t('Mexico'),
      'MDA' => t('Moldova'),
      'MNG' => t('Mongolia'),
      'MNE' => t('Montenegro'),
      'MSR' => t('Montserrat'),
      'MAR' => t('Morocco'),
      'MOZ' => t('Mozambique'),
      'MYA' => t('Myanmar'),
      'NAM' => t('Namibia'),
      'NEP' => t('Nepal'),
      'NED' => t('Netherlands'),
      'NCL' => t('New Caledonia'),
      'NZL' => t('New Zealand'),
      'NCA' => t('Nicaragua'),
      'NIG' => t('Niger'),
      'NGA' => t('Nigeria'),
      'NIR' => t('Northern Ireland'),
      'NOR' => t('Norway'),
      'OMA' => t('Oman'),
      'PAK' => t('Pakistan'),
      'PLE' => t('Palestine'),
      'PAN' => t('Panama'),
      'PNG' => t('Papua New Guinea'),
      'PAR' => t('Paraguay'),
      'PER' => t('Peru'),
      'PHI' => t('Philippines'),
      'POL' => t('Poland'),
      'POR' => t('Portugal'),
      'PUR' => t('Puerto Rico'),
      'QAT' => t('Qatar'),
      'IRL' => t('Republic of Ireland'),
      'ROU' => t('Romania'),
      'RUS' => t('Russia'),
      'RWA' => t('Rwanda'),
      'SKN' => t('Saint Kitts and Nevis'),
      'LCA' => t('Saint Lucia'),
      'VIN' => t('Saint Vincent and the Grenadines'),
      'SAM' => t('Samoa'),
      'SMR' => t('San Marino'),
      'STP' => t('São Tomé and Príncipe'),
      'KSA' => t('Saudi Arabia'),
      'SCO' => t('Scotland'),
      'SEN' => t('Senegal'),
      'SRB' => t('Serbia'),
      'SEY' => t('Seychelles'),
      'SLE' => t('Sierra Leone'),
      'SIN' => t('Singapore'),
      'SVK' => t('Slovakia'),
      'SVN' => t('Slovenia'),
      'SOL' => t('Solomon Islands'),
      'SOM' => t('Somalia'),
      'RSA' => t('South Africa'),
      'ESP' => t('Spain'),
      'SRI' => t('Sri Lanka'),
      'SDN' => t('Sudan'),
      'SSD' => t('South Sudan'),
      'SUR' => t('Suriname'),
      'SWZ' => t('Swaziland'),
      'SWE' => t('Sweden'),
      'SUI' => t('Switzerland'),
      'SYR' => t('Syria'),
      'TAH' => t('Tahiti'),
      'TJK' => t('Tajikistan'),
      'TAN' => t('Tanzania'),
      'THA' => t('Thailand'),
      'TLS' => t('Timor-Leste (East Timor)'),
      'TOG' => t('Togo'),
      'TGA' => t('Tonga'),
      'TRI' => t('Trinidad and Tobago'),
      'TUN' => t('Tunisia'),
      'TUR' => t('Turkey'),
      'TKM' => t('Turkmenistan'),
      'TCA' => t('Turks and Caicos Islands'),
      'UGA' => t('Uganda'),
      'UKR' => t('Ukraine'),
      'UAE' => t('United Arab Emirates'),
      'USA' => t('United States'),
      'URU' => t('Uruguay'),
      'VIR' => t('U.S. Virgin Islands'),
      'UZB' => t('Uzbekistan'),
      'VAN' => t('Vanuatu'),
      'VEN' => t('Venezuela'),
      'VIE' => t('Vietnam'),
      'WAL' => t('Wales'),
      'YEM' => t('Yemen'),
      'ZAM' => t('Zambia'),
      'ZIM' => t('Zimbabwe'),
    );
  }

}