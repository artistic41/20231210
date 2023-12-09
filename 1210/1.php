<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '6, 8, 10, 13, 3, 2, 1, 11, 14, 12, 5, 4, 7, 9',
		'Pla Odds'  =>  '10, 6, 13, 8, 3, 2, 11, 1, 14, 12, 5, 4, 7, 9',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '9, 5, 3, 2, 4, 7, 6, 11, 13, 1, 8, 14, 12, 10',
		'Pla Odds'  =>  '3, 5, 9, 4, 2, 7, 11, 13, 6, 14, 1, 8, 12, 10',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '9, 7, 10, 3, 6, 12, 5, 1, 4, 2, 11, 13, 14, 8',
		'Pla Odds'  =>  '3, 9, 6, 10, 5, 7, 12, 1, 2, 11, 13, 14, 8, 4',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '3',
		/** Based on pla odds */
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '9, 8, 3, 1, 6, 7, 2, 4',
		'Pla Odds'  =>  '9, 8, 3, 6, 1, 7, 2, 4',
		'Total Runners '  =>  8,
		/** Based on win odds */
		/** Based on pla odds */
		'history p' => '8',
		'SURE PLACE' => '8',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '1, 2, 5, 3, 7, 10, 6, 4, 8, 9',
		'Pla Odds'  =>  '1, 2, 5, 7, 3, 9, 10, 4, 6, 8',
		'Total Runners '  =>  10,
		/** Based on win odds */
		/** Black selection */
		'history w' => '2, 10',
		'SURE PLACE' => '2',
		/** Based on pla odds */
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '2, 1, 7, 3, 10, 9, 6, 14, 8, 11, 13, 5, 4, 12',
		'Pla Odds'  =>  '2, 1, 7, 10, 3, 14, 9, 6, 11, 13, 8, 12, 5, 4',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '7',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 7, 2, 11, 5, 4, 10, 13, 8, 12, 3, 6, 14, 9',
		'Pla Odds'  =>  '1, 11, 2, 7, 5, 4, 10, 8, 13, 3, 12, 14, 6, 9',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '10',
		'history p' => '10',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '2, 3, 1, 4, 5, 7, 11, 8, 6, 9, 10',
		'Pla Odds'  =>  '2, 3, 7, 8, 5, 1, 11, 6, 9, 4, 10',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '4',
		/** Black selection */
		'history w' => '4',
		/** Based on pla odds */
		'pla odds candidate(k = 9)' => '7',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '1, 14, 5, 4, 9, 8, 2, 12, 3, 13, 10, 7, 6, 11',
		'Pla Odds'  =>  '14, 1, 5, 4, 9, 8, 2, 12, 13, 7, 3, 10, 11, 6',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '7, 8, 12, 9, 5, 2, 10, 3, 4, 11, 6, 1, 13',
		'Pla Odds'  =>  '9, 5, 7, 10, 12, 8, 3, 11, 6, 4, 13, 2, 1',
		'Total Runners '  =>  13,
		/** Based on win odds */
		'win odds candidate(k = 13)' => '7',
		/** Based on pla odds */
	],
];
