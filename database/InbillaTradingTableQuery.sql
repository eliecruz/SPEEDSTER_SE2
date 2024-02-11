USE InbillaTrading;


CREATE TABLE Customers (
  customer_ID INT IDENTITY (1,1),
  first_Name VARCHAR(50) NOT NULL,
  last_Name VARCHAR(50) NOT NULL,
  username VARCHAR(max) NOT NULL,
  password VARCHAR(max) NOT NULL, 
  gender VARCHAR(20),
  contact_Num varchar(15) NOT NULL,
  email_Add VARCHAR(max) NOT NULL,
  house_Num INT NOT NULL,
  street VARCHAR(max) NOT NULL,
  barangay VARCHAR(max) NOT NULL,
  city VARCHAR(max) NOT NULL,
  postal_Code INT NOT NULL,
  CONSTRAINT PK_customer_ID PRIMARY KEY (customer_ID)
);

CREATE TABLE Categories (
	category_ID INT IDENTITY (1,1),
	category_Label varchar (50) NOT NULL,
	category_Desc varchar (max),
	CONSTRAINT PK_category_ID PRIMARY KEY (category_ID)
);

CREATE TABLE Promotions (
	promotion_ID INT IDENTITY (1,1),
	promotion_Type varchar (50) NOT NULL,
	promo_Benefits varchar (max),
	CONSTRAINT PK_promotion_ID PRIMARY KEY (promotion_ID)
);

CREATE TABLE Products (
	product_ID INT IDENTITY(1,1),
	category_ID INT,
	promotion_ID int,
	product_Name VARCHAR (100) NOT NULL,
	product_Desc varchar (max),
	product_Price money NOT NULL,
	product_Image image,
	CONSTRAINT PK_product_ID_Products PRIMARY KEY (product_ID),
	CONSTRAINT FK_category_ID_Products FOREIGN KEY (category_ID) REFERENCES Categories (category_ID),
	CONSTRAINT FK_promotion_ID_Products FOREIGN KEY (promotion_ID) REFERENCES Promotions (promotion_ID)
);

CREATE TABLE Stocks (
	category_ID INT,
	product_ID INT,
	stocks INT,
	CONSTRAINT PK_product_ID_Stocks PRIMARY KEY (product_ID),
	CONSTRAINT FK_product_ID_Stocks FOREIGN KEY (product_ID) REFERENCES Products (product_ID),
	CONSTRAINT FK_category_ID_Stocks FOREIGN KEY (category_ID) REFERENCES Categories (category_ID)
);

CREATE TABLE Tickets(
	ticket_ID INT IDENTITY(1,1),
	customer_ID INT,
	ticket_Tag VARCHAR (max),
	ticket_Subject VARCHAR(max),
	ticket_Desc VARCHAR(max),
	CONSTRAINT PK_ticket_ID PRIMARY KEY (ticket_ID),
	CONSTRAINT FK_customer_ID_Tickets FOREIGN KEY(customer_ID) REFERENCES Customers(customer_ID) 
);

CREATE TABLE Favorites(
	customer_ID int,
	product_ID int,
	CONSTRAINT PK_product_ID_customer_ID_Favorites PRIMARY KEY (customer_ID, product_ID),
	CONSTRAINT FK_customer_ID_Favorites FOREIGN KEY (customer_ID) REFERENCES Customers(customer_ID),
	CONSTRAINT FK_product_ID_Favorites FOREIGN KEY (product_ID) REFERENCES Products(product_ID)
);

CREATE TABLE Shopping_Cart(
	customer_ID INT,
	product_ID INT,
	quantity int NOT NULL,
	CONSTRAINT PK_product_ID_customer_ID_ShoppingCart PRIMARY KEY (customer_ID, product_ID),
	CONSTRAINT FK_customer_ID_ShoppingCart FOREIGN KEY (customer_ID) REFERENCES Customers(customer_ID),
	CONSTRAINT FK_product_ID_ShoppingCart FOREIGN KEY (product_ID) REFERENCES Products(product_ID)
);

CREATE TABLE Payment(
	product_ID INT,
	payment_Mode VARCHAR(50) NOT NULL,
	mop_Details VARCHAR,
	CONSTRAINT PK_product_ID_Payment PRIMARY KEY(product_ID),
	CONSTRAINT FK_product_ID_Payment FOREIGN KEY(product_ID) REFERENCES Products(product_ID)
);

CREATE TABLE Delivery(
	product_ID INT,
	delivery_Mode VARCHAR(50) NOT NULL,
	delivery_Details VARCHAR,
	CONSTRAINT PK_product_ID_Delivery PRIMARY KEY(product_ID),
	CONSTRAINT FK_product_ID_Delivery FOREIGN KEY(product_ID) REFERENCES Products(product_ID)
);

CREATE TABLE CustomerOrder (
	order_ID INT IDENTITY(1,1),
	product_ID INT,
	customer_ID INT,
	order_Quantity int,
	order_MOP VARCHAR (50) NOT NULL,
	order_MOD VARCHAR (50) NOT NULL,
	order_Status VARCHAR(20),
	CONSTRAINT PK_order_ID_product_ID PRIMARY KEY(order_ID, product_ID),
	CONSTRAINT FK_product_ID_CustomerOrder FOREIGN KEY(product_ID) REFERENCES Products(product_ID),
	CONSTRAINT FK_customer_ID_CustomerOrder FOREIGN KEY(customer_ID) REFERENCES Customers(customer_ID)
);

CREATE TABLE Purchase_History(
	customer_ID INT,
	order_ID INT,
	product_ID INT,
	CONSTRAINT PK_customer_ID_order_ID_PurchaseHistory PRIMARY KEY(customer_ID, order_ID),
	CONSTRAINT FK_customer_ID_PurchaseHistory FOREIGN KEY(customer_ID) REFERENCES Customers(customer_ID),
	CONSTRAINT FK_order_ID_PurchaseHistory FOREIGN KEY(order_ID, product_ID) REFERENCES CustomerOrder (order_ID, product_ID)
);

CREATE TABLE Reviews(
	review_ID INT IDENTITY(1,1),
	order_ID INT,
	product_ID INT,
	review_Rating INT NOT NULL,
	review_Desc VARCHAR(max),
	CONSTRAINT PK_review_ID PRIMARY KEY(review_ID),
	CONSTRAINT FK_order_ID_Reviews FOREIGN KEY(order_ID, product_ID) REFERENCES CustomerOrder (order_ID, product_ID),
	CONSTRAINT FK_product_ID_Reviews FOREIGN KEY(product_ID) REFERENCES Products(product_ID)
);