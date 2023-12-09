<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '6, 10, 8, 3, 13, 2, 1, 14, 11, 12, 5, 4, 7, 9',
		'Pla Odds'  =>  '6, 13, 8, 3, 10, 2, 11, 14, 12, 1, 5, 4, 7, 9',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 9, 5, 2, 4, 7, 6, 11, 13, 1, 8, 12, 14, 10',
		'Pla Odds'  =>  '3, 5, 9, 4, 2, 7, 13, 11, 6, 12, 8, 1, 14, 10',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '5',
		/** Based on pla odds */
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '7, 9, 10, 3, 6, 12, 4, 1, 5, 2, 11, 13, 14, 8',
		'Pla Odds'  =>  '9, 7, 10, 12, 6, 3, 5, 11, 2, 13, 1, 14, 8, 4',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '3',
		/** Based on pla odds */
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '9, 8, 3, 1, 5, 7, 6, 2, 4',
		'Pla Odds'  =>  '9, 8, 3, 6, 5, 1, 2, 4, 7',
		'Total Runners '  =>  9,
		/** Based on win odds */
		'win odds candidate(k = 5)' => '5',
		/** Based on pla odds */
		'pla odds candidate(k = 5)' => '5',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '1, 3, 7, 10, 2, 6, 5, 8, 4, 9',
		'Pla Odds'  =>  '1, 7, 2, 5, 3, 10, 4, 6, 9, 8',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '7',
		'win odds candidate(k = 6)' => '2',
		/** Black selection */
		'history w' => '2',
		/** Based on pla odds */
		'pla odds candidate(k = 9)' => '7',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '2, 1, 7, 3, 10, 13, 5, 8, 6, 9, 14, 11, 4, 12',
		'Pla Odds'  =>  '2, 1, 7, 10, 3, 6, 14, 11, 13, 9, 5, 12, 8, 4',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '5',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '7',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 7, 2, 11, 5, 10, 4, 13, 12, 8, 3, 14, 9, 6',
		'Pla Odds'  =>  '1, 7, 11, 5, 2, 10, 4, 13, 3, 8, 12, 9, 6, 14',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 14)' => '1',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '2, 3, 1, 4, 5, 11, 7, 8, 9, 6, 10',
		'Pla Odds'  =>  '2, 3, 7, 5, 1, 9, 11, 6, 8, 4, 10',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '1',
		'win odds candidate(k = 8)' => '4',
		'win odds candidate(k = 7)' => '5',
		/** Black selection */
		'history w' => '4',
		/** Based on pla odds */
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '1, 14, 5, 4, 9, 8, 2, 12, 13, 3, 10, 7, 6, 11',
		'Pla Odds'  =>  '1, 14, 4, 5, 9, 12, 8, 2, 3, 11, 13, 10, 7, 6',
		'Total Runners '  =>  14,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '8, 7, 12, 9, 2, 5, 10, 3, 4, 11, 6, 13, 1',
		'Pla Odds'  =>  '9, 7, 5, 12, 8, 10, 3, 6, 13, 2, 4, 11, 1',
		'Total Runners '  =>  13,
		/** Based on win odds */
		/** Based on pla odds */
	],
];
