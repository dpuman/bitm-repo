<?php


namespace App\classes;


class Product
{
    public $products=[];
    public $categoryProducts=[];


    public function __construct()
    {
        $this->products=[
            0=>[
                'id'=>1,
                'category_id'=>1,
                'name'=>'Sony Xperia XZ',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you ',
                'price'=>55000,
                'image'=>'product1.webp',
            ],
            1=>[
                'id'=>2,
                'category_id'=>1,
                'name'=>'Samsung Galexy s22',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you ',
                'price'=>150000,
                'image'=>'product2.jpg',
            ],
            2=>[
                'id'=>3,
                'category_id'=>2,
                'name'=>'Denim Jeans Pant',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you ',
                'price'=>5000,
                'image'=>'product3.jpeg',
            ],
            3=>[
                'id'=>4,
                'category_id'=>2,
                'name'=>'Fashionable T-Shrt',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you ',
                'price'=>1000,
                'image'=>'product4.jpeg',
            ],
            4=>[
                'id'=>5,
                'category_id'=>3,
                'name'=>'New Cricket Bat',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you ',
                'price'=>1200,
                'image'=>'product5.jpg',
            ],
            5=>[
                'id'=>6,
                'category_id'=>3,
                'name'=>'Foot Ball',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you ',
                'price'=>6200,
                'image'=>'product6.webp',
            ],
            6=>[
                'id'=>7,
                'category_id'=>4,
                'name'=>'Sharee',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you ',
                'price'=>9000,
                'image'=>'product7.jpeg',
            ],
            7=>[
                'id'=>8,
                'category_id'=>4,
                'name'=>'T-Shart',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you ',
                'price'=>9000,
                'image'=>'product8.webp',
            ],
            8=>[
                'id'=>9,
                'category_id'=>5,
                'name'=>'Fashionable T-Shirt',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you ',
                'price'=>1200,
                'image'=>'product9.jpg',
            ],
            9=>[
                'id'=>10,
                'category_id'=>5,
                'name'=>'Fashionable Pant',
                'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you ',
                'price'=>1200,
                'image'=>'product10.jpg',
            ],
        ];
    }

    public function getAllProducts(){
        return $this->products;
    }

    public function getProductByCategory($id){
        foreach ($this->products as $product){
            if($product['category_id']==$id){
                array_push($this->categoryProducts,$product);
            }
        }
        return $this->categoryProducts;
    }


    public function getSingleProduct($id){
        foreach ($this->products as $product){
                if($product['id']==$id){
                    return $product;
                }
        }



    }

}