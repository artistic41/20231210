<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '6, 10, 13, 8, 3, 1, 2, 12, 4, 5, 14, 11, 9, 7',
		'Pla Odds'  =>  '6, 10, 13, 8, 3, 1, 2, 5, 12, 4, 14, 11, 9, 7',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '9, 5, 3, 7, 4, 2, 11, 13, 6, 14, 1, 10, 12, 8',
		'Pla Odds'  =>  '9, 5, 7, 3, 11, 2, 4, 13, 6, 14, 1, 10, 12, 8',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
		'history p' => '2',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '9, 7, 10, 3, 5, 6, 12, 1, 4, 13, 2, 11, 14, 8',
		'Pla Odds'  =>  '9, 7, 3, 6, 5, 10, 12, 1, 4, 13, 2, 11, 8, 14',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 14)' => '9',
		'history p' => '6, 10',
		'SURE PLACE' => '10',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '8, 9, 3, 1, 7, 6, 2, 4',
		'Pla Odds'  =>  '8, 9, 3, 6, 7, 1, 2, 4',
		'Total Runners '  =>  8,
		/** Based on win odds */
		'win odds candidate(k = 6)' => '3',
		/** Based on pla odds */
		'history p' => '8',
		'SURE PLACE' => '8',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '1, 2, 5, 3, 10, 4, 6, 7, 8, 9',
		'Pla Odds'  =>  '1, 2, 5, 3, 4, 10, 6, 7, 9, 8',
		'Total Runners '  =>  10,
		/** Based on win odds */
		/** Black selection */
		'history w' => '2, 10',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		'pla odds candidate(k = 9)' => '2',
		'history p' => '2, 4',
		'SURE PLACE' => '2',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '2, 1, 3, 10, 7, 9, 6, 11, 14, 8, 12, 5, 4, 13',
		'Pla Odds'  =>  '3, 1, 2, 7, 10, 9, 14, 6, 11, 12, 8, 4, 5, 13',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
		'history p' => '6',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 7, 2, 4, 13, 5, 11, 10, 8, 9, 12, 3, 6, 14',
		'Pla Odds'  =>  '1, 2, 7, 5, 11, 10, 4, 13, 8, 9, 12, 3, 6, 14',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 14)' => '1',
		/** Based on pla odds */
		'pla odds candidate(k = 14)' => '1',
		'history p' => '10',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '2, 3, 1, 4, 5, 7, 11, 8, 6, 10, 9',
		'Pla Odds'  =>  '2, 1, 3, 4, 7, 11, 5, 8, 6, 9, 10',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '3',
		'win odds candidate(k = 8)' => '4',
		/** Black selection */
		'history w' => '4',
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '4',
		'history p' => '4',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '1, 14, 5, 4, 9, 2, 8, 13, 3, 7, 12, 10, 6, 11',
		'Pla Odds'  =>  '1, 14, 4, 5, 9, 8, 2, 7, 13, 10, 3, 12, 11, 6',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '4',
		'pla odds candidate(k = 10)' => '9',
		'history p' => '4',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '7, 5, 8, 9, 12, 10, 6, 3, 4, 2, 13, 11, 1',
		'Pla Odds'  =>  '5, 9, 7, 12, 8, 10, 6, 13, 3, 4, 2, 11, 1',
		'Total Runners '  =>  13,
		/** Based on win odds */
		/** Based on pla odds */
		'history p' => '6',
	],
];
