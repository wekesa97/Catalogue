<?php
		class Products{
			private $db;
			public function __construct(){
				$this->db = new Database;
			}
			// Get All Jobs
			public function getAllProducts(){
				$this->db->query("SELECT products.*, categories.name AS cname
							FROM products	
							INNER JOIN categories 
							ON products.category_id = categories.id
							ORDER BY post_date DESC
							");
				//Assign Result Set
				$results = $this->db->resultSet();

				return $results;
			}
			//Get All Categories
			public function getCategories(){
				$this->db->query("SELECT * FROM categories");
				//Assign Result Set
				$results = $this->db->resultSet();

				return $results;
			}
			//Get Jobs By Categories
			public function getByCategory($category){
				$this->db->query("SELECT products.*, categories.name AS cname
							FROM products	
							INNER JOIN categories 
							ON products.category_id = categories.id
							WHERE products.category_id = $category
							ORDER BY post_date DESC
							");
				//Assign Result Set
				$results = $this->db->resultSet();

				return $results;
			} 
			//Get Category
			public function getCategory($category_id){
				$this->db->query("SELECT * FROM categories WHERE id= :category_id ");
				$this->db->bind(':category_id',$category_id);
				//Assign Row
				$row=$this->db->single();
				return $row;

			}
			//Get Job
			public function getProduct($id){
				$this->db->query("SELECT * FROM products WHERE id= :id ");
				$this->db->bind(':id',$id);
				//Assign Row
				$row=$this->db->single();
				return $row;
			}
			//Create Job
			public function create($data){
				//insert Query
				$this->db->query("INSERT INTO products(category_id,product_title,company,description,location,price,contact_user,contact_email,image)
					VALUES (:category_id,:product_title, :company,:description,:location,:price,:contact_user,:contact_email,:image)");
				//Bind Data
				$this->db->bind(':category_id',$data['category_id']);
				$this->db->bind(':product_title',$data['product_title']);
				$this->db->bind(':company',$data['company']);
				$this->db->bind(':description',$data['description']);
				$this->db->bind(':location',$data['location']);
				$this->db->bind(':price',$data['price']);
				$this->db->bind(':contact_user',$data['contact_user']);
				$this->db->bind(':contact_email',$data['contact_email']);
				$this->db->bind(':image',$data['image']);
				//Execute
				if ($this->db->execute()){
					return true;
				}else{
					return false;
				}
			}
			//Delete job
			public function delete($id){
				//insert Query
				$this->db->query("DELETE FROM products WHERE id=$id");
				
				//Execute
				if ($this->db->execute()){
					return true;
				}else{
					return false;
				}
 
			}
			//Update Job
			public function update($id, $data){
				//insert Query
				$this->db->query("UPDATE products
					SET 
					category_id=:category_id,
					product_title = :product_title,
					company = :company,
					description = :description,
					location = :location,
					price = :price,
					contact_user=:contact_user,
					contact_email=:contact_email,
					image=:image
					WHERE id=$id");
				//Bind Data
				$this->db->bind(':category_id',$data['category_id']);
				$this->db->bind(':product_title',$data['product_title']);
				$this->db->bind(':company',$data['company']);
				$this->db->bind(':description',$data['description']);
				$this->db->bind(':location',$data['location']);
				$this->db->bind(':price',$data['price']);
				$this->db->bind(':contact_user',$data['contact_user']);
				$this->db->bind(':contact_email',$data['contact_email']);
				$this->db->bind(':image',$data['image']);
				//Execute
				if ($this->db->execute()){
					return true;
				}else{
					return false;
				}
			}


		}