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
		'Win Odds'  =>  '7, 9, 5, 12, 4, 10, 3, 6, 11, 13, 2, 14, 8',
		'Pla Odds'  =>  '7, 9, 5, 12, 3, 4, 10, 6, 11, 13, 2, 8, 14',
		'Total Runners '  =>  13,
		/** Based on win odds */
		/** Based on pla odds */
		'history p' => '10, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '8, 9, 1, 3, 7, 6, 2, 4',
		'Pla Odds'  =>  '8, 9, 3, 1, 7, 6, 4, 2',
		'Total Runners '  =>  8,
		/** Based on win odds */
		'win odds candidate(k = 6)' => '1',
		/** Based on pla odds */
		'pla odds candidate(k = 6)' => '3',
		'history p' => '8',
		'SURE PLACE' => '8',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '1, 2, 5, 3, 10, 4, 6, 9, 7, 8',
		'Pla Odds'  =>  '1, 2, 5, 3, 4, 10, 9, 6, 7, 8',
		'Total Runners '  =>  10,
		/** Based on win odds */
		/** Black selection */
		'history w' => '2, 10',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		'history p' => '2, 10, 4',
		'SURE PLACE' => '2',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '2, 9, 3, 10, 1, 6, 7, 12, 8, 14, 11, 5, 4, 13',
		'Pla Odds'  =>  '2, 7, 9, 10, 3, 1, 6, 8, 12, 14, 11, 5, 4, 13',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '10',
		/** Black selection */
		'history w' => '10',
		/** Based on pla odds */
		'pla odds candidate(k = 11)' => '10',
		'pla odds candidate(k = 8)' => '6',
		'history p' => '10, 6',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 7, 2, 4, 13, 11, 5, 10, 8, 3, 12, 9, 6, 14',
		'Pla Odds'  =>  '1, 7, 2, 11, 4, 5, 13, 10, 8, 3, 9, 12, 6, 14',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 14)' => '1',
		/** Based on pla odds */
		'pla odds candidate(k = 14)' => '1',
		'pla odds candidate(k = 12)' => '2',
		'history p' => '2, 10',
		'SURE PLACE' => '2',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '2, 3, 1, 4, 5, 7, 11, 8, 10, 6, 9',
		'Pla Odds'  =>  '2, 3, 1, 4, 7, 5, 11, 8, 6, 9, 10',
		'Total Runners '  =>  11,
		/** Based on win odds */
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
		'Win Odds'  =>  '1, 14, 5, 4, 9, 8, 2, 13, 7, 3, 12, 10, 6, 11',
		'Pla Odds'  =>  '1, 14, 5, 9, 4, 8, 2, 7, 13, 10, 3, 12, 11, 6',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '5',
		'pla odds candidate(k = 10)' => '4',
		'history p' => '4',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '7, 12, 5, 8, 9, 10, 3, 2, 6, 4, 13, 11, 1',
		'Pla Odds'  =>  '9, 5, 7, 12, 8, 10, 6, 13, 3, 4, 2, 11, 1',
		'Total Runners '  =>  13,
		/** Based on win odds */
		/** Based on pla odds */
		'history p' => '6',
	],
];
