<?php
class Model_Portfolio extends Model
{	
	public function get_data()
	{	
		//simulate database data 
		return array(
			
			array(
				'Name' => 'Hill Climb Racing PC edition',
				'Year' => '2017',
				'Description' => 'Порт игры Hill Climb Racing на пк с добавлением новых игровых механик и улучшением игровой физики. Статус - закончена и выпущена'
			),

			array(
				'Name' => 'Medieval-Strike',
				'Year' => '2018',
				'Description' => 'Ремейк игры Counter-Strike на движке Unity с улучшением графики и новым, уникальным сеттингом. Статус - выпущена демо версия, разрабтка заморожена.'
			),
			
			array(
				'Name' => 'Star Wars: Renegade',
				'Year' => '2018',
				'Description' => 'Уникальная игра по вселенной Звездных Войн которая должна показать особенное виденье этой вселенной от разработчиков студии. Статус - выпущена пре-альфа версия, проект в стадии разработки.'
			),

		);
	}

}
