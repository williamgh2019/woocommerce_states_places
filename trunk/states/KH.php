<?php

/**
 * $country states/provinces/regions
 * - $count states/provinces/regions
 * 
 * Source: 
 * For Khmer Unicode Provinces Abbreviations short code please see
 * https://github.com/unicode-org/cldr/blob/master/common/subdivisions/en.xml
 *
 * @author  William N <suloveoun@gmail.com> | https://borbak.com
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['KH'] = array(
  'KH1' => 'Banteay Meanchey',
  'KH2' => 'Battambang',
  'KH3' => 'Kampong Cham',
  'KH4' => 'Kampong Chhnang',
  'KH5' => 'Kampong Speu',
  'KH6' => 'Kampong Thom',
  'KH7' => 'Kampot',
  'KH8' => 'Kandal',
  'KH9' => 'Koh Kong',
  'KH10' => 'Kratié',
  'KH11' => 'Mondulkiri',
  'KH12' => 'Phnom Penh',
  'KH13' => 'Preah Vihear',
  'KH14' => 'Prey Veng',
  'KH15' => 'Pursat',
  'KH16' => 'Ratanakiri',
  'KH17' => 'Siem Reap',
  'KH18' => 'Sihanoukville',
  'KH19' => 'Stung Treng',
  'KH20' => 'Svay Rieng',
  'KH21' => 'Takéo',
  'KH22' => 'Oddar Meanchey',
  'KH23' => 'Kep',
  'KH24' => 'Pailin',
  'KH25' => 'Tbong Khmum<',
);

// Use this filter to handle the Provinces of Cambodia
$states['KH'] = apply_filters('scpwoo_custom_states_kh', $states['KH']);