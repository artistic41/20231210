<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '6, 8, 10, 3, 13, 1, 2, 12, 11, 4, 14, 5, 9, 7',
		'Pla Odds'  =>  '6, 8, 13, 10, 3, 2, 1, 4, 11, 5, 12, 14, 9, 7',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '9, 5, 3, 2, 4, 7, 6, 11, 13, 1, 14, 8, 12, 10',
		'Pla Odds'  =>  '9, 3, 2, 5, 4, 6, 7, 11, 13, 1, 14, 12, 8, 10',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '2',
		'history p' => '2',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '9, 7, 10, 3, 6, 12, 5, 4, 1, 13, 2, 11, 14, 8',
		'Pla Odds'  =>  '9, 7, 6, 10, 3, 5, 12, 4, 1, 13, 11, 2, 14, 8',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 11)' => '10',
		'history p' => '10',
		'SURE PLACE' => '10',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '9, 8, 3, 1, 7, 6, 2, 4',
		'Pla Odds'  =>  '8, 9, 3, 2, 7, 1, 6, 4',
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
		'Win Odds'  =>  '1, 2, 5, 3, 10, 6, 4, 7, 8, 9',
		'Pla Odds'  =>  '1, 2, 5, 3, 10, 7, 4, 6, 9, 8',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win odds candidate(k = 6)' => '10',
		/** Black selection */
		'history w' => '2, 10',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		'pla odds candidate(k = 9)' => '2',
		'history p' => '2',
		'SURE PLACE' => '2',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '2, 1, 3, 7, 10, 9, 11, 14, 6, 8, 5, 13, 12, 4',
		'Pla Odds'  =>  '1, 2, 3, 10, 7, 14, 9, 11, 6, 4, 12, 8, 5, 13',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
		'history p' => '6',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 7, 2, 11, 4, 5, 13, 10, 8, 12, 3, 9, 6, 14',
		'Pla Odds'  =>  '1, 7, 2, 11, 5, 10, 4, 13, 8, 3, 12, 9, 6, 14',
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
		'Win Odds'  =>  '2, 1, 3, 4, 5, 7, 11, 8, 6, 9, 10',
		'Pla Odds'  =>  '2, 3, 7, 1, 4, 5, 8, 11, 6, 9, 10',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '4',
		/** Black selection */
		'history w' => '4',
		/** Based on pla odds */
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '1, 14, 5, 4, 9, 2, 8, 13, 3, 12, 10, 7, 6, 11',
		'Pla Odds'  =>  '1, 14, 5, 4, 9, 8, 2, 12, 13, 3, 10, 7, 11, 6',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '7, 8, 9, 12, 5, 6, 10, 3, 2, 4, 11, 13, 1',
		'Pla Odds'  =>  '7, 9, 6, 8, 12, 5, 10, 3, 4, 13, 11, 2, 1',
		'Total Runners '  =>  13,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '9',
		/** Based on pla odds */
		'pla odds candidate(k = 11)' => '6',
		'history p' => '6',
	],
];
