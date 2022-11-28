SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE classes (
  id int NOT NULL,
  name varchar(100) DEFAULT NULL,
  image varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO classes (id, name, image) VALUES
(1, 'classe 1', 'classe1.png'),
(2, 'classe 2', 'classe2.png');




CREATE TABLE users (
  id int NOT NULL,
  username varchar(100) DEFAULT NULL,
  password varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE students (
  id int NOT NULL,
  nom varchar(100) DEFAULT NULL,
  classe varchar(100) DEFAULT NULL,
  image varchar(100) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO students (id, nom, classe, image) VALUES
(1, 'truc', 'classe 1', 'evan.png'),
(2, 'toto', 'classe 1', 'leo.png'),
(3, 'machin', 'classe 2', 'alan.png'),
(4, 'bidule', 'classe 2', 'nathan.png');





ALTER TABLE students
  ADD PRIMARY KEY (id);


INSERT INTO users (id, username, password) VALUES
(1, 'admin', 'admin@');


ALTER TABLE classes
  ADD PRIMARY KEY (id);





ALTER TABLE users
  ADD PRIMARY KEY (id);
COMMIT;