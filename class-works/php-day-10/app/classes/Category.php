<?php


namespace App\classes;


class Category
{
    public $categories=[];

    public function __construct()
    {
        $this->categories=[
          0=>[
              'id'=>1,
              'name'=>'Electronics',
              'image'=>'category1.jpeg',
          ],
          1=>[
              'id'=>2,
              'name'=>'Man Fashion',
              'image'=>'category2.jpg',
          ],
          2=>[
              'id'=>3,
              'name'=>'Sports Item',
              'image'=>'category3.jpg',
          ],
            3=>[
              'id'=>4,
              'name'=>'Women Fashion',
              'image'=>'category4.jpg',
          ],
            4=>[
              'id'=>5,
              'name'=>'Kids Fashion',
              'image'=>'category5.jpg',
          ],
        ];
    }

    public function getAllCategory(){
       return $this->categories;
    }

}