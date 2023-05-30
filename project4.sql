CREATE TABLE tb_category (
      cat_id INT(11) NOT NULL AUTO_INCREMENT,
      cat_name VARCHAR(100) NOT NULL,
      cat_text TEXT DEFAULT NULL,
      PRIMARY KEY(cat_id),
      UNIQUE KEY(cat_name)
);